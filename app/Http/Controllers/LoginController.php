<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function auth(Request $request){

        if($request['tipo'] == 1){
            $credenciais = $request->validate([
                'email'=> ['required','email'],
                'password' => ['required'],
            ]);
            if(Auth::guard('administrador')->attempt($credenciais)){
                $request->session()->regenerate();
                return redirect()->route('home.administrador');
            }
            return redirect()->back()->with('erro','Usuário ou Senha Incorretos');
            
        }
        
        

    }
}
