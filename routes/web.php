<?php

use App\Http\Controllers\homeControlador;
use App\Http\Controllers\HomeControlador as ControllersHomeControlador;
use App\Http\Controllers\loginControlador;
use App\Http\Controllers\LugaresControlador;
use App\Http\Controllers\MenuControlador;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//RUTA DE LA PAGINA PRINCIPAL 'HOME'
Route::get('/', [homeControlador::class, 'index'])->name('home');



//RUTAS DEL LOGIN
Route::get('login', [loginControlador::class, 'index'])->name('login.index');
Route::post('login', [loginControlador::class, 'create'])->name('login.select');



//RUTAS DEL TODO EL SISTEMA DE ADMINITRADOR /* MENU*/
Route::get('menu/viajes', [MenuControlador::class, 'index'])->name('menu');
Route::get('menu/departamentos', [MenuControlador::class, 'departamentos'])->name('menu.departamentos');

//RUTA PARA CREAR UN NUEVO DEPARTAMENTO
Route::get('menu/create', [MenuControlador::class, 'create'])->name('menu.crearD');
Route::post('menu/create', [MenuControlador::class, 'confirCreate'])->name('menu.crear-confirm');

//RUTA PARA CREAR VIAJE NUEVO
Route::get('menu/createviaje', [MenuControlador::class, 'crearViaje'])->name('menu.crearV');
Route::post('menu/createviaje', [MenuControlador::class, 'confirmViaje'])->name('menu.createV-confirm');


//RUTA PARA VER LA INFO DE UNA VIAJE EN ESPECIFICO
Route::get('menu/{id}/info', [MenuControlador::class, 'vista'])->name('viajes.info');
//RUTA PARA LISTAR LOS VIAJES
Route::get('{departamento}/viajes', [homeControlador::class, 'viajes'])->name('viajes');


//RUTA PARA VER INFO DE LOS VIAJES DEL HOME
Route::get('{id}/info', [HomeControlador::class, 'vista'])->name('info-viajes');


//RUTA PARA ACTUALIZAR REGISTROS VIAJES
Route::get('menu/{id}/editar', [MenuControlador::class, 'editarViaje'])->name('viajes.editar');
Route::put('menu/{id}/editar', [MenuControlador::class, 'updateViaje'])->name('viajes.actualizar');

//RUTA PARA ACTUALIZAR REGISTROS DEPARTAMENTO
Route::get('menu/departamento/{id}/editar', [MenuControlador::class, 'editarDapartamento'])->name('departamento.editar');
Route::put('menu/departamento/{id}/editar', [MenuControlador::class, 'updateDepartamento'])->name('departamento.actualizar');

//RUTA PARA ELIMINAR UN REGISTRO DE VIAJES
Route::delete('menu/{id}', [MenuControlador::class, 'deleteViaje'])->name('viajes.eliminar');

//RUTA PARA ELIMINAR UN REGISTRO DE DEPARTAMENTOS
Route::delete('menu/departamento/{id}', [MenuControlador::class, 'deleteDepartamento'])->name('departamento.eliminar');