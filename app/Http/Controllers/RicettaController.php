<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class RicettaController extends Controller{

    public function index(){
       return view('ricetta');
    }

    public function cercaRicetta(){

        $json = Http::get('https://www.themealdb.com/api/json/v1/1/random.php');
        return $json;
    }

    public function cercaValoriNutrizionali($query){
        
        $json = Http::get('https://api.edamam.com/api/nutrition-data?',[
            'app_id' => env("API_ID"),
            'app_key' =>env("API_KEY"),
            'ingr' => '1'.$query //1 è la quantita'
        ]);
        return $json;
    }
}

?>