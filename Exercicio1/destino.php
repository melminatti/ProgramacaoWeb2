<?php

$nome = $_REQUEST['nome'] ?? '';
$telefone = $_REQUEST['telefone'] ?? '';
$email = $_REQUEST['email'] ?? '';
$mensagem = $_REQUEST['mensagem'] ?? '';

$metodo = $_SERVER['REQUEST_METHOD'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Dados Recebidos</title>

<style>

body{
    font-family: Arial;
    background:#f5f5f5;
    padding:40px;
}

.box{
    background:white;
    padding:20px;
    margin-bottom:20px;
}

</style>

</head>
<body>

<div class="box">

<h2>Dados Recebidos</h2>

<p><b>Nome:</b> <?php echo $nome; ?></p>
<p><b>Telefone:</b> <?php echo $telefone; ?></p>
<p><b>Email:</b> <?php echo $email; ?></p>
<p><b>Mensagem:</b> <?php echo $mensagem; ?></p>

</div>


<div class="box">

<h2>Método Utilizado</h2>

<?php
echo $metodo;
?>

</div>


<div class="box">

<h2>Cabeçalho HTTP</h2>

<pre>

<?php

$headers = apache_request_headers();

foreach($headers as $chave => $valor){
    echo "$chave : $valor\n";
}
?>
</pre>
</div>
</body>
</html>