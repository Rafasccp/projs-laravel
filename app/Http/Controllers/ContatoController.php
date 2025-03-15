<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        $contatos = [
        ["nome"=>"Rafael", "cel"=>"14 98122-9966"],
        ["nome"=>"Julia", "cel"=>"14 98143-7521"]
        ];
        return view("contatos.index", compact('contatos'));
    }
}
