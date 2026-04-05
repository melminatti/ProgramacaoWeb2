@extends('layout.app')

@section('content')
    <h2>Cálculo do IMC</h2>
    <form action="/resultado" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" placeholder="Seu nome" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Peso (kg):</label>
            <input type="number" name="peso" step="0.1" class="form-control" placeholder="00.0" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Altura (m):</label>
            <input type="number" name="altura" step="0.01" class="form-control" placeholder="0.00" required>
        </div>
        <button type="submit" class="btn btn-custom">Calcular Agora</button>
    </form>
@endsection