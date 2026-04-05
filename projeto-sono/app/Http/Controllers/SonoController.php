<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sono;

class SonoController extends Controller
{
    public function index()
    {
        return view('sono.form'); // Exibe o formulário [cite: 421, 591]
    }

    public function calcular(Request $request)
    {
        $sonoModel = new Sono();
        $idade = $request->input('idade');
        $horas = $request->input('horas');

        $status = $sonoModel->verificarQualidade($idade, $horas);
        $mensagem = $status ? "Sua meta de sono está adequada!" : "Sua meta de sono não está adequada para sua idade.";

        return view('sono.resultado', [
            'idade' => $idade,
            'horas' => $horas,
            'mensagem' => $mensagem,
            'status' => $status
        ]);
    }
}