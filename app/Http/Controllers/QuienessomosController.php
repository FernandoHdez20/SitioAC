<?php

namespace App\Http\Controllers;

use App\Models\Somos;
use Illuminate\Http\Request;

class QuienessomosController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function somos()
    {
        return view('modulos.quienessomos');
    }

    public function recursos()
    {
        return view('modulos.recursospadres');
    }
    public function directorio()
    {
        return view('modulos.directorio');
    }

    public function eventos()
    {
        return view('modulos.eventos');
    }

    public function aparatos()
    {
        return view('modulos.aparatosfuncionales');
    }

    public function donador()
    {
        return view('modulos.donador');
    }
}
