@extends('layout.app')

@section('content')
    <h2>Resultado</h2>
    
    <div class="text-center">
        <p class="lead">Olá, <strong>{{ $nome }}</strong>!</p>
        <hr style="border-color: rgba(255,255,255,0.3)">
        
        <div class="my-4">
            <span class="d-block" style="font-size: 0.9rem; opacity: 0.8;">Seu IMC é</span>
            <h1 class="display-4 font-weight-bold" style="margin: 0;">{{ $imc }}</h1>
        </div>

        <div class="p-3 rounded-3 mb-4" style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.2);">
            <h4 class="mb-1">{{ $classificacao }}</h4>
            <p class="small mb-0" style="opacity: 0.9;">
                Peso: {{ $peso }}kg | Altura: {{ $altura }}m
            </p>
        </div>

        <a href="/" class="btn-custom" style="display: block; text-decoration: none;">
            Voltar e Refazer
        </a>
    </div>
@endsection