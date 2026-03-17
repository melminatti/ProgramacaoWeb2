<?php
// Dica 1: Pegar dados via $_REQUEST (funciona para os dois métodos)
$nome     = $_REQUEST['nome'] ?? 'Não informado';
$telefone = $_REQUEST['telefone'] ?? 'Não informado';
$email    = $_REQUEST['email'] ?? 'Não informado';
$mensagem = $_REQUEST['mensagem'] ?? 'Não informado';

// Dica 2: Pegar o método via $_SERVER
$metodo = $_SERVER['REQUEST_METHOD'];

// Dica 3: Pegar cabeçalhos via apache_request_headers()
// Usamos uma verificação caso não esteja no servidor Apache
$headers = function_exists('apache_request_headers') ? apache_request_headers() : [];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Destino - Processamento de Dados</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; padding: 30px; }
        .card { background: white; padding: 20px; border-radius: 8px; border: 1px solid #ddd; margin-bottom: 20px; }
        h3 { border-bottom: 2px solid #007bff; padding-bottom: 10px; color: #007bff; }
        pre { background: #333; color: #fff; padding: 15px; border-radius: 5px; overflow-x: auto; font-size: 13px; }
        .metodo-tag { background: #007bff; color: white; padding: 2px 8px; border-radius: 4px; }
    </style>
</head>
<body>

    <div class="card">
        <h3>Dados Recebidos</h3>
        <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
        <p><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
        <p><strong>E-mail:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Mensagem:</strong> <?php echo nl2br(htmlspecialchars($mensagem)); ?></p>
    </div>

    <div class="card">
        <h3>Método Utilizado</h3>
        <p>Esta requisição foi enviada via: <span class="metodo-tag"><?php echo $metodo; ?></span></p>
    </div>

    <div class="card">
        <h3>Cabeçalho da Requisição (HTTP Headers)</h3>
        <pre><?php print_r($headers); ?></pre>
    </div>

    <p><a href="formulario.php"> << Voltar e testar outro nome</a></p>

</body>
</html>