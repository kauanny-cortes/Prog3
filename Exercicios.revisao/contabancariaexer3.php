<?php
// Classe ContaBancaria
class ContaBancaria {
    private $titular;
    private $saldo;

    // Construtor
    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    // Método para depositar
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "💰 Depósito de R$ {$valor} realizado para {$this->titular}.<br>";
        } else {
            echo "❌ Valor de depósito inválido para {$this->titular}.<br>";
        }
    }

    // Método para sacar
    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "🏧 Saque de R$ {$valor} realizado por {$this->titular}.<br>";
        } else {
            echo "❌ Saque inválido ou saldo insuficiente para {$this->titular}.<br>";
        }
    }

    // Retorna o nome do titular
    public function getTitular() {
        return $this->titular;
    }

    // Retorna o saldo atual
    public function getSaldo() {
        return $this->saldo;
    }
}


// Testes com a classe


// Criando contas
$conta1 = new ContaBancaria("Maria", 2000);
$conta2 = new ContaBancaria("João", 600);

// Operações com a conta da Maria
$conta1->depositar(200);
$conta1->sacar(250);
echo "👩 Titular: " . $conta1->getTitular() . "<br>";
echo "💵 Saldo final: R$ " . $conta1->getSaldo() . "<hr>";

// Operações com a conta do João
$conta2->depositar(400);
$conta2->sacar(900); // Tentativa de saque maior que o saldo
echo "👨 Titular: " . $conta2->getTitular() . "<br>";
echo "💵 Saldo final: R$ " . $conta2->getSaldo() . "<br>";
?>
