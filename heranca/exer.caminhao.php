<?php
class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() {
        echo "Andou";
    }

    public function parar() {
        echo "Parou";
    }
}

class Carro extends Veiculo {
    public $tipoCombustivel;

    public function ligarLimpador() {
        echo "Limpador ligado";
    }

    public function mostrarCombustivel() {
        echo "Tipo de combustível: " . $this->tipoCombustivel;
    }
}

class Moto extends Veiculo {
    public function andar() {
        echo "Moto está em movimento";
    }

    public function darGrau() {
        echo "Deu grau!";
    }
}

class Caminhao extends Veiculo {
    public function carregarCarga() {
        echo "Carga carregada com sucesso!";
    }
}

class CarroEletrico extends Carro {
    public function carregarBateria() {
        echo "Bateria carregada";
    }
}

$caminhao = new Caminhao;
$caminhao->modelo = "Volvo";
$caminhao->cor = "Branco";
$caminhao->ano = 2020;
$caminhao->carregarCarga();

echo "<hr>";

$carro1 = new Carro;
$carro1->modelo = "Gol";
$carro1->cor = "Vermelho";
$carro1->ano = 2018;
$carro1->tipoCombustivel = "Gasolina";
$carro1->andar();
echo "<br>";
$carro1->ligarLimpador();
echo "<br>";
$carro1->mostrarCombustivel();

echo "<hr>";

$carro2 = new Carro;
$carro2->modelo = "Gol";
$carro2->cor = "Preto";
$carro2->ano = 2022;
$carro2->tipoCombustivel = "Gasolina";
$carro2->parar();
echo "<br>";
$carro2->ligarLimpador();
echo "<br>";
$carro2->mostrarCombustivel();

echo "<hr>";

$moto1 = new Moto;
$moto1->modelo = "Honda";
$moto1->cor = "Azul";
$moto1->ano = 2017;
$moto1->andar();
echo "<br>";
$moto1->darGrau();

echo "<hr>";

$moto2 = new Moto;
$moto2->modelo = "Yamaha";
$moto2->cor = "Preta";
$moto2->ano = 2021;
$moto2->andar();
echo "<br>";
$moto2->parar();

echo "<hr>";

$carroE = new CarroEletrico;
$carroE->modelo = "Tesla";
$carroE->cor = "Branco";
$carroE->ano = 2023;
$carroE->tipoCombustivel = "Elétrico";
$carroE->andar();
echo "<br>";
$carroE->mostrarCombustivel();
echo "<br>";
$carroE->carregarBateria();
?>
