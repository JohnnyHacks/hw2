<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cookie;
use App\Models\Product;
use App\Models\Cart;
use DB;

class AreaClientiController extends Controller{

    public function index(){
        if(Cookie::get('idcliente')!=null){
            return view('areaclienti');
        }
        else{
            return redirect('login');
        }
    }

    public function mostraCarrello(){
        
        $idcliente = Cookie::get('idcliente');
        $carrello = Cart::where('codice_cliente', $idcliente)->get();

        
        if(count($carrello)==0){
            return 0;
        }
        
        foreach($carrello as $elemento){
                $arraytemp = $elemento->prodotto->toArray();           
                $array[] = ['numero' => 1, 'codice_prodotto' => $arraytemp['codice_prodotto'], 'nome' => $arraytemp['nome'], 'quantita'=>$arraytemp['quantita'], 'prezzo'=>$arraytemp['prezzo'], 'immagine'=>$arraytemp['immagine']];        
        }

        //Per ottenere il numero di volte in cui ho inserito ogni prodotto e non avere duplicati
        for($i=0;$i<sizeof($array);$i++)
        {
            if(isset($array[$i]))
            {
                    for($j=$i+1; $j<sizeof($array);$j++){
                        if(isset($array[$j]))
                        {
                            if($array[$i]['codice_prodotto'] == $array[$j]['codice_prodotto']){
                                $array[$i]['numero']+=1;
                                $array[$j] = null;
                            }
                        }
                    }
                }
        }

        $array = array_filter($array); //Per eliminare gli elementi null
        $array = array_values($array); //Per rendere gli indici continui
        return($array);
    }

    public function eliminaProdotto($query){

        $temp1= Product::select('codice_prodotto')->where('nome', $query)->first();
        $temp2 = $temp1->toArray();
        $codice_prodotto = array_shift($temp2);
        $idcliente = Cookie::get('idcliente');
        
        $res = Cart::where('codice_riga', function($query2) use ($codice_prodotto, $idcliente){
            $query2->select('codice_riga')->from('carrello')->where('codice_prodotto', $codice_prodotto)->where('codice_cliente', $idcliente)->groupBy('codice_prodotto');
        })->delete();

        return($res);
    }
}

?>