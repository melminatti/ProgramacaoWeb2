<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class ImcController extends Controller
{
    public function index()
    {
        return view('imc.form');
    }

    public function calcular(Request $request)
    {
        $pessoa = new Pessoa();

        $nome = $request->input('nome');
        $peso = $request->input('peso');
        $altura = $request->input('altura');

        $valorImc = $pessoa->calcularIMC($peso, $altura);

        $classificacao = "";
        if ($valorImc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($valorImc <= 24.9) {
            $classificacao = "Peso normal";
        } elseif ($valorImc <= 29.9) {
            $classificacao = "Acima do peso (sobrepeso)";
        } elseif ($valorImc <= 34.9) {
            $classificacao = "Obesidade I";
        } elseif ($valorImc <= 39.9) {
            $classificacao = "Obesidade II";
        } else {
            $classificacao = "Obesidade III";
        }

        $dados = [
            'nome' => $nome,
            'imc' => number_format($valorImc, 2),
            'classificacao' => $classificacao,
            'peso' => $peso,
            'altura' => $altura
        ];

        return view('imc.resultado', $dados);
    }
}