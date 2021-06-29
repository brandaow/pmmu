<?php

namespace App\Http\Controllers;

use App\Log;
use App\User;
use App\Alert;
use App\Mail\SendMailUser;
use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin Controller
    |--------------------------------------------------------------------------
    |
    | Este controller é responsável por todas as ações exclusivas dos usuários
    | de níveis de acesso superiores. 
    |
    */

    /**
     * Página: Relatórios
     * Permissão: Manager e Master
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->can != 'manager' && auth()->user()->can != 'master')
            return redirect()->route('home')->with('error', 'Você não possui autorização para acessar este recurso.');
   
        $users = User::get();
        $array = array();
        $workload = 0;
        $array2 = array();

        foreach($users as $user)
        {
            $presenceCount = Presence::whereMonth('checkIn', date('m'))->where('user_id', $user->id)->get();
            $array[$user->name] = $presenceCount->count();

            $workload = 0;
            foreach($presenceCount as $presenceUn)
            {   
                if($presenceUn->checkOut != null)
                    $workload += strtotime($presenceUn->checkOut) - strtotime($presenceUn->checkIn);
            }

            $array2[$user->name] = $workload;
        }

        $presences = Presence::whereMonth('checkIn', '>=', date('m', strtotime('-3 month')))->get();
        
        return view('admin.index', compact('presences', 'array', 'array2'));
    }

    /**
     * Página: Lançar Presença
     * Permissão: Master
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function new()
    {
        if(auth()->user()->can != 'master')
            return redirect() ->route('home')->with('error', 'Você não possui autorização para acessar este recurso.');

        $users = User::get();
        return view('admin.new', compact('users'));
    }

    /**
     * Request: Lançar Presença
     * Permissão: Master
     *
     * @param Request $request
     * @param Presence $presence
     * @return Redirect
     */
    public function register(Request $request, Presence $presence, Log $log)
    {
        if(auth()->user()->can != 'master')
            return redirect()->route('home')->with('error', 'Você não possui autorização para acessar este recurso.');
        
        $request->validate([
            'user'      => 'required|string',
            'data'      => 'required|date_format:d/m/Y',
            'checkIn'   => 'required|date_format:H:i',
            'checkOut'  => 'required|date_format:H:i',
        ], [
            'user.required'         => 'Você deve preencher este campo.',
            'data.required'         => 'Você deve preencher este campo.',
            'checkIn.required'      => 'Você deve preencher este campo.',
            'checkOut.required'     => 'Você deve preencher este campo.',
            'data.date_format'      => 'Formato inválido.',
            'checkIn.date_format'   => 'Formato inválido.',
            'checkOut.date_format'  => 'Formato inválido.',
        ]);
            
        $record = $presence->manual($request->user, $request->data, $request->checkIn, $request->checkOut);

        if($record) 
        {
            $log->register("Registrou: Presença - ".$request->data);
            return redirect()->route('new')->with('success', 'Presença registrada com sucesso.');
        }
            
        return redirect()->route('new')->with('error', 'Ocorreu um erro, tente novamente.');
    }

    /**
     * Página: Alertas
     * Permissão: Manager e Master
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function alerts()
    {
        if(auth()->user()->can != 'manager' && auth()->user()->can != 'master')
            return redirect()->route('home')->with('error', 'Você não possui autorização para acessar este recurso.');

        $alerts = Alert::get();
        return view('admin.alerts', compact('alerts'));
    }

    /**
     * Request: Criar Alertas
     * Permissão: Manager e Master
     * 
     * @param Request $request
     * @param Alert $alert
     * @return Redirect
     */
    public function alertsReg(Request $request, Alert $alert, Log $log)
    {
        if(auth()->user()->can != 'manager' && auth()->user()->can != 'master')
            return redirect()->route('home')->with('error', 'Você não possui autorização para acessar este recurso.');

        $request->validate([
            'title'     => 'required|string',
            'message'   => 'string',
            'type'      => "required|string",
            'icon'      => 'required|string',
            'can'       => "required|string",
            'startShow' => 'required|string',
            'endShow'   => 'required|string',
        ],[
            'title.required'        => 'Você deve preencher este campo.',
            'type.required'         => 'Você deve preencher este campo.',
            'icon.required'         => 'Você deve preencher este campo.',
            'can.required'          => 'Você deve preencher este campo.',
            'startShow.required'    => 'Você deve preencher este campo.',
            'endShow.required'      => 'Você deve preencher este campo.',
        ]);
        
        $record = $alert->register($request->title, $request->message, $request->type, $request->icon, $request->can, $request->startShow, $request->endShow);

        if($record) 
        {
            $log->register("Criou: Alerta - ".$request->title);
            
            $users = ($request->can == "all") ? User::get() : User::where('can', $request->can)->get();
            foreach($users as $user) 
            {
                Mail::to($user)->send(new SendMailUser($user->name, $request->title, $request->message));
            }
            
            return redirect()->route('alerts')->with('success', 'Alerta definido com sucesso.');
        }
            
        return redirect()->route('alerts')->with('error', 'Ocorreu um erro, tente novamente.');
    }

    /**
     * Request: Apagar Alertas
     * Permissão: Manager e Master
     *
     * @param Request $request
     * @param Log $log
     * @return Redirect
     */
    public function alertsDel(Request $request, Log $log)
    {
        if(auth()->user()->can != 'manager' && auth()->user()->can != 'master')
            return redirect()->route('home')->with('error', 'Você não possui autorização para acessar este recurso.');

        $request->validate(['identify' => 'required|numeric']);
        
        $alert = Alert::findOrFail($request->identify);

        $log->register("Deletou: Alerta - ".$alert->title);
        $alert->delete();

        return redirect()->route('alerts')->with('success', 'Alerta deletado com sucesso.');
    }

    /**
     * Página: Log de Atividade
     * Permissão: Master
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function log()
    {
        if(auth()->user()->can != 'master')
            return redirect()->route('home')->with('error', 'Você não possui autorização para acessar este recurso.');
   
        $logs = Log::get();

        return view('admin.log', compact('logs'));
    }
}
