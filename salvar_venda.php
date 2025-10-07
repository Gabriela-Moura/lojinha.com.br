<?php  
//Yago 

//Salvar_vendas.php
require_once "Produto.php";
require_once "Venda.php";

// Arquivos JSON
$clientesFile = "clientes.json";
$vendasFile = "vendas.json";
$produtosFile = "produtos.json";

//Carregar arquivos
$clientes = json_decode(file_get_contents($clientesFile), true);
$produtosJSON = json_decode(file_get_contents($produtosFile), true);

if (!file_exists($vendasFile)) {
    file_put_contents($vendasFile, "[]");

}
$vendasJSON = json_decode(file_get_contents($vendasFile), true);

//Dados do formulário
$idPessoa = $_POST['idPessoa'];
$produtosSelecionados = $_POST['produtos'] ?? [];


//Busca cliente
$clienteIndex = null;


foreach ($clientes as $i => $c) {
    if ($c['idPessoa'] == $idPessoa) {
        $clienteIndex = $i;
        break;
    }
 }
        
if ($clienteIndex === null) die("❌ CLiente não encontrado");

//Cria a venda
$venda = new Venda(count($vendasJSON) + 1, $idPessoa);

//Adiciona produtos
foreach ($produtosSelecionados as $pid) {
    foreach($produtosJSON as $p) {
        if ($p['id'] == $pid) {
         $produto = new Produto($p['id'], $p['nome'], $p['preco']);
         $venda->adicionarItem($produto);
        }
    }

}

// Adiciona a venda no JSON
$vendasJSON[] = $venda->toArray();
file_put_contents($vendasFile, json_encode($vendasJSON, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

//Redireciona para o extrato
header("Location: extrato.php?idPessoa=$idPessoa");
exit;



