<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Formulário</title>

<style>

body{
    font-family: Arial;
    background:#f0f0f0;
}

.container{
    width:400px;
    margin:40px auto;
    background:white;
    padding:20px;
    border-radius:8px;
}

input, textarea{
    width:100%;
    margin-bottom:10px;
    padding:8px;
}

button{
    padding:10px;
    width:100%;
}

</style>

</head>
<body>

<div class="container">

<h2>Contato</h2>

<form action="destino.php" method="POST">

Nome:
<input type="text" name="nome">

Telefone:
<input type="number" name="telefone">

Email:
<input type="text" name="email">

Mensagem:
<textarea name="mensagem"></textarea>

<button type="submit">Enviar</button>

</form>

<hr>

<p>Teste envio por GET:</p>

<a href="destino.php?nome=Maria&telefone=479999999&email=maria@email.com&mensagem=Teste via GET">
Enviar dados via GET
</a>