<?php
abstract class Veiculo {
    protected $modelo;
    protected $ano;

    abstract public function mover();
}

class Carro extends Veiculo {
    public function mover() {
        echo "O carro está se movendo pelas ruas.<br>";
    }
}

class Bicicleta extends Veiculo {
    public function mover() {
        echo "A bicicleta está pedalando pela ciclovia.<br>";
    }
}

$carro = new Carro();
$carro->mover();

$bicicleta = new Bicicleta();
$bicicleta->mover();
?>
