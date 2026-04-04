<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index() 
    {
        // Definindo as variáveis que a View 'contato' vai usar
        $data['titulo'] = "Minha página de contato dinâmica";
        $data['email'] = 'melissa.minatti@unidavi.edu.br';
        
        return view('contato', $data);
    }
}