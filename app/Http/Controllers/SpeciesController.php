<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SpeciesController extends Controller
{
    // public function getSpecies()
    // {
    //     $client = new Client();
    //     $url = "https://perenual.com/api/species-list?key=sk-qXxN670d320d2b6d27239";
    

    //     try{
    //         $response = $client->request('GET', $url);
    //         $statusCode = $response->getStatusCode(); // Debe ser 200
    //         $body = $response->getBody()->getContents();

    //         // Decodificar el cuerpo en formato JSON
    //         $speciesList = json_decode($body, true);

    //         // Retornar la respuesta como JSON
    //         return response()->json($speciesList);

    //     } catch (\Exception $e) {
    //         // Capturar cualquier error y devolver una respuesta
    //         return response()->json([
    //             'error' => 'Error al conectar con la API externa',
    //             'message' => $e->getMessage()
    //         ], 500);
    //     }
    // }

    // public function showSpeciesView()
    // {
    //     $client = new Client();
    //     $url = "https://perenual.com/api/species-list?key=sk-qXxN670d320d2b6d27239";
    
    //     try {
    //         $response = $client->request('GET', $url);
    //         $body = $response->getBody()->getContents();
    //         $speciesList = json_decode($body, true); // Decodificar el JSON

    //         // Pasar la lista de especies a la vista
    //         return view('species', ['speciesList' => $speciesList]);

    //     } catch (\Exception $e) {
    //         // Si hay error, mostrar un mensaje en la vista
    //         return view('species', ['error' => 'Error al obtener datos']);
    //     }
    // }


    

}
