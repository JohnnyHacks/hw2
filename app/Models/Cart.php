<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carrello';
    protected $primaryKey ='codice_riga';
    public $timestamps = false; 
    
    public function utente(){
        return $this->belongsTo("App\Models\User", "codice_cliente");
    }

    public function prodotto(){
        return $this->belongsTo("App\Models\Product", "codice_prodotto");
    }

    protected $fillable=[
        'codice_cliente',
        'codice_prodotto'
    ];
}

?>