<?php
abstract class Veiculo {
    protected $modelo;
    protected $ano;

    abstract public function mover();
}

class Carro extends Veiculo {
    public function mover() {
        echo "O carro está andando pela estrada.<br>";
    }
}

class Bicicleta extends Veiculo {
    public function mover() {
        echo "A bicicleta está pedalando pelo campo.<br>";
    }
}

$carro = new Carro();
$carro->mover();

$bicicleta = new Bicicleta();
$bicicleta->mover();
?>

