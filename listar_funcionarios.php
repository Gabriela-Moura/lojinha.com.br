<?php 
//Luiz e Bianca
// _______________¶¶¶¶¶¶¶¶¶¶¶¶¶¶
// _________________¶¶¶¶¶¶¶¶¶¶____¶¶¶¶¶¶¶¶¶
// _________________¶¶¶¶¶¶¶¶¶__¶¶¶¶¶¶¶¶¶¶¶¶¶¶
// _______¶¶¶¶¶¶¶____¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶
// ____¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶
// __¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶___________¶¶¶
// ¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶______________¶¶
// ¶¶¶¶¶¶¶¶¶______¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶
// ___________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶
// _______¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶__¶¶¶¶¶_______¶¶¶¶¶¶¶¶¶¶¶¶¶
// ______¶¶¶¶¶¶¶¶¶¶¶________¶¶¶¶¶_________¶¶¶¶¶¶¶¶¶¶
// ______¶¶¶¶¶¶¶¶¶__________¶¶¶¶¶¶_________¶¶¶¶¶¶¶¶¶
// ______¶¶¶¶¶¶¶¶____________¶¶¶¶¶__________¶¶¶¶¶¶¶¶
// ______¶¶¶¶¶¶______________¶¶¶¶¶¶__________¶¶¶¶¶¶¶
// ______¶¶¶¶¶________________¶¶¶¶¶¶__________¶¶¶¶¶¶
// _______¶¶¶¶_________________¶¶¶¶¶¶__________¶¶¶¶¶
// _______¶¶__________________¶¶¶¶¶¶¶_________¶¶¶¶
// _______¶¶___________________¶¶¶¶¶¶¶_________¶¶
// _______¶____________________¶¶¶¶¶¶¶_________¶
// _____________________________¶¶¶¶¶¶
// _____________________________¶¶¶¶¶¶¶
// _____________________________¶¶¶¶¶¶¶
// ___________________________¶¶¶¶¶¶¶¶¶¶
// ________________________¶¶¶111¶¶¶¶¶¶¶
// _________________¶¶¶¶¶¶111111111¶¶¶¶¶¶¶
// _______________¶¶1111111111111111¶¶¶¶¶¶¶
// _____¶¶¶¶¶1111111111111¶1111¶¶¶¶¶¶¶1111¶¶¶
// __¶¶¶¶¶¶1111111111111111111¶¶11¶¶¶¶¶¶¶11¶¶¶¶
// ¶¶1111111111111111111111110n¶¶¶¶¶¶¶¶¶¶¶¶¶¶
// 11111111111111111111111111111¶¶¶¶¶¶¶¶¶¶¶¶¶¶
require_once "Funcionario.php";
echo"<link rel='stylesheet' href='estilo.css'>";

$funcionariosFile="funcionarios.json";
if (!file_exists($funcionariosFile)) file_put_contents($funcionariosFile, "[]");

$funcionariosJSON = json_decode(file_get_contents($funcionariosFile), true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionários</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="corpoFuncionario">
    <header class="containerFuncionario">
        <h1>Funcionários Cadastrados</h1>
    </header>
<div class="centra">
    <div class="tabela">
        <table border="1" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Cargo</th>
                <th>Salário (R$)</th>
                <th>Ações</th>
            </tr>

            <?php foreach ($funcionariosJSON as $f): ?>
                <tr>
                    <td><?=$f['idFuncionario']?></td>   
                    <td><?=$f['nome']?></td>   
                    <td><?=$f['cpf']?></td>   
                    <td><?=$f['cargo']?></td>   
                    <td><?= number_format($f['salario'],2,',','.') ?></td>
                    <td>
                        <form action="excluir_funcionario.php" method="post" style="display:inline;" onsubmit="return confirm('Deseja realmente excluir este funcionário?')">
                            <input type="hidden" name="idFuncionario" value="<?=$f['idFuncionario'] ?>">
                            <button type="submit">❌ Excluir</button>
                        </form>
                    </td>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<br><br>
<a class="containerCadastrar" href="funcionario_form.php">➕ Cadastrar Novo Funcionário</a>
<br><br>
<a class="containerVoltar" href="index.html">🔙 Voltar ao Menu</a>





</body> 
</html>