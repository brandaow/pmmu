<?php

namespace App\Http\Controllers;

use Calendar;
use App\Log;
use App\Alert;
use App\Models\City;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\UserValidationFormRequest;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | Este controller é responsável por gerenciar todo o conteúdo relacioado
    | ao usuário logado. Exibir suas informações, alterá-las, entre outros.
    |
    */

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Página: Home
     * Permissão: Todos os usuários
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $presence = auth()->user()->presences()->latest()->first();
        $alerts = Alert::whereDate('endShow', '>', date('Y-m-d'))->get();

        $pmmu = auth()->user()->city()->first();
        $cont = 0;
        
        if($pmmu) 
        {
            if($pmmu->fileCartaIntecao != null)        $cont++;
            if($pmmu->fileTermoCooperacao != null)     $cont++;
            if($pmmu->fileTermoAditivo != null)        $cont++;
            if($pmmu->statusFormaEstagios == "c")      $cont++;
            if($pmmu->fileCartaIntecao != null)        $cont++;
            if($pmmu->fileGrupoLocal != null)          $cont++;
            if($pmmu->fileConvite != null)             $cont++;
            if($pmmu->fileApres != null)               $cont++;
            if($pmmu->fileApresentacao != null)        $cont++;
            if($pmmu->fileDescObjetivo != null)        $cont++;
            if($pmmu->fileMobilidade != null)          $cont++;
            if($pmmu->filePoliticaNasc != null)        $cont++;
            if($pmmu->fileBaseConsti != null)          $cont++;
            if($pmmu->fileInvestimentos != null)       $cont++;
            if($pmmu->fileMeioAmbiente != null)        $cont++;
            if($pmmu->fileHistorico != null)           $cont++;
            if($pmmu->fileDistribuicao != null)        $cont++;
            if($pmmu->fileTerritorio != null)          $cont++;
            if($pmmu->fileCaracterizacao != null)      $cont++;
            if($pmmu->fileAtrativos != null)           $cont++;
            if($pmmu->fileDesenvolvimentos != null)    $cont++;
            if($pmmu->fileFrota != null)               $cont++;
            if($pmmu->fileLinhas != null)              $cont++;
            if($pmmu->fileJustificativa != null)       $cont++;
            if($pmmu->fileObjetivo != null)            $cont++;
            if($pmmu->fileMetodologia != null)         $cont++;
        }
        $percent = ($cont * 100) / 26;

        $events = Event::get();
        $event_list = [];
        foreach($events as $event)
        {
            $event_list[] = Calendar::event(
                $event->title,
                true,
                new \DateTime($event->whenEvent),
                new \DateTime($event->whenEvent),
                null,
                    [
                        'color' => array('#eb4034', '#ebd334', '#34eb5f', '#34c9eb', '#8c34eb', '#969395')[$event->color],
                    ]
            );
        }
        $calendar_details = Calendar::addEvents($event_list);

        return view('home', compact('presence', 'alerts', 'percent', 'pmmu', 'calendar_details'));
    }

    /**
     * Página: Perfil
     * Permissão: Todos os usuários
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile()
    {
        $city = City::find(auth()->user()->city_id);
        return view('profile', compact('city'));
    }

    /**
     * Request: Perfil - Alterar Senha
     * Permissão: Todos os usuários
     *
     * @return Redirect
     */
    public function alterPass(UserValidationFormRequest $request, Log $log) 
    {
        if ($request->passwordNov == null || $request->passwordCon == null) 
            return redirect()->route('profile')->with('error', 'Preencha todos os campos');

        if ($request->passwordNov != $request->passwordCon)
            return redirect()->route('profile')->with('error', 'Você digitou senhas distintas');
        
        $password = bcrypt($request->passwordNov);

        $update = auth()->user()->update(array('password' => $password));
        $log->register("Alterou: Senha");

        if ($update)
            return redirect()->route('profile')->with('success', 'Sucesso ao atualizar');

        return redirect()->route('profile')->with('error', 'Falha ao atualizar');
    }
    
    /**
     * Request: Perfil - Descrição Pública
     * Permissão: Todos os usuários
     *
     * @return Redirect
     */
    public function description(Request $request, Log $log) 
    {
        $request->validate([
            'description' => 'required|string|min:15',
        ], [
            'description.required' => 'Você deve preencher este campo.',
            'description.min'      => 'Insira uma descrição mais longa.',
        ]);

        auth()->user()->description = $request->description;
        auth()->user()->save();
        $log->register("Alterou: Descrição Pública");
        
        return redirect()->route('profile')->with('success', 'Descrição salva com sucesso.');
    }

    public function regEvent(Request $request, Event $event, Log $log)
    {
        $request->validate([
            'title' => 'required|string',
            'date'  => 'required|date_format:Y-m-d',
            'time'  => 'required|date_format:H:i',
        ], [
            'title.required'    => 'Você deve preencher este campo.',
            'date.required'     => 'Você deve preencher este campo.',
            'time.required'     => 'Você deve preencher este campo.',
            'date.date_format'  => 'Formato inválido, tente dd/mm/aaaa.',
            'time.date_format'  => 'Formato inválido, tente hh:mm.',
        ]);

        if(Event::whereDate('whenEvent', $request->date)->count() >= 2)
            return redirect()->route('home')->with('error', 'Limite máximo de eventos neste dia foi atingido.');   

        $new = $event->register($request->date, $request->time, $request->title);
            
        if($new)
        {
            $log->register("Criou: Evento - $request->title");
            return redirect()->route('home')->with('success', 'Evento criado com sucesso.');
        }
        return redirect()->route('home')->with('error', 'Ocorreu um erro, tente novamente.');
    }
}
