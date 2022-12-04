<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    
    public function iniciarsesion()
    {
        return view('cuenta.iniciarsesion');
    }


    public function registro()
    {
        return view('cuenta.registro');
    }

    public function registroDonador()
    {
        return view('cuenta.registroDonador');
    }
    
}
