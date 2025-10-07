<!DOCTYPE html>
<!-- João Pedro e Somaggio -->
<html lang="pt-br">
<meta charset="UTF-8">
<link rel="stylesheet" href="estilo.css">
<head class='head1'>
    <div>
        <title>Cadastrar produtos</title>
    </div>
</head>
<body id='body2'>
    <div id='div1'>
        <h1>Cadastro de Produto</h1>
    </div>
    <div id='div2'>
        <form action="salvar_produto.php" method="post">
        <label><strong>Nome do Produto:<strong></label><br>
        <input type="text" name="nome" required><br><br>
        <label><strong>Preço (R$):<strong></label><br>
        <input type="number" step="0.01" name="preco" required><br><br>
        <button type="submit">Salvar Produto</button>
        </form>
        <br>
    </div>
    <div>
        <a href="venda_form.php" id='voltar'>🔙 Voltar para Vendas</a>
    </div>
    <footer id='div3'>
        <p class='head1'>todos os direitos reservados</p>
    </footer>
</body>
</html>