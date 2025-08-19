<?php
//a)
class Animal {
    private $nome;
    private $raca;

    
    public function __construct($nome = "", $raca = "") {
        $this->nome = $nome;
        $this->raca = $raca;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function setRaca($raca) {
        $this->raca = $raca;
    }

    public function caminha() {
        return "O animal está caminhando.";
    }
}

class Cachorro extends Animal {
    public function late() {
        return "O cachorro está latindo: Au Au!";
    }
}

class Gato extends Animal {
    public function mia() {
        return "O gato está miando: Miau!";
    }
}

$dog = new Cachorro("Toby", "Pastor Alemão");
$cat = new Gato("Crystal", "Persa");

echo $dog->getNome() . " - " . $dog->late() . "<br>";
echo $cat->getNome() . " - " . $cat->mia() . "<br>";
echo $dog->caminha() . "<br>";
echo $cat->caminha() . "<br>";
?>

<br>
<br>


<?php
//b)
class Pessoa {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}

class Rica extends Pessoa {
    private $dinheiro;

    public function __construct($nome, $idade, $dinheiro) {
        parent::__construct($nome, $idade);
        $this->dinheiro = $dinheiro;
    }

    public function fazCompras() {
        echo $this->nome . " está fazendo compras com R$" . $this->dinheiro . "<br>";
    }
}


class Pobre extends Pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, $idade);
    }

    public function trabalha() {
        echo $this->nome . " está trabalhando para sobreviver.<br>";
    }
}


class Miseravel extends Pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, $idade);
    }

    public function mendiga() {
        echo $this->nome . " está pedindo esmola.<br>";
    }
}

$rica = new Rica("Ana", 40, 80000.0);
$pobre = new Pobre("Maria", 30);
$miseravel = new Miseravel("Joana", 45);

$rica->fazCompras();
$pobre->trabalha();
$miseravel->mendiga();
?>
