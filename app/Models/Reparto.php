<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Reparto extends Model
{
    protected $table = 'reparto';
    protected $primaryKey ='codice_reparto';
    public $timestamps = false; 
    
    public function supermercato(){
        return $this->hasOne("App\Models\Supermercato", "codice_supermercato");
    }
}

?>