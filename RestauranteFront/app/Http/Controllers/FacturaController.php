<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    private $baseURL;

    public function __construct()
    {
        $this->baseURL = 'http://localhost:8080/api/restaurante/factura';
    }
    public function generarFactura(Request $request){
        $client = new Client();
        $response = $client->post($this->baseURL.'/guardar', [
            'json' => $request->all(),
        ]);
        return view('index');
    }
    
}
