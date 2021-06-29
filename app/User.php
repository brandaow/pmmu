<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Presence;
use App\Models\City;
use App\Models\Blog;
use App\Log;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * Variável: Array de atributos permitidos na atribuição em massa
     *
     * @var array
     */
    protected $fillable = [
        'name', 'ra', 'email', 'password', 'campus', 'can', 'uid', 'city_id'
    ];

    /**
     * Variável: Array de atributos proibidos na atribuição em massa
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Variável: Array de atributos para conversão de tipo
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relação: Model City
     * Cada usuário pertence a apenas uma cidade
     *
     * @return City
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Relação: Model Presence
     * Cada usuário pode conter várias presenças
     *
     * @return Presence
     */
    public function presences()
    {
        return $this->hasMany(Presence::class);
    }

    /**
     * Relação: Model Log
     * Cada usuário pode conter vários logs
     *
     * @return Presence
     */
    public function logs()
    {
        return $this->hasMany(Log::class);
    }

    /**
     * Relação: Model Blog
     * Cada usuário pode conter vários posts
     *
     * @return Presence
     */
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
