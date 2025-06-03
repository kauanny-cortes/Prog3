<?php
class Carro {
    private $modelo;
    private $cor;
    private $ano;

    // Construtor
    public function __construct($modelo, $cor, $ano) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    // Getter e Setter para modelo
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    // Getter e Setter para cor
    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    // Getter e Setter para ano
    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }
}

// Exemplo de uso
$carro1 = new Carro("Gol", "Branco", 2020);
echo "Modelo: " . $carro1->getModelo() . "<br>";
echo "Cor: " . $carro1->getCor() . "<br>";
echo "Ano: " . $carro1->getAno() . "<br>";

$carro1->setCor("Prata");
echo "Nova Cor: " . $carro1->getCor();
?>
