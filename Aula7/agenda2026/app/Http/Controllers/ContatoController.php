<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::all();

        return view('contatos.index', compact('contatos'));
    }

    public function create()
    {
        return view('contatos.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20'
        ]);

        $contato = new Contato();
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->cidade = $request->input('cidade');
        $contato->estado = $request->input('estado');
        if ($contato->save()) {
            return redirect()->route('contatos.index')->with('success', 'Contato criado com sucesso.');
        } else {
            return redirect()->route('contatos.create')->with('error', 'Erro ao criar contato. Tente novamente.');
        }
    }

    public function show(string $id)
    {
        $contato = Contato::findOrFail($id);

        return view('contatos.show', compact('contato'));
    }

    public function edit(string $id)
    {
        $contato = Contato::findOrFail($id);

        return view('contatos.edit', compact('contato'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20'
        ]);

        $contato = Contato::findOrFail($id);
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->cidade = $request->input('cidade');
        $contato->estado = $request->input('estado');
        if ($contato->save()) {
            return redirect()->route('contatos.index')->with('success', 'Contato atualizado com sucesso.');
        } else {
            return redirect()->route('contatos.edit', $contato->id)->with('error', 'Erro ao atualizar contato. Tente novamente.');
        }
    }

    public function destroy(string $id)
    {
        $contato = Contato::findOrFail($id);
        if ($contato->delete()) {
            return redirect()->route('contatos.index')->with('success', 'Contato excluído com sucesso.');
        } else {
            return redirect()->route('contatos.index')->with('error', 'Erro ao excluir contato. Tente novamente.');
        }
    }
}
