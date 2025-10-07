<!DOCTYPE html>
<!-- Davi Menezes-->
<!-- funcionario_form.php-->
<!DOCTYPE html>
<!-- Davi Menezes-->
<!-- funcionario_form.php-->
<html lang="pt-br">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
<head>
    <title>Cadastro de Funcionário</title>
</head>
<body id='body3'>
    <div id='div4'>
        <h1 class='head2'>Cadastro de Funcionário</h1>
    </div>
    <div id='div5'>
        <form action="salvar_funcionario.php" method="post">
        <label><strong>Nome</strong></label><br>
        <input type="text" name="nome" required><br><br>
        <label><strong>CPF:</strong></label><br>
        <input type="text" name="cpf" required><br><br>
        <label><strong>Cargo:</strong></label><br>
        <input type="text" name="cargo" required><br><br>
        <label><strong>Salário (R$):</strong></label><br>
        <input type="number" step="0.01" name="salario" required><br><br>
        <input type="submit" value="Salvar Funcionários">
        </form>
        <br>
    </div>
    <div class='voltar2'>
        <a href="listar_funcionarios.php">📋 Listar Funcionários</a>
    </div>
    <div class='voltar2'>
        <a href="index.html">🔙 Voltar ao Menu</a>
    </div>
    <footer id='div6'>
        <p class='head1'>todos os direitos reservados</p>
    </footer>
</body>
</html>