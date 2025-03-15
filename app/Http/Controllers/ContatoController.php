<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(Request $req){
        $contatos = [
            ["nome"=> $req['nome'], "cel"=>$req['celular']],
            ["nome"=>"Rafael", "cel"=>"14 98143-7521"]
        ];
        return view("contatos.index", compact('contatos'));
    }
}
