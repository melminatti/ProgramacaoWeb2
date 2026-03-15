<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1 - Formulário Dinâmico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }
        h2 { margin-top: 0; text-align: center; color: #333; }
        label { display: block; margin-top: 15px; font-weight: bold; font-size: 14px; }
        
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* RESOLVE O PROBLEMA DE DESLOCAMENTO */
        }

        .btn-group {
            margin-top: 20px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 4px;
            font-weight: bold;
            border: 1px solid #ccc;
            transition: 0.3s;
        }

        /* Estilo para o botão POST */
        .btn-post { background-color: #e0e0e0; color: #333; }
        .btn-post:hover { background-color: #d0d0d0; }

        /* Estilo para o botão GET (URL) */
        .btn-get { background-color: #fff; color: #007bff; border-color: #007bff; }
        .btn-get:hover { background-color: #f0f7ff; }
    </style>
</head>
<body>

<div class="container">
    <h2>Contato</h2>
    
    <form id="meuFormulario" action="destino.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label>Telefone:</label>
        <input type="number" name="telefone" id="telefone" required>

        <label>E-mail:</label>
        <input type="email" name="email" id="email" required>

        <label>Mensagem:</label>
        <textarea name="mensagem" id="mensagem" rows="4" required></textarea>

        <div class="btn-group">
            <button type="submit" onclick="document.getElementById('meuFormulario').method='POST'" class="btn-post">
                Enviar via POST
            </button>

            <button type="submit" onclick="document.getElementById('meuFormulario').method='GET'" class="btn-get">
                Enviar via URL (GET Dinâmico)
            </button>
        </div>
    </form>
</div>

</body>
</html>