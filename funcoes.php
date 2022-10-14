<?php
function mensagemIntro()
{
    echo "BANCO DA MOVA" . '<br>';
    echo "--------------<br>";
}

function correntistas($contasCorrentes)
{
    foreach ($contasCorrentes as $cpf => $conta) {
        echo("CPF: $cpf\nNome: {$conta['titular']} \nSaldo: {$conta['saldo']}\n------\n\n");
    }
}

function depositar(array $conta, float $valor): array
{
    if($valor < 0) {
        echo "Saldo insuficiente!\n";
    } else {
        $conta['saldo'] += $valor;
    }
    return $conta;
}

function sacar(array $conta, float $valor): array
{
    if($valor < 0) {
        echo "Impossível realizar saque!\n";
    } else {
        $conta['saldo'] -= $valor;
    }

    return $conta;
}

function letrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular . Saldo: $saldo</li>";
}