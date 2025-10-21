<?php
abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = strtoupper($sexo); 
    }

    final public function fazerAniversario() {
        $this->idade++;
        $artigo = $this->sexo === "F" ? "a" : "o";
        echo "<p>Parabéns, {$artigo} {$this->nome}! Agora você tem {$this->idade} anos.</p>";
    }

    abstract public function apresentar();
}
// Não é possível instanciar diretamente (new Pessoa()) porque é abstrata, ou seja, serve apenas de modelo para outras classes.
// O método final impede que ele seja sobrescrito nas classes filhas.
// O método abstrato obriga as subclasses a implementarem sua própria versão do método.



class Visitante extends Pessoa {
    public function apresentar() {
        $artigo = $this->sexo === "F" ? "a" : "o";
        echo "<p>Sou {$artigo} visitante chamado {$this->nome}.</p>";
    }
}


$v = new Visitante("João", 15, "M");
$v->apresentar();
$v->fazerAniversario();

// Visitante é uma classe concreta (pode ser instanciada).
//A herança é pobre, pois apenas reutiliza os métodos e atributos da classe base sem adicionar novos comportamentos.



class Aluno extends Pessoa {
    protected $matricula;
    protected $curso;

    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function apresentar() {
        $artigo = $this->sexo === "F" ? "a" : "o";
        echo "<p>Sou {$artigo} aluno {$this->nome}, do curso de {$this->curso}.</p>";
    }

    public function pagarMensalidade() {
        $artigo = $this->sexo === "F" ? "a" : "o";
        echo "<p>Mensalidade de {$artigo} {$this->nome} paga com sucesso.</p>";
    }
}


$a = new Aluno("Maria", 18, "F", "208591", "Informática");
$a->apresentar();
$a->fazerAniversario();
$a->pagarMensalidade();

// O parent::__construct() chama o construtor da classe mãe para aproveitar a inicialização comum.
//O método fazerAniversario() não pode ser sobrescrito porque foi declarado como final.



class Bolsista extends Aluno {
    private $bolsa;

    public function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa) {
        parent::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa() {
        $artigo = $this->sexo === "F" ? "a" : "o";
        echo "<p>Bolsa de {$artigo} {$this->nome} renovada com sucesso.</p>";
    }

    public function pagarMensalidade() {
        $artigo = $this->sexo === "F" ? "a" : "o";
        echo "<p>{$artigo} {$this->nome} é bolsista. Pagamento com desconto de {$this->bolsa}%.</p>";
    }
}

$b = new Bolsista("Paulo", 19, "M", "279232", "Administração", 50);
$b->apresentar();
$b->pagarMensalidade();
$b->renovarBolsa();

// O método pagarMensalidade() mostra polimorfismo, pois tem comportamento diferente do mesmo método em Aluno.
// fazerAniversario() não pode ser sobrescrito por ser final.



final class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    public function __construct($nome, $idade, $sexo, $esp, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this->especialidade = $esp;
        $this->salario = $salario;
    }

    public function apresentar() {
        $artigo = $this->sexo === "F" ? "a" : "o";
        echo "<p>Sou {$artigo} professor(a) {$this->nome}, especialista em {$this->especialidade}.</p>";
    }

    public function receberAumento($valor) {
        $this->salario += $valor;
        echo "<p>O salário de {$this->nome} foi reajustado para R$ {$this->salario}.</p>";
    }
}


$p = new Professor("Joana", 36, "F", "Matemática", 6000);
$p->apresentar();
$p->receberAumento(500);


$grupo = [$v, $a, $b, $p];
foreach ($grupo as $obj) {
    echo "<p>Classe: " . get_class($obj) . "</p>";
    if ($obj instanceof Pessoa) {
        echo "<p>É uma instância de Pessoa.</p>";
    }
}

// rofessor é final, então não pode ter subclasses (ex: Coordenador extends Professor gerará erro).
// A raiz da hierarquia é Pessoa, e as folhas são Visitante, Aluno, Bolsista e Professor.
?>
