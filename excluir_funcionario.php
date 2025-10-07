<?php
$funcionariosFile = "funcionarios.json";

if (!file_exists($funcionariosFile)) file_put_contents($funcionariosFile, "[]");

$funcionarios = json_decode(file_get_contents($funcionariosFile), true);

$idFuncionario = $_POST['idFuncionario'] ?? null;
if (!$idFuncionario) die(" ID do funcionário não informado.");

// Remove o funcionário
$funcionarios = array_filter($funcionarios, fn($f) => $f['idFuncionario'] != $idFuncionario);
$funcionarios = array_values($funcionarios); // reorganiza índices

file_put_contents($funcionariosFile, json_encode($funcionarios, JSON_PRETTY_PRINT |
JSON_UNESCAPED_UNICODE));

// Redireciona para a listagem
header("Location: listar_funcionarios.php");
exit;
?>