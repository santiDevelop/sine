<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function Adminuser()
    {
        return view('adminuser');
    }

    public function Mcbombero()
    {
        return view('mcbombero');
    }

    public function Mcargos()
    {
        return view('mcargos');
    }

    public function Mpcargos()
    {
        return view('mpcargos');
    }

    public function Mtequipos()
    {
        return view('mtequipos');
    }

    public function Mcemergencia()
    {
        return view('mcemergencia');
    }


}


