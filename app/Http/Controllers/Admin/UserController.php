<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{




   public function index()
    {
        return "hola mundo";
    }

    public function adminuser()
    {
        return view('adminuser');
    }
     public function crearusuario()
    {
        return view('crearusuario');
    }
     public function getMcbombero()
    {
        return view('mcbombero');
    }
      public function postMcbombero(Request $request)
    {
        ;
    }

     public function getMcargos()
    {
        return view('mcargos');
    }
     public function postMcargos(Request $request)
    {
       return $request->all();
    }


     public function mtequipos()
    {
        return view('mtequipos');
    }
     public function mcemergencia()
    {
        return view('mcemergencia');
    }
      public function mpcargos()
    {
        return view('mpcargos');
    }

}
