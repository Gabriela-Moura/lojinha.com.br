<?php
//nubia e bruna
$produtosFile = "produtos.json";

//Se nao existir, cria um array vazio
if (!file_exists($produtosFile)){
    file_put_contents($produtosFile, "[]");
}
$produtos = json_decode(file_get_contents($produtosFile),true);

//Captura dados do formulario
$nome = $_POST['nome'] ?? null;
$preco = $_POST['preco'] ?? null;

if (!$nome || !$preco){
    die("❌ Nome e preço são obrigatorios.");
}

// Gera ID automatico
$novoId = count($produtos) >0? max(array_column($produtos, "id")) +1 : 1;

//Novo produto
$novoProduto = [
    "id" => $novoId,
    "nome" =>$nome,
    "preco" => (float)$preco
];

$produtos[] = $novoProduto;

//Salva no JSON

file_put_contents($produtosFile, json_encode($produtos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

//Redireciona para lista de produtos ou vendas
header("Location: listar_produtos.php");
exit;
?>