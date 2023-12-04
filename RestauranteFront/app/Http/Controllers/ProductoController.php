<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use GuzzleHttp\Client;

class ProductoController extends Controller
{
    private $baseURL;

    public function __construct()
    {
        $this->baseURL = 'http://localhost:8080/api/restaurante/platillo';
    }

    public function crearPlatillo(Request $request)
    {
          // Imprimir el JSON que recibes en consola
          //dd($request->all());
        $client = new Client();
        $response = $client->post($this->baseURL.'/crear', [
            'json' => $request->all(),
        ]);
    
        // Puedes redirigir a una vista específica o devolver una respuesta JSON según tus necesidades
        return redirect()->back()->with('success', 'Platillo creado exitosamente');     
    }

    public function buscarPlatillo($id)
    {
        $client = new Client();
        $response = $client->get($this->baseURL.'/buscar/'.$id);

        //return response()->json(json_decode($response->getBody()), $response->getStatusCode());
        // Obtén los datos del platillo como un array asociativo
        $platillo = json_decode($response->getBody(), true);
        return view('verPlatillos', ['platillo' => $platillo]);
        return view('verPlatillos', ['platillo' => $platillo]);
    }

    public function eliminarPlatillo($id)
    {
        $client = new Client();
        $response = $client->delete($this->baseURL . '/eliminar/' . $id);
        return redirect()->back();
    }

    public function obtenerTodos()
    {
        $client = new Client();
        $response = $client->get('http://localhost:8080/api/restaurante/platillo/todos');

        $platillos = json_decode($response->getBody(), true);
        return response()->json($platillos, $response->getStatusCode());

        //return view('verPlatillos', ['platillos' => $platillos]);
    }
}
