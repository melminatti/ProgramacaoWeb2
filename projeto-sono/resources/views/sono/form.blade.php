
@extends('layout.app')

@section('title', 'Início')

@section('content')
    <h2 class="text-center mb-4">Qualidade do Sono</h2>
    <form action="/resultado" method="POST">
        @csrf <div class="mb-3">
            <label class="form-label">Sua Idade:</label>
            <input type="number" name="idade" class="form-control" placeholder="Ex: 25" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Horas que você dorme:</label>
            <input type="number" name="horas" class="form-control" placeholder="Ex: 8" required>
        </div>
        <button type="submit" class="btn-check-up shadow">Analisar Agora</button>
    </form>
@endsection