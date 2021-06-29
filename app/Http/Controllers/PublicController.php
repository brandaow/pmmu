<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\User;

class publicController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Public Controller
    |--------------------------------------------------------------------------
    |
    | Este controller é responsável por exibir e gerenciar as páginas
    | públicas de toda a plataforma.
    |
    */

    /**
     * Página: Home
     * Permissão: Público
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $descs = User::select('description')->get();
        return view('public.home', compact('descs'));
    }
    
    /**
     * Página: Blog
     * Permissão: Público
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog()
    {
        $posts = Blog::get();
        return view('public.blog', compact('posts'));
    }

    /**
     * Página: Post Específico
     * Permissão: Público
     *
     * @param [int] $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function post($id)
    {
        $post = Blog::findOrFail($id);
        return view('public.art', compact('post'));
    }
    
    /**
     * Página: Extensão
     * Permissão: Público
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function extension()
    {
        $descs = User::select('description')->get();
        return view('public.extension', compact('descs'));
    }
}
