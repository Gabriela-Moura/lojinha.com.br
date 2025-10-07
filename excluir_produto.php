<?php
    ## Lara
    // /ᐢ⑅ᐢ\   ♡   ₊˚  
// ꒰ ˶• ༝ •˶꒱       ♡‧₊˚    ♡
// ./づ~ :¨·.·¨:     ₊˚  
    //   `·..·‘    ₊˚   ♡ 

    $produtosFile = "produtos.json";
    if(!file_exists($produtosFile)) {
        file_put_contents($produtosFile, "[]");
    }

    $produtos = json_decode(file_get_contents($produtosFile), true);
    $id = $_POST['id'] ?? null;

    if($id === null) {
        die("❌ ID do produto não informado.");
    }

    //Remove produto filtrando
    $produtos = array_filter($produtos, function($p) use ($id) {
        return $p['id']!=$id;
    });

    //Reorganiza índices do array
    $produtos = array_values($produtos);

    //Salva de volta no JSON
    file_put_contents($produtosFile, json_encode($produtos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    
    //Redireciona de volta
    header("Location: listar_produtos.php");
    exit;
?>