<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControlador extends Controller
{
    use HasFactory;
    public function index()
    {
        return view('login');
    }
    public function create(Request $request)
    {
        $request->validate([
            'usuario' => 'required',
            'contraseña' => 'required'
        ]);

        $credentials = [
            'email' => $request->usuario,
            'password' => $request->contraseña,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('menu');
        }
        return redirect()->route('index');
    }
}
