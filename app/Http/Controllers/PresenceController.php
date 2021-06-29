<?php

namespace App\Http\Controllers;

use App\Log;
use App\Models\Presence;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Presence Controller
    |--------------------------------------------------------------------------
    |
    | Este controller é responsável por exibir as presenças realizadas ao 
    | usuário, além de gerenciar os dois métodos de presença atuais.
    |
    */

    /**
     * Página: Presença
     * Permissão: Todos os usuários
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        $presences = auth()->user()->presences()->latest()->get();
        return view('presence', compact('presences'));
    }

    /**
     * Request: Presença - Campinas
     * Permissão: Usuários do campus de Campinas
     *
     * @param Request $request
     * @param Presence $presence
     * @return Redirect
     */
    public function write(Request $request, Presence $presence)
    {
        if(auth()->user()->campus != "cam")
            return redirect()->route('home')->with('error', 'Você não possui autorização para acessar este recurso.');

        $request->validate([
            'local' => 'required|string',
        ], [
            'local.required' => 'Você deve preencher este campo.',
        ]);

        $record = $presence->registerPlatform($request->local);

        if($record)
            return redirect()->route('presence')->with('success', 'Operação realizada com sucesso.');

        return redirect()->route('presence')->with('error', 'Ocorreu um erro, tente novamente.');
    }

    /**
     * Request: Presença - RFID
     * Permissão: Todos os usuários
     *
     * @param Request $request
     * @param Presence $presence
     * @return Response
     */
    public function rfid(Request $request, Presence $presence)
    {
        if($request->token_access != "9g8peWj75l6")
            return response('', 401);

        $record = $presence->register($request->ud);

        if($record)  
            return response('', 201);
            
        return response('', 409);
    }

    /**
     * Request: Presença - Gerador de lista de presença (PDF)
     * Permissão: Todos os usuários
     *
     * @param Request $request
     * @return Stream
     */
    public function list(Request $request, Log $log)
    {
        $request->validate([
            'month'     => 'required',
        ]);

        $log->register("Baixou: Lista de Presença");
        $data = auth()->user()->presences()->whereMonth('checkIn', $request->month)->get();

        setlocale (LC_ALL, 'pt_BR');
        $monthWri = ucfirst(strftime('%B', mktime(0, 0, 0, $request->month, 1, date('Y'))));
        $monthSta = strtotime(mktime(1, 1, 1, $request->month, 1, date('Y')));
        $monthNum = $request->month;
        
        $city = " --- ";
        if(auth()->user()->city_id != null) $city = auth()->user()->city->name;

        $pdf = \PDF::loadView('presencePDF', compact(['data', 'monthWri', 'monthSta', 'monthNum', 'city']));  
        return $pdf->stream('download.pdf');
    }
}
