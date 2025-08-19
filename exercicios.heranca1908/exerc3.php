<?php

class Ingresso {
    public $valor;

    public function imprimeValor() {
        echo "Valor do ingresso: R$ $this->valor <br>";
    }
}

class Normal extends Ingresso {
    public function tipoIngresso() {
        echo "Ingresso Normal";
    }
}

class VIP extends Ingresso {
    public $valorAdicional;

    public function imprimeValor() {
        $valorTotal = $this->valor + $this->valorAdicional;
        echo "Valor do ingresso VIP: R$ $valorTotal <br>";
    }
}

class CamaroteInferior extends VIP {
    public $localizacao;

    public function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    public function getLocalizacao() {
        return $this->localizacao;
    }
}

class CamaroteSuperior extends VIP {
    public $valorAdicionalSuperior;

    public function imprimeValor() {
        $valorTotal = $this->valor + $this->valorAdicional + $this->valorAdicionalSuperior;
        echo "Valor do ingresso Camarote Superior: R$ $valorTotal <br>";
    }
}

$normal = new Normal();
$normal->valor = 40;
$normal->tipoIngresso();
$normal->imprimeValor();
echo "<br>";

$vip = new VIP();
$vip->valor = 40;
$vip->valorAdicional = 30;
$vip->imprimeValor();
echo "<br>";

$camaroteInferior = new CamaroteInferior();
$camaroteInferior->valor = 40;
$camaroteInferior->valorAdicional = 30;
$camaroteInferior->setLocalizacao("Setor A");
$camaroteInferior->imprimeValor();
echo "Localização: " . $camaroteInferior->getLocalizacao();
echo "<br><br>";

$camaroteSuperior = new CamaroteSuperior();
$camaroteSuperior->valor = 40;
$camaroteSuperior->valorAdicional = 30;
$camaroteSuperior->valorAdicionalSuperior = 50;
$camaroteSuperior->imprimeValor();

?>
