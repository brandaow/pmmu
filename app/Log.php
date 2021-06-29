<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * Função: Registro genérico para log de atividades 
     *
     * @param [string] $action
     * @return bool
     */
    public function register($action)
    {   
        $record = new Log();
		
        $record->action  = $action;
        $record->user_id = auth()->user()->id;
        $record->city_id = auth()->user()->city_id;
        $record->save();

        if($record)
            return true;

        return false;
    }
    
    /**
     * Relação: Model User
     * Cada log pertence a um único usuário
     *
     * @return void
     */
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
