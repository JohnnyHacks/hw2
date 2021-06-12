<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

use Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class LoginController extends BaseController
{
    public function login(){
        if(Cookie::get('idcliente')!=null){
            return redirect('areaclienti');
        }
        else{
            $old_username = Request::old('username');
            $old_password = Request::old('password');
            return view('login')->with("old_username", $old_username)->with("old_password", $old_password);
        }
    }

    public function checkLogin(){
        $user = User::where('username', request('username'))->first();
        if(!isset($user)){
            $errore = "Username non valido";
            return redirect('login')->withInput()->with("errore", $errore);
        }
        else
        {
            $flag = Hash::check(request('password'), $user->password);
            if($flag){
                Cookie::queue('idcliente', $user->codice_cliente, 60);
                return redirect('areaclienti');
            }
            else{
                $errore = "Credenziali non valide";
                return redirect('login')->withInput()->with("errore", $errore);
            }
        }   
    }

    public function logout(){
        Cookie::queue(Cookie::forget('idcliente'));
        return redirect('login');
    }



}
