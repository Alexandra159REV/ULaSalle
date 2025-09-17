<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{public function login()
    {
        return view('login');
    }
    
    public function administrador()
    {
        return view('administrador');
    }
    
    public function asistente()
    {
        return view('asistente');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function dashboard()
    {
        return view('dashboard');
    }  

    public function llenadoestudiantes()
    {
        return view('llenadoestudiantes');
    }

    public function pantalla()
    {
        return view('pantalla');
    }


}


