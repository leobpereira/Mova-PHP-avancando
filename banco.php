<?php

include 'funcoes.php';
// Em caso de erro, o include produz um warning
// Em caso de erro, o require produz um erro fatal
// require_once => requere o arquivo só no caso de ele ainda não ser requerido

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Leonardo',
        'saldo' => 250
    ],

    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 100
    ],

    '123.456.789-12' => [
        'titular' => 'Lucas',
        'saldo' => 150
    ],
    '000.001.002-3' => [
        'titular' => 'Nulo',
        'saldo' => 0
    ]
];

mensagemIntro();

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 60);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 60);
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 60);


letrasMaiusculas($contasCorrentes['123.456.789-12']);

unset($contasCorrentes['000.001.002-3']);

echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3>Conta: <?= $conta['titular']; ?> - <?= $cpf ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
