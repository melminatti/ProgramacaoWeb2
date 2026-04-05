@extends('layout.app')

@section('title', 'Resultado')

@section('content')
    <h2 class="text-center mb-4">Análise Final</h2>
    <div class="text-center">
        <p class="lead">Idade: {{ $idade }} anos</p>
        <hr style="border-color: rgba(255,255,255,0.3)">
        
        <div class="p-3 rounded mb-4" style="background: rgba(0,0,0,0.2)">
            <h4 class="{{ $status ? 'text-info' : 'text-warning' }}">
                {{ $mensagem }}
            </h4>
        </div>

        <p>Você dorme {{ $horas }} horas por dia.</p>
        <a href="/" class="btn btn-light btn-sm mt-3">Tentar novamente</a>
    </div>
@endsection