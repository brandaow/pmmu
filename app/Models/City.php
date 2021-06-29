<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class City extends Model
{
    /**
     * Relação: Model User
     * Cada cidade pertence a vários usuários
     *
     * @return User
     */
    public function user() 
    {
        return $this->hasMany(User::class);
    }
}
