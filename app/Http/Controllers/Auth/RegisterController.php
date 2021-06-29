<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | Este controller trabalha com os registros de novos usuários, desde
    | sua validação até a criação.
    |
    */

    use RegistersUsers;

    /**
     * Redirecionamento após o cadastro
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Valida os dados recebidos para registro
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'      => ['required', 'string', 'max:255'],
            'ra'        => ['required', 'digits:12'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
            'campus'    => ['required', 'string', 'in:bra,cam']
        ]);
    }

    /**
     * Insere um novo registro
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User;

        $user->name         = $data['name'];
        $user->ra           = $data['ra'];
        $user->email        = $data['email'];
        $user->password     = Hash::make($data['password']);
        $user->campus       = $data['campus'];

        $user->save();

        return $user;
    }
}
