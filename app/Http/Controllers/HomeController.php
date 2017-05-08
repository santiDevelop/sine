<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Hash;
use PDF;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

      public function mapa()
    {
        return view('mapa');
    }




    public function resetpw()
    {
        return view('resetpw');
    }
    public function cambiopw(Request $request)
    {
        //dd($request);
        $rules=[
                'current_password' => 'required',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required|min:6',
                ];

         $messages=[
                'current_password.required'=>'Debe Ingresar su password Actual',
                'password.required'=>'Debe Ingresar el nuevo password.',
                'password.min'=>'La nueva clave debe tener al menos 6 caracteres',
                'password.confirmed'=>'La clave ingresada no coincide con la nueva clave',
                'password_confirmation.required'=>'Debe Ingresar la confirmacion de la clave.','password_confirmation.min'=>'La nueva clave debe tener 6 caracteres minimo.'
                  ];

        $this->validate($request,$rules,$messages);
        $users=User::find(auth()->user()->id);
        $userpassword=$users->password;
        $confirmpassword=$request->input('current_password');
        if (!Hash::check($confirmpassword, $userpassword))
        return back()->with('error_clave','La clave Introducia no coincide con su clave actual');   
        $password=$request->input('password');
        $users->password=bcrypt($password); 
        $users->save();

        return back()->with('notification','Clave Cambiada Exitosamente');
    }

}


