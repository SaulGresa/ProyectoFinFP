<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }
    
    public function altaUser(Request $datos){
        //dd($datos->all());
        $user = new Usuario();
        $user->nombre = $datos->input('nombre');
        $user->user = $datos->input('user');
        $user->pass = $datos->input('pass');
        $user->email = $datos->input('email');
        $user->rol = $datos->input('rol');
        $user->save();
        //$usuario = Usuario::create($datos->all());
    }
}
