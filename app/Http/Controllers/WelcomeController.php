<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE Illuminate\Support\Facades\Http;

class welcomeController extends Controller
{
    //
    public function index(Http $response = null)
    {
        $response = Http::get('https://api-redemet.decea.mil.br/aerodromos/status/localidades/SBRJ,SBJR?api_key=RKwpY0HUPQRWzAnQbta4gf6hhXiuZy02J4vjxdBi');
        $meteoroDate = $response->header('date');
        return view('welcome', compact('response', 'meteoroDate'));
        
        //dd($response->json());
        //dd($response);
        

    }
    
}
