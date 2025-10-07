<?php
echo"<link rel='stylesheet' href='estilo.css'>";
$produtosFile = "produtos.json";
// Marcelo e Diego
if (!file_exists($produtosFile)){
    file_put_contents($produtosFile, "[]");
}

$produtos = json_decode(file_get_contents($produtosFile), true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body class="corpoInicial">
   <h1 class="produtosCadastrados">Produtos Cadastrados</h1>
   
   <table class="tableProdutos" border='1' cellpadding='10'>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preco (R$)</th>
        <th>Acoes</th>
    </tr>
    <?php foreach ($produtos as $p): ?>
        <tr align="center">
            <td><?=$p['id']?></td>
            <td><?=$p['nome']?></td>
            <td>R$<?= number_format($p['preco'], 2, ',', '.') ?></td>
            <td>
                <form action="excluir_produto.php" method="post" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');">
                    <input type="hidden" name="id" value="<?=$p['id']?>">
                    <button type="submit"> EXCLUIR</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<br>
<a id="voltar3" href="produto_form.php">Cadastrar Novo Produto</a><br>
<a id="voltar3" href="venda_form.php">Ir para Vendas</a>    
<br>
<a id="voltar3" href="index.html">🔙 Voltar ao Menu</a>
</body>
</html>