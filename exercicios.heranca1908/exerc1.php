<?php

class Funcionario {
    public $nome;
    public $salario;

    public function addAumento($valor) {
        $this->salario += $valor;
    }

    public function ganhoAnual() {
        return $this->salario * 12;
    }

    public function exibeDados() {
        echo "Nome: $this->nome <br>";
        echo "Salário: R$ $this->salario <br>";
    }
}

class Assistente extends Funcionario {
    public $matricula;

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function exibeDados() {
        echo "Nome: $this->nome <br>";
        echo "Salário: R$ $this->salario <br>";
        echo "Matrícula: $this->matricula <br>";
    }
}

class Tecnico extends Assistente {
    public $bonus;

    public function ganhoAnual() {
        return ($this->salario + $this->bonus) * 12;
    }
}

class Administrativo extends Assistente {
    public $turno;
    public $adicionalNoturno;

    public function ganhoAnual() {
        if ($this->turno == "noite") {
            return ($this->salario + $this->adicionalNoturno) * 12;
        } else {
            return $this->salario * 12;
        }
    }
}


$tecnico = new Tecnico();
$tecnico->nome = "Ana";
$tecnico->salario = 3000;
$tecnico->bonus = 300;
$tecnico->setMatricula("T2208");

$tecnico->exibeDados();
echo "Ganho Anual: " . $tecnico->ganhoAnual();
echo "<br><br>";



$adm = new Administrativo();
$adm->nome = "Joana";
$adm->salario = 7000;
$adm->turno = "Tarde";
$adm->adicionalNoturno = 600;
$adm->setMatricula("A2007");

$adm->exibeDados();
echo "Ganho Anual: " . $adm->ganhoAnual();

?>
