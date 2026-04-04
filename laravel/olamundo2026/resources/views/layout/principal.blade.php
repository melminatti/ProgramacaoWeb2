<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div id="conteudo">
        <header>
        <nav>
            <a href="{{ url('/') }}">Home</a>&nbsp;|&nbsp;
            <a href="{{ url('sobre') }}">Sobre</a>&nbsp;|&nbsp;
            <a href="{{ url('contato') }}">Contato</a>
        </nav>
    </header>
        @yield('content')
    </div>
</body>
</html>
