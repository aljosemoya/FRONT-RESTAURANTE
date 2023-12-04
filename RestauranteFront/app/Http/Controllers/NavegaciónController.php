<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegaciónController extends Controller
{
    public function obtenerEditorAdministracion()
    {
        return view('administrarRestaurante');
    }
    public function obtenerEditorNuevoPlatillo()
    {
        return view('crearPlatillo');
    }
    public function GenerarNuevaFactura(){
        return view('Factura');
    }
}
