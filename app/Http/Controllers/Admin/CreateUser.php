<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\maestro_cuerpo_bomberos;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255|string',
            'user' => 'required|max:10|unique:users',
            'cedula' => 'required|min:10|unique:users|numeric',
            'cargo' => 'required|numeric',
            'typeuser' => 'required|numeric',
            'cbombero' => 'required|numeric',
            'status' => 'required|numeric|max:2',   
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'user' => $data['user'],
            'cedula' => $data['cedula'],
            'cargo' => $data['cargo'],
            'typeuser' => $data['typeuser'],
            'status' => $data['status'],
            'cbombero' => $data['cbombero'],
            'password' => bcrypt($data['password']),
        ]);
    }


    public function register()
    {
       $cbomberos=maestro_cuerpo_bomberos::all();
       return view('auth/register')->with(compact('cbomberos'));
    }
}
