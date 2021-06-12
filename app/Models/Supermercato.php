<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Supermercato extends Model
{
    protected $table = 'supermercato';
    protected $primaryKey ='codice_supermercato';
    public $timestamps = false; 
    
    public function reparto(){
        return $this->hasMany("App\Models\Reparto", "supermercato");
    }
}

?>