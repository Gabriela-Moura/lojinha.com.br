<!-- //###### Beatriz M.🦋 ######// -->
<?php
require_once "Funcionario.php";
$funcionariosFile = "funcionarios.json";

//Cria arquivo vazio se nao existir
if (!file_exists($funcionariosFile)) file_put_contents($funcionariosFile,"[]");
    $funcionarios = json_decode(file_get_contents($funcionariosFile),true);

//dados do formulario
$nome = $_POST['nome']?? null;
$cpf = $_POST['cpf']?? null;
$cargo = $_POST['cargo']?? null;
$salario= $_POST['salario']?? null;

if(!$nome || !$cpf || !$cargo || !$salario) die("❌ Todos os campos sao obrigatorios.");

//gera ID automatico
$novoId = count($funcionarios) > 0? max(array_column($funcionarios, "idFuncionario")) + 1 : 1;

//cria objeto Funcionario
$funcionario = new Funcionario($novoId, $nome, $cpf, $cargo, (float)$salario);

//adiciona e salva no json

$funcionarios[] = $funcionario->toArray();
file_put_contents($funcionariosFile, json_encode($funcionarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

//redireciona para listagem

header("Location: listar_funcionarios.php");
exit;
?>

