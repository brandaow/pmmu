<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{	
	/**
     * Função: Registro genérico de alertas
     *
     * @param [string] $title
     * @param [string] $message
     * @param [string] $type
     * @param [string] $icon
     * @param [string] $can
     * @param [timestamp] $start
     * @param [timestamp] $end
     * @return bool
     */
    public function register($title, $message, $type, $icon, $can, $start, $end)
    {   
		$record = new Alert();
		
        $record->title     = $title;
		$record->message   = $message;
		$record->type      = $type;
        $record->icon      = $icon;
		$record->can       = $can;
		$record->startShow = $start;
		$record->endShow   = $end;
        $record->save();

        if($record)
            return true;

        return false;
    }
}
