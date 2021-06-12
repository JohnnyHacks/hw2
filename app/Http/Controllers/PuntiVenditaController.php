<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Supermercato;
use App\Models\Reparto;

class PuntiVenditaController extends Controller{

    public function index(){
       return view('puntivendita');
    }


    public function informazioniSupermercato(){

        $count = Supermercato::all()->count();
        $nome = Supermercato::pluck('nome')->first();

        $array=array("numeroSupermercati"=>$count, "nomeCatena"=>$nome);

        $supermercati = Supermercato::all()->toArray();
        for($i=0; $i<$count;$i++){
            $array[$i] = array("codice"=>$supermercati[$i]["codice_supermercato"], "indirizzo"=>$supermercati[$i]["indirizzo"], "città"=>$supermercati[$i]["città"], "telefono"=>$supermercati[$i]["telefono"],"numeroReparti"=>$supermercati[$i]["numero_reparti"]);
        }

            return($array);
    }

    public function informazioniReparto(){
        
        $reparti = Reparto::select('supermercato', 'tipologia')->get();
        foreach($reparti as $reparto){
            $array2[]=array("codiceSupermercato"=>$reparto['supermercato'],"tipologiaReparto"=>$reparto['tipologia']);
        }
        return($array2);
    }
}

?>