<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

use App\Models\User;
use Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class SignupController extends Controller{

    public function create(){
        $request = request();
        
        if ($request->username != null && $request->password != null && $request->email != null && $request->name != null && $request->surname != null)
        {
            $flag = 0;

            if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $request->username)) 
            {
                $flag++;
            } 
            else 
            {
                $query = User::where('username', $request->username)->get();

                if ($query != '[]') {
                    $flag++;
                }
            }
    
            if (strlen($request->password) < 8) {
                $flag++;
            } 
        
            if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
                $flag++;
            } else {
                
                $query = User::where('email', $request->email)->get();
                if ($query != '[]') {
                    $flag++;
                }
            }

            if ($flag == 0) {
                User::create([
                    'nome' => $request->name,
                    'cognome' => $request->surname,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);

                $user = User::where('username', $request->username)->first();
                Cookie::queue('idcliente', $user->codice_cliente, 60);
                return redirect ('areaclienti');
            }
            else{
                $errore = "Ricontrolla i campi";
            }

            return redirect ('signup')->withInput()->with('errore', $errore);
        }
        elseif($request->username != null || $request->password != null || $request->email != null || $request->name != null || $request->surname != null){
            $errore = "Inserisci tutte le informazioni";
            return redirect ('signup')->withInput()->with('errore', $errore);
        }
        else{ //Caso in cui non ci sia nemmeno un campo pieno
            $errore = "Inserisci tutte le informazioni";
            return redirect ('signup')->withInput()->with('errore', $errore);
        }
    }

    public function checkUsername($query){
        $exists = User::where('username', $query)->get();
        if($exists != '[]'){
            return ['esiste'=>true];
        }
        else{
            return ['esiste'=>false];
        }
    }

    public function checkEmail($query){
        $exists = User::where('email', $query)->get();
        if($exists != '[]'){
            return ['esiste'=>true];
        }
        else{
            return ['esiste'=>false];
        }
    }

    public function index(){
        $old_name = Request::old('name');
        $old_surname = Request::old('surname');
        $old_username = Request::old('username');
        $old_email = Request::old('email');
        $old_password = Request::old('password');
        return view('signup')->with("old_name", $old_name)->with("old_surname", $old_surname)->with("old_username", $old_username)->with("old_email", $old_email)->with("old_password", $old_password);
    }
}

?>