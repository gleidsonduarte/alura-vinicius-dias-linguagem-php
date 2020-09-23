<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Gleidson',
        'saldo' => 1000
    ],
    '123.456.489-11' => [
        'titular' => 'Camila',
        'saldo' => 10000
    ],
    '123.256.789-10' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.489-11'] = sacar(
    $contasCorrentes['123.456.489-11'],
    500
);

$contasCorrentes['123.256.789-10'] = depositar(
    $contasCorrentes['123.256.789-10'],
    200
);

unset($contasCorrentes['123.256.789-10']);

titularComLetraMaiusculas($contasCorrentes['123.456.789-10']);

// echo '<ul>';
// foreach ($contasCorrentes as $cpf => $conta) {
//     exibeConta($conta);
// };
// echo '</ul>';

// foreach ($contasCorrentes as $cpf => $conta) {
//      Uma forma de trabalhar com lista
//     ['titular' => $titular, 'saldo' => $saldo] = $conta;
//     exibeMensagem("$cpf $titular $saldo");
// };

// Interpolação de string

// foreach ($contasCorrentes as $cpf => $conta) {
//     Pode ser feita colocando o array dentro de chaves
//     exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
// };

// foreach ($contasCorrentes as $cpf => $conta) {
//     Também pode ser feita sem chaves em volta das variáveis,
//     porém é necessário retirar todas as aspas de dentro das chaves do array
//     exibeMensagem("$cpf $conta[titular] $conta[saldo]");
// };

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular'] ?> - <?= $cpf ?></h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo'] ?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>
