<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use GuzzleHttp\Client;


class ProducIngrController extends Controller
{
    private $baseURL;

    public function __construct()
    {
        $this->baseURL = 'http://localhost:8080/api/restaurante/ingredientesXProducto';
    }

    public function obtenerIngredientesPlatillo(Request $request)
    {
        $idProducto = $request->input('idProducto');

        $client = new Client();
        $response = $client->get($this->baseURL . '/obtener', ['query' => ['idProducto' => $idProducto],
        ]);

        // Decodificar el JSON de la respuesta
        $platillo = json_decode($response->getBody(), true);

        // Devolver la vista con los datos del platillo
        return view('verPlatillos', ['platillos' => $platillo]);
    }

    public function verPlatillos()
    {
    // Obtener todos los platillos
    $client = new Client();
    $response = $client->get('http://localhost:8080/api/restaurante/platillo/todos');
    $platillos = json_decode($response->getBody(), true);

    // Inicializar el array para almacenar todos los platillos con sus ingredientes
    $todosLosPlatillos = [];

     // Iterar sobre cada platillo
     foreach ($platillos as $platillo) {
         $idProducto = $platillo['productoID'];
 
         // Obtener los ingredientes para cada platillo
         $ingredientesResponse = $client->get($this->baseURL . '/obtener', ['query' => ['idProducto' => $idProducto]]);
         $ingredientes = json_decode($ingredientesResponse->getBody(), true);
 
         $ingredientesLimpios = array_map(function ($ingrediente) {
             return [
                 'ingredienteID' => $ingrediente['ingrediente']['ingredienteID'],
                 'nombreIngrediente' => $ingrediente['ingrediente']['nombreIngrediente'],
                 'descripcionUnidad' => $ingrediente['ingrediente']['descripcionUnidad'],
                 'cantidadUtilizada' => $ingrediente['cantidadUtilizada'],
             ];
         }, $ingredientes);
 
         // Agregar el platillo con sus ingredientes al array general
         $todosLosPlatillos[] = [
             'platillo' => $platillo,
             'ingredientes' => $ingredientesLimpios,
         ];
     }

      // Enviar la información a la vista
      return view('verPlatillos', ['platillos' => $todosLosPlatillos]);
      //return Response::json($todosLosPlatillos);
    }


    
    public function verPlatillosEliminar()
    {
    // Obtener todos los platillos
    $client = new Client();
    $response = $client->get('http://localhost:8080/api/restaurante/platillo/todos');
    $platillos = json_decode($response->getBody(), true);

    // Inicializar el array para almacenar todos los platillos con sus ingredientes
    $todosLosPlatillos = [];

     // Iterar sobre cada platillo
     foreach ($platillos as $platillo) {
         $idProducto = $platillo['productoID'];
 
         // Obtener los ingredientes para cada platillo
         $ingredientesResponse = $client->get($this->baseURL . '/obtener', ['query' => ['idProducto' => $idProducto]]);
         $ingredientes = json_decode($ingredientesResponse->getBody(), true);
 
         $ingredientesLimpios = array_map(function ($ingrediente) {
             return [
                 'ingredienteID' => $ingrediente['ingrediente']['ingredienteID'],
                 'nombreIngrediente' => $ingrediente['ingrediente']['nombreIngrediente'],
                 'descripcionUnidad' => $ingrediente['ingrediente']['descripcionUnidad'],
                 'cantidadUtilizada' => $ingrediente['cantidadUtilizada'],
             ];
         }, $ingredientes);
 
         // Agregar el platillo con sus ingredientes al array general
         $todosLosPlatillos[] = [
             'platillo' => $platillo,
             'ingredientes' => $ingredientesLimpios,
         ];
     }

      // Enviar la información a la vista
      return view('eliminarPlatillos', ['platillos' => $todosLosPlatillos]);
      //return Response::json($todosLosPlatillos);
    }

    public function verPlatillosMenu()
    {
    // Obtener todos los platillos
    $client = new Client();
    $response = $client->get('http://localhost:8080/api/restaurante/platillo/todos');
    $platillos = json_decode($response->getBody(), true);

    // Inicializar el array para almacenar todos los platillos con sus ingredientes
    $todosLosPlatillos = [];

     // Iterar sobre cada platillo
     foreach ($platillos as $platillo) {
         $idProducto = $platillo['productoID'];
 
         // Obtener los ingredientes para cada platillo
         $ingredientesResponse = $client->get($this->baseURL . '/obtener', ['query' => ['idProducto' => $idProducto]]);
         $ingredientes = json_decode($ingredientesResponse->getBody(), true);
 
         $ingredientesLimpios = array_map(function ($ingrediente) {
             return [
                 'ingredienteID' => $ingrediente['ingrediente']['ingredienteID'],
                 'nombreIngrediente' => $ingrediente['ingrediente']['nombreIngrediente'],
                 'descripcionUnidad' => $ingrediente['ingrediente']['descripcionUnidad'],
                 'cantidadUtilizada' => $ingrediente['cantidadUtilizada'],
             ];
         }, $ingredientes);
 
         // Agregar el platillo con sus ingredientes al array general
         $todosLosPlatillos[] = [
             'platillo' => $platillo,
             'ingredientes' => $ingredientesLimpios,
         ];
     }

      // Enviar la información a la vista
      return view('verPlatillosMenu', ['platillos' => $todosLosPlatillos]);
      //return Response::json($todosLosPlatillos);
    }
}
