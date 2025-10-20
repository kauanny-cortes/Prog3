<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;

    public final function fazerAniversario() {
        $this->idade++;
    }
}

class Aluno extends Pessoa {
    protected $matricula;
    protected $curso;

    public function pagarMensalidade() {
        echo "<p>Mensalidade de {$this->nome} paga com sucesso!</p>";
    }
}

class Bolsista extends Aluno {
    private $bolsa;

    public function renovarBolsa() {
        echo "<p>Bolsa renovada para {$this->nome}.</p>";
    }

    public function pagarMensalidade() {
        echo "<p>{$this->nome} é bolsista! Pagamento facilitado.</p>";
    }
}

$aluno1 = new Aluno();
$aluno1->nome = "Maria";
$aluno1->pagarMensalidade();

$bolsista1 = new Bolsista();
$bolsista1->nome = "João";
$bolsista1->pagarMensalidade();

?>
