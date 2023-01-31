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
        else if($request['tipo'] == 2){
            $credenciais = $request->validate([
                'email'=> ['required','email'],
                'password' => ['required'],
            ]);
            if(Auth::guard('empresa')->attempt($credenciais)){
                $request->session()->regenerate();
                return redirect()->route('home.empresa');
            }
            return redirect()->back()->with('erro','Usuario ou Senha Incorretos');
        }

        else if($request['tipo'] == 3){
            $credenciais = $request->validate([
                'email'=> ['required','email'],
                'password' => ['required'],
            ]);
            if(Auth::guard('prestador')->attempt($credenciais)){
                $request->session()->regenerate();
                return redirect()->route('home.prestador');
            }
            return redirect()->back()->with('erro','Usuario ou Senha Incorretos');
        }
        else{
            return redirect()->back()->with('erro','Tipo incorreto');
        }
        
        

    }
}
