<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Salvo | Sistema</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(120deg, #F0F8FF 0%, #B0E0E6 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        
        header {
            width: 100%;
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 15px 25px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        header a {
            text-decoration: none;
            color: #2c7fb8;
            font-weight: 600;
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }
        
        header a:hover {
            background-color: #B0E0E6;
            color: #1a5a7a;
            border-color: #2c7fb8;
        }
        
        .container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 600px;
            text-align: center;
        }
        
        .success-icon {
            font-size: 60px;
            color: #2c7fb8;
            margin-bottom: 20px;
        }
        
        .success-message {
            font-size: 24px;
            color: #1a5a7a;
            margin-bottom: 25px;
            font-weight: 600;
        }
        
        .btn-back {
            display: inline-block;
            background: linear-gradient(to right, #2c7fb8, #B0E0E6);
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(44, 127, 184, 0.3);
            margin-top: 10px;
        }
        
        .btn-back:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(44, 127, 184, 0.4);
        }
        
        footer {
            margin-top: 30px;
            color: #2c7fb8;
            font-size: 14px;
        }
        
        @media (max-width: 600px) {
            header {
                flex-direction: column;
                gap: 10px;
            }
            
            .container {
                padding: 25px;
            }
            
            .success-message {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.html">Voltar ao início</a>
        <a href="cliente_form.html">Cadastrar um novo cliente</a>
    </header>
    
    <div class="container">
        <div class="success-icon">✓</div>
        <h1 class="success-message">Cliente cadastrado com sucesso!</h1>
        
        <a href="index.html" class="btn-back">🔙 Voltar ao Menu Principal</a>
    </div>
    
    <footer>
        Sistema de Clientes © <?php echo date('Y'); ?>
    </footer>
</body>
</html>



<?php
//Livia Cristina
require_once "Cliente.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$credito = $_POST['credito'];
$saldo = $_POST['saldo'];

//Geração de ID simples
$idPessoa = time(); //timestamp como ID

$cliente = new Cliente($idPessoa,$nome,$cpf,$credito,$saldo);

//caminho do arquivo JSON
$arquivo = "clientes.json";

//lê arquivo existente ou cria novo
$dados = file_exists($arquivo)? json_decode(file_get_contents($arquivo),true):[];

//adiciona novo cliente
$dados[]=$cliente->toArray();

//salva novamente no arquivo
file_put_contents($arquivo,json_encode($dados,JSON_PRETTY_PRINT));

echo "<p>Cliente cadastrado com sucesso!</p>";
echo"<a id='voltar3' href='index.html'>🔙 Voltar ao Menu</a>"
?> 