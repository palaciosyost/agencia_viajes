<?php

namespace App\Http\Controllers;

use App\Models\Departamento;

use App\Models\Lugare;
use Illuminate\Http\Request;

class HomeControlador extends Controller
{
    public function index()
    {
        $departamento =Departamento::orderBy('id', 'desc')->get();
        
        return view('home', compact('departamento'));
    }
    public function viajes($departamento)
    {
        $departamentos = Lugare::where('departamento', $departamento)->get();
        return view('viajes', compact('departamentos'), compact('departamento'));
    }
    public function vista($id)
    {
        $lugar = Lugare::find($id);
        return view('vistaViaje', compact('lugar'));
    }
}
