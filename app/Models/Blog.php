<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Blog extends Model
{
    /**
     * Função: Registro de novo post
     *
     * @param [string] $title
     * @param [string] $image
     * @param [string] $abstract
     * @param [string] $content
     * @return bool
     */
    public function register($title, $image, $abstract, $content)
    {
        $post = new Blog();
        
        $post->id       = rand(100, 999);
        $post->title    = $title;
        $post->abstract = $abstract;
        $post->body     = $content;
        $post->file     = $image;
        $post->user_id  = auth()->user()->id;

        $post->save();

        if($post)
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
