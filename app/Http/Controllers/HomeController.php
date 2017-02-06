<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
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
    public function resetpw()
    {
        return view('resetpw');
    }
    public function cambiopw(Request $request)
    {
        //dd($request);
        $rules=[
                'current_password' => 'required',
                'password' => 'required|min:6',
                'password_confirmation' => 'confirm_password|min:6',
                ];

         $messages=[
                'current_password.required'=>'Debe Ingresar su password Actual',
                'password.required'=>'Debe Ingresar el nuevo password.',
                'password.min'=>'El nuevo password debe tener al menos 6 caracteres',
                'password.min'=>'El nuevo password debe tener al menos 6 caracteres',
                'password_confirmation.confirm_password'=>'El password ingresado no coincide.',
                  ];

        $this->validate($request,$rules,$messages);
       // $user=User::find($id);
        return back()->with('notification','Clave Cambiada Exitosamente');
    }

}


