<?php

class Animal {
    public function caminhar() {
        echo "Caminhou <br>";
    }
}

class Cachorro extends Animal {
    public function latir() {
        echo "Au Au <br>";
    }
}

class Gato extends Animal {
    public function miar() {
        echo "Miau <br>";
    }
}

class Pessoa {
    public function comer() {
        echo "Comeu <br>";
    }
}

class Rica extends Pessoa {
    public function comprar() {
        echo "Comprou um carro de luxo <br>";
    }
}

class Pobre extends Pessoa {
    public function trabalhar() {
        echo "Foi trabalhar <br>";
    }
}

class Miseravel extends Pessoa {
    public function mendigar() {
        echo "Pediu esmola <br>";
    }
}

$cachorro = new Cachorro();
$cachorro->caminhar();
$cachorro->latir();

$gato = new Gato();
$gato->caminhar();
$gato->miar();

echo "<br>";

$rica = new Rica();
$rica->comer();
$rica->comprar();

$pobre = new Pobre();
$pobre->comer();
$pobre->trabalhar();

$miseravel = new Miseravel();
$miseravel->comer();
$miseravel->mendigar();

?>
