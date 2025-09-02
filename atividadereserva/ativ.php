<?php
class Quarto{
    private $numero;
    private $preco;

    public function construct($num){
        $this->numero = $num;
    }

    public function getNumero(): mixed{
        return $this->numero;
    }
}

class Standard extends Quarto{

    public function getpreco(): float{
        return $this->preco = 300.00;
    }
}

class Deluxe extends Quarto{
       public $hospedes;

    public function getPreco($hospedes): float{
        if($hospedes >= 2){
            return $this->preco = (300.00 * 1.2)*1.1;
        }else
        return $this->preco = 300.00 * 1.2;
    }
}

class Site extends Quarto{
    public $dia;

    public function getPreco($dia): float{
        if($dia >= 2 && $dia <= 6){
            return $this->preco = 300.00 * 1.5;
        }else
        return $this->preco = (300.00 * 1.5)*1.5;
    }
}
$std = new Standard(nun: 11);
echo "Hospede - Quarto: " . $std->getNumero(). "Valor R$" . $std->getPreco()."<br>";

$duplo = new Deluxe(nun: 41);
echo "Hospede - Quarto: " . $duplo->getNumero(). "Valor R$".
$duplo->getPreco(hospedes: 2)."<br>";

$suite = new Suite(nun 101);
echo "Hospede - Quarto: " . $suite->getNumero(). "Valor R$". $suite->getPreco(dia: 1);

?>
