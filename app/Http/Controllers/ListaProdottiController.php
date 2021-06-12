<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Cookie;
use App\Models\Cart;

class ListaProdottiController extends Controller{

    public function index(){
       return view('listaprodotti');
    }

    public function caricamentoProdotti(){     

        $listaProdotti = Product::select('nome','quantita', 'prezzo','immagine')->get()->unique('nome'); //Mi ritorna la lista degli unique ma con indici non continui
        $array = array_values($listaProdotti->toArray()); //Per far diventare gli indici continui
        
        return($array);
    }

    public function checkCookie($query){

    if(Cookie::get('idcliente')!=null){
        $idcliente = Cookie::get('idcliente');
    }
    else{
        $idcliente=0;
    }

    $arr = array("nomeProdotto"=>$query, "idcliente"=>$idcliente);
    return $arr;
    }

    public function aggiungiAlCarrello($query){
   
        $temp1 = Product::select('codice_prodotto')->where('nome', $query)->first();
        $temp2 = $temp1->toArray();
        $codice_prodotto = array_shift($temp2); //Per estrarre il singolo valore dall'array
        
        $idcliente = Cookie::get('idcliente');

        print_r($codice_prodotto);
        
        Cart::create([
            'codice_cliente' => $idcliente,
            'codice_prodotto' => $codice_prodotto
        ]);

        return true;
    }
}

?>