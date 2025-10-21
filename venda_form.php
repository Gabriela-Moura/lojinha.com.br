<?php
echo"<link rel='stylesheet' href='estilo.css'>";
// ###################
// # João Vitor
//Carregar clientes
$clientes = json_decode(file_get_contents("clientes.json"), true);


//Carregar produtos
$produtos= json_decode(file_get_contents("produtos.json"), true);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Venda</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="corpoInicial">
    <header class="containerFuncionario">
    <h1>Nova Venda</h1>
    </header>
    <form action="salvar_venda.php" method="post">
    <br>
    <!--Selecionar Cliente-->
    <main id="mainform">
    <section id="sectionVenda">
        <label>Cliente:</label><br>
        <select name="idPessoa" required>
            <option value="">--Selecione um Cliente--</option>
            <?php foreach($clientes as $c): ?>
            <option value="<?=$c['idPessoa']?>"><?= $c['nome']?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <!-- Selecionar Produto -->
        <label>Produto:</label><br>
        <select name="idProduto">
            <option value="">--Selecione um Produto --</option>
            <?php foreach ($produtos as $p): ?>
            <option value="<?= $p['id'] ?>"><?= $p['nome'] ?> - R$ <?= number_format($p['preco'], 2, ',', '.')?></option>  
            <?php endforeach; ?>
        </select>
        <br><br>


        <label>Quantidade:</label><br>
        <input type="number" name="quantidade" value="1" min="1">
        <br><br>


        <button type="submit">Adicionar Item</button>
    </section>
    </form>
    <br>
    </main>
    <br>
    <div class="finalvenda">
        <a href="listar_vendas.php" class="salvar">Ver Vendas</a>
        <br>
        <a href="index.html" class="salvar">🔙 Voltar ao Menu</a>
    </div>
</body>
</html>