<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Presence extends Model
{
    /**
     * Função: Registro de presença pelo dispositivo RFID
     *
     * @param [int] $user_uid
     * @return bool
     */
    public function register($user_uid) 
    {
        $user = User::where('uid', $user_uid)->first();

        if(!$user)
            return false;

        $record = Presence::where('user_id', $user->id)->whereDate('checkIn', date('Y-m-d'))->first();
        
        if($record)
        {
            if($record->checkOut == null) 
            {
                $record->checkOut = date('Y-m-d H:i:s');
                $record->save();

                return true;
            }
            return false;
        }

        $record = new Presence;

        $record->user_id = $user->id;
        $record->checkIn = date('Y-m-d H:i:s');
        $record->status  = 1;
        $record->localE  = "RFID";
        $record->localS  = "RFID";
        $record->save();

        if($record)
            return true;

        return false;
    } 

    /**
     * Função: Registro de presença pela plataforma para Campinas
     *
     * @param [string] $local
     * @return bool
     */
    public function registerPlatform($local)
    {
        $record = auth()->user()->presences()->whereDate('checkIn', date('Y-m-d'))->first();
        
        if($record)
        {
            if($record->checkOut == null) 
            {
                $record->checkOut = date('Y-m-d H:i:s');
                $record->localS   = $local;
                $record->save();

                return true;
            }
            return false;
        }

        $record = new Presence;

        $record->user_id = auth()->user()->id;
        $record->checkIn = date('Y-m-d H:i:s');
        $record->localE  = $local;
        $record->status  = 1;
        $record->save();

        if($record)
            return true;

        return false;
    }

    /**
     * Função: Registro de presença manual pela plataforma
     *
     * @param [int] $user_id
     * @param [date] $data
     * @param [time] $checkIn
     * @param [time] $checkOut
     * @return bool
     */
    public function manual($user_id, $data, $checkIn, $checkOut)
    {   
        $inData  = $data.' '.$checkIn;
        $outData = $data.' '.$checkOut;

        $record = new Presence;

        $record->user_id    = $user_id;
        $record->checkIn    = date_format(date_create_from_format('d/m/Y H:i', $inData), 'Y-m-d H:i:s');
        $record->checkOut   = date_format(date_create_from_format('d/m/Y H:i', $outData), 'Y-m-d H:i:s');
        $record->localE     = "MANUAL";
        $record->localS     = "MANUAL";
        $record->status     = 1;

        $record->save();

        if($record)
            return true;

        return false;
    }

    /**
     * Relação: Model User
     * Cada presença pertence a um único usuário
     *
     * @return User
     */
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
