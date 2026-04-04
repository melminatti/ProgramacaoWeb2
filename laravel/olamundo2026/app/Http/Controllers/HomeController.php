<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servidor;

class HomeController extends Controller
{
    public function index() {
        $data['titulo'] = "Home Olá Mundo 2026";
        $servidor = new Servidor;
        $data['script'] = $servidor->getAtributo('SCRIPT_FILENAME');
        $data['dataHora'] = $servidor->getData();
        return view("home", $data);
    }
}