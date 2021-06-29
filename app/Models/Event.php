<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Event extends Model
{
    /**
     * Função: registro de novo evento
     *
     * @param [date] $date
     * @param [time] $time
     * @param [string] $title
     * @return bool
     */
    public function register($date, $time, $title)
    {
        $event = new Event();

        $event->whenEvent   = $date." ".$time;
        $event->title       = $title;
        $event->color       = rand(0, 5);
        $event->user_id     = auth()->user()->id;

        $event->save();

        if($event)
            return true;
        
        return false;
    }

    /**
     * Relação: Model User
     * Cada evento pertence a um único usuário
     *
     * @return void
     */
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
