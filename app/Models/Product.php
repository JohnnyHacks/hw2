<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'prodotto';
    protected $primaryKey ='codice_prodotto';
    public $timestamps = false; 
    
    public function carrello(){
        return $this->hasMany("App\Models\Cart", "codice_prodotto");
    }
}

?>