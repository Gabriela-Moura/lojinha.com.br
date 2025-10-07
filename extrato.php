<?php
require_once "Venda.php";
require_once "Produto.php";

$clientes = json_decode(file_get_contents("clientes.json"), true);
$vendasJSON = json_decode(file_get_contents("vendas.json"), true);

$idPessoa = $_GET['idPessoa'] ?? null;
$cliente = null;
foreach ($clientes as $c) {
if ($c['idPessoa'] == $idPessoa) {
$cliente = $c;
break;
}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Extrato do Cliente</title>
</head>
<body>
    <?php if ($cliente): ?>
        <h1>Extrato - <?= $cliente['nome'] ?></h1>
        <p><b>CPF:</b> <?= $cliente['cpf'] ?></p>
        <p><b>Crédito:</b> R$<?= number_format($cliente['credito'],2,',','.') ?></p>
        <p><b>Saldo Atual:</b> R$<?= number_format($cliente['saldo'],2,',','.') ?></p>

    <h2>Compras:</h2>
    <ul>
        <?php foreach ($vendasJSON as $v): ?>
            <?php $venda = Venda::fromArray($v); ?>
                <?php if ($venda->getIdPessoa() == $cliente['idPessoa']): ?>
                    <li>
                        <?= $venda->getData() ?> - Total: R$<?= number_format($venda->getTotal(),2,',','.') ?>
                            <ul>
                                <?php foreach ($venda->getItens() as $item): ?>
                                    <li><?= $item->getNome() ?> (R$<?= number_format($item->getPreco(),2,',','.') ?>)</li>
                                <?php endforeach; ?>
                            </ul>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
    </ul>
<?php else: ?>
<p> ❌Cliente não encontrado.</p>
<?php endif; ?>
</body>
</html>