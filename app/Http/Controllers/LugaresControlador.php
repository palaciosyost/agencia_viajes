<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequests;
use App\Models\Lugare;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;
class LugaresControlador extends Controller
{
    public function index()
    {
        $lugares = Lugare::orderBy('id', 'desc')->paginate(5);
        // echo $lugares;
        return view('lugares', compact('lugares'));
    }

    public function descripcion($id)
    {
        $des = Lugare::find($id);
        // echo $viaje;
        return view('descripcionViajes', compact('des'));
    }
    public function crear()
    {
        return view('createViajes');
    }
    public function DatosCreate(CreateRequests $request)
    {

        

        $viaje = new Lugare;
        $viaje->nombre = $request->nombre;
        $viaje->descripcion = $request->descripcion;
        $viaje->save();
        return redirect()->route('viaje.descripcion', $viaje->id);
    }
    public function editarDatos($id)
    {
        $viaje = Lugare::find($id);
        return view('editarViajes', compact('viaje'));
    }
    public function update(Request $request )
    {
        $viaje = new Lugare;
        $viaje->nombre = $request->nombre;
        $viaje->descripcion = $request->descripcion;
        $viaje->save();
        return redirect()->route('viaje.descripcion', $viaje->id);
    }
}
