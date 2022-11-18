<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imccontroller extends Controller
{
    public function form(){
        return view('formulario');
    }
    public function calcular(Request $request){ 
        
        $peso = $request->peso;
        $altura = $request->altura;
        $imc = $peso/ ($altura * $altura);
        return view('resultado', compact('imc'));
    }
}
