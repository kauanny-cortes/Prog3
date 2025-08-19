<?php

class Imovel {
    public $endereco;
    public $preco;

    public function imprimePreco() {
        echo "Endereço: $this->endereco <br>";
        echo "Preço: R$ $this->preco <br>";
    }
}

class Novo extends Imovel {
    public $adicional;

    public function precoFinal() {
        return $this->preco + $this->adicional;
    }
}

class Velho extends Imovel {
    public $desconto;

    public function precoFinal() {
        return $this->preco - $this->desconto;
    }
}

$novo = new Novo();
$novo->endereco = "Rua A, 2208";
$novo->preco = 200000;
$novo->adicional = 50000;
$novo->imprimePreco();
echo "Preço Final (Novo): R$ " . $novo->precoFinal();
echo "<br><br>";

$velho = new Velho();
$velho->endereco = "Rua B, 2007";
$velho->preco = 300000;
$velho->desconto = 20000;
$velho->imprimePreco();
echo "Preço Final (Velho): R$ " . $velho->precoFinal();

?>
