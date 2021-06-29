<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

use Illuminate\Support\Facades\Route;

/**
 * Grupo de rotas acessíveis apenas a usuários autenticados
 */
Route::group(['middleware' => ['auth']], function()
{
    /**
     * Rotas designadas ao HomeController
     */
    Route::get ('/home', 'HomeController@index')->name('home');
    Route::get ('/profile', 'HomeController@profile')->name('profile');
    Route::post('/profile', 'HomeController@alterPass')->name('profile.alterPass');
    Route::post('/description', 'HomeController@description')->name('profile.description');
    Route::post('/event', 'HomeController@regEvent')->name('event.add');
    
    /**
     * Rotas designadas ao BlogController
     */
    Route::get ('/rss', 'BlogController@index')->name('rss');
    Route::post('/rss', 'BlogController@newPost')->name('newPost');

    /**
     * Rotas designadas ao PresenceController
     */
    Route::get ('/presence', 'PresenceController@index')->name('presence');
    Route::post('/presence', 'PresenceController@list')->name('presence.list');
    Route::get ('/presence/register', function() { return redirect('presence'); });
    Route::post('/presence/register', 'PresenceController@write')->name('presence.register');
    
    /**
     * Rotas designadas ao CityController
     */
    Route::get ('/view/{id}', 'CityController@index')->name('city');
    Route::post('/view/upload/1', 'CityController@fileUploadInicio')->name('upload.inicio');
    Route::post('/view/upload/2', 'CityController@fileUploadFormalizacao')->name('upload.formaliza');
    Route::post('/view/upload/3', 'CityController@fileUpload1Apresentacao')->name('upload.1apresentacao');
    Route::post('/view/upload/4', 'CityController@fileUploadProduto1')->name('upload.produto1');

    /**
     * Rotas designadas ao AdminController
     */
    Route::get   ('/records', 'AdminController@index')->name('records');
    Route::get   ('/alerts', 'AdminController@alerts')->name('alerts');
    Route::post  ('/alerts', 'AdminController@alertsReg')->name('alerts.reg');
    Route::delete('/alerts', 'AdminController@alertsDel')->name('alerts.del');
    Route::get   ('/new', 'AdminController@new')->name('new');
    Route::post  ('/new', 'AdminController@register')->name('new.conf');
    Route::get   ('/log', 'AdminController@log')->name('log');
});

/**
 * Rotas do processo de autenticação (login, register, forgot password, etc)
 */
Auth::routes();

/**
 * Habilita que as rotas serão acessíveis apenas ao usuários com email verificado
 */
Auth::routes(['verify' => true]);

/**
 * Grupo de rotas acessíveis ao público, não necessáriamente autenticados
 */
Route::get ('/', 'PublicController@index')->name('inicio');
Route::get ('/extensao', 'PublicController@extension')->name('extension');
Route::get ('/blog', 'PublicController@blog')->name('blog');
Route::get ('/blog/art/{id}', 'PublicController@post')->name('post');

