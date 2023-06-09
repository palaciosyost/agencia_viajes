<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Lugare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class MenuControlador extends Controller
{
    //pagina principal del menu
    public function index()
    {
        $departamento =Lugare::orderBy('id', 'desc')->paginate(3);
        return view('menu.home', compact('departamento'));
    }
    //funcion de la vista de los items de departamento
    public function departamentos()
    {
        $departamento =Departamento::orderBy('id', 'desc')->paginate(3);
        return view('menu.departamentos', compact('departamento'));
    }
    //vista de crear departamento nuevo
    public function create()
    {
        return view('menu.createDepartamento');
    }   
    //vista de info de cada viaje
    public function vista ($id){
        $lugar = Lugare::find($id);
        return view('menu.vistaViajes', compact('lugar'));
    }
    //confirmacion de la creacion del new departamento
    public function confirCreate(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image',
            'nombre' => 'required',
            'descripcion' => 'required|max:255',
            'estado' => 'required',
        ]);
        $img = $request->file('imagen')->store('public');
        $ruta = Storage::url($img);

        Departamento::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'img' => $ruta,
            'estado' => $request->estado
        ]
        );
    
        return redirect()->route('menu.departamentos');
    }

    //view de crear nuevo viaje
    public function crearViaje()
    {
        return view('menu.createViajes');
    }
    //confirmacion de crear nuevo viaje
    public function confirmViaje(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image',
            'nombre' => 'required',
            'descripcion' => 'required',
            'no_cuenta' => 'required',
            'horario' => 'required',
            'encuentro' => 'required',
            'duracion' => 'required',
            'eslogan' => 'required',
            'llevar' => 'required| max:255',
            'departamento' => 'required'
        ]);
        $img = $request->file('imagen')->store('public');
        $ruta = Storage::url($img);

        Lugare::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $ruta,
            'estado' => $request->estado,
            'monto' => $request->monto,
            'eslogan' => $request->eslogan,
            'horario' => $request->horario,
            'duracion' => $request->duracion,
            'punto_encuentro' => $request->encuentro,
            'llevar' => $request->llevar,
            'no_cuenta' => $request->no_cuenta,
            'departamento' => $request->departamento
            
        ]
        );
        return redirect()->route('menu');
    }

    public function editarViaje($id)
    {
        $edit = Lugare::find($id);
        return view('menu.updateViajes', compact('edit'));
    }
    public function updateViaje(Request $request, $id){
        $editar = Lugare::find($id);
        $request->validate([
            'imagen' => 'required|image',
            'nombre' => 'required',
            'descripcion' => 'required',
            'no_cuenta' => 'required',
            'horario' => 'required',
            'encuentro' => 'required',
            'duracion' => 'required',
            'eslogan' => 'required',
        ]);
        $img = $request->file('imagen')->store('public');
        $ruta = Storage::url($img);

        $editar->nombre = $request->nombre;
        $editar->descripcion = $request->descripcion;
        $editar->imagen = $ruta;
        $editar->estado = $request->estado;
        $editar->monto = $request->monto;
        $editar->eslogan = $request->eslogan;
        $editar->horario = $request->horario;
        $editar->duracion = $request->duracion;
        $editar->punto_encuentro = $request->encuentro;
        $editar->llevar = $request->llevar;
        $editar->no_cuenta = $request->no_cuenta;
        $editar->departamento = $request->departamento;
        $editar->save();
        return redirect()->route('viajes.info', $request->id);
    }

    //ELIMINAR UN REGISTRO DE LA TABLA VIAJES
    public function deleteViaje($id)
    {
        $delete = Lugare::find($id);
        $url = str_replace('storage', 'public', $delete->imagen);
        Storage::delete($url);
        $delete->delete();
        return redirect()->route('menu');
    }

    //vista de actualizacion del depatamento
    public function editarDapartamento($id)
    {
        $editar = Departamento::find($id);
        return view('menu.updateDepartamento', compact('editar'));
    }

    //vista de actualizacion del depatamento
    public function updateDepartamento($id, Request $request)
    {
        $editar = Lugare::find($id);
        $request->validate([
            'imagen' => 'required|image',
            'nombre' => 'required',
            'descripcion' => 'required',
            'estado' => 'required',
        ]);
        $img = $request->file('imagen')->store('public');
        $ruta = Storage::url($img);
        $editar->nombre = $request->nombre;
        $editar->descripcion = $request->descripcion;
        $editar->img = $ruta;
        $editar->estado = $request->estado;
        $editar->save();
        
    
        return redirect()->route('menu.departamentos');
    }
    public function deleteDepartamento($id)
    {
        $delete = Departamento::find($id);
        $url = str_replace('storage', 'public', $delete->img);
        Storage::delete($url);
        $delete->delete();
        return redirect()->route('menu.departamentos');
    }
}
