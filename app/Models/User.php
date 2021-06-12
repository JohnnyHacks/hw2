<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'cliente';
    protected $primaryKey ='codice_cliente';
    
    protected $hidden = ['password'];
    public $timestamps = false; 

    public function carrello(){
        return $this->hasMany("App\Models\Cart", "codice_cliente");
    }

    protected $fillable = [
        'nome',
        'cognome',
        'email',
        'password',
        'username'
    ];
}

?>