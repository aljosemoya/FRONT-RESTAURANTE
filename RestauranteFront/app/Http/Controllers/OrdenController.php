<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    private $baseURL;

    public function __construct()
    {
        $this->baseURL = 'http://localhost:8080/api/restaurante/orden';
    }
    public function generarOrden(Request $request)
    {
         // Obtén la cadena JSON de la solicitud y decódificala
         $productosJson = $request->input('productos');
         $productosArray = json_decode($productosJson, true);
 
         $productosMapeados = [];
        foreach ($productosArray as $producto) {
            $productoId = $producto['producto'];
            $cantidad = $producto['cantidad'];
            $datosProductos = [
                "productoId" => $productoId,
                "cantidad" => $cantidad,
            ];
            $productosMapeados[] = $datosProductos;
        }
        $OrdenData = 
        [
            "dni" => $request->input('dni'),
            "cajeroId" => $request->input('cajeroId'),
            "productos" => $productosMapeados,
            ];
        $client = new Client();
        $response = $client->post($this->baseURL.'/guardar', [
            'json' =>  $OrdenData,
        ]);
         // Check if the order was created successfully
    if ($response->getStatusCode() == 200) {
        $responseData = json_decode($response->getBody(), true);
        $orderID = $responseData['ordenID'];
        // Flash a success message to be displayed on the next request
        session()->flash('success', 'La orden con ID ' . $orderID . ' fue creada con éxito.');
    } else {
        // Flash an error message if something went wrong
        session()->flash('error', 'Hubo un problema al crear la orden. Inténtalo de nuevo.');
    }
    return redirect()->back();    
    }
}
