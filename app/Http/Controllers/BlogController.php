<?php

namespace App\Http\Controllers;

use App\Log;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Blog Controller
    |--------------------------------------------------------------------------
    |
    | Este controller é responsável por todas as ações relacionadas ao Blog. 
    |
    */

    /**
     * Página: Blog
     * Permissão: Todos os usuários
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {      
        $posts = Blog::orderBy('updated_at', 'desc')->get();
        return view('blog', compact('posts'));
    }

    /**
     * Request: Novo Post
     * Permissão: Todos os usuários
     *
     * @param Request $request
     * @param Blog $blog
     * @param Log $log
     * @return redirect
     */
    public function newPost(Request $request, Blog $blog, Log $log)
    {
        $request->validate([
            'title'     => 'required|string',
            'image'     => 'required',
            'abstract'  => 'required|string',
            'content'   => 'required|string',
        ], [
            'title.required'    => 'Você deve preencher este campo.',
            'image.required'    => 'Você deve preencher este campo.',
            'abstract.required' => 'Você deve preencher este campo.',
            'content.required'  => 'Você deve preencher este campo.',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid())
        {
            if ($request->image->extension() != "png" && $request->image->extension() != "jpg" && $request->image->extension() != "jpeg")
                return redirect()->route('rss')->with('error', 'Extensão não suportada, tente novamente com arquivos .jpg, .jpeg ou .png.');

            $nameFile = date('dmHis').kebab_case($request->title).".".$request->image->extension();
            $update = $request->image->storeAs('uploads', $nameFile);   
            
            if (!$update)
                return redirect()->route('rss')->with('error', 'Erro no upload, tente novamente.');

            $post = $blog->register($request->title, $nameFile, $request->abstract, $request->content);
            
            if($post)
            {
                $log->register("Criou: Post - $request->title");
                return redirect()->route('rss')->with('success', 'Post criado com sucesso.');
            }
            return redirect()->route('rss')->with('error', 'Ocorreu um erro, tente novamente.');
        }
    }
}
