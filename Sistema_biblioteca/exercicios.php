<?php
// Exercício 1 a 4 – Classe Livro com leitor
class Livro {
    private $titulo;
    private $autor;
    private $ano;
    private $disponivel;
    protected $leitorAtual;

    public function __construct($titulo, $autor, $ano) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->disponivel = true;
        $this->leitorAtual = null;
    }

    // Getters
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getAno() {
        return $this->ano;
    }

    public function isDisponivel() {
        return $this->disponivel;
    }

    // Setters
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function setDisponivel($status) {
        $this->disponivel = $status;
    }

    // Método para exibir as informações
    public function exibirInformacoes() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Ano: " . $this->ano . "<br>";
        echo "Disponível: " . ($this->disponivel ? "Sim" : "Não") . "<br>";
    }

    // Exercício 2 - emprestar, devolver, verificar
    public function emprestar($nomeLeitor) {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $nomeLeitor;
            echo "Livro emprestado para: " . $nomeLeitor . "<br>";
        } else {
            echo "Livro não disponível para empréstimo.<br>";
        }
    }

    public function devolver() {
        if (!$this->disponivel) {
            echo "Livro devolvido por: " . $this->leitorAtual . "<br>";
            $this->disponivel = true;
            $this->leitorAtual = null;
        } else {
            echo "Livro já está disponível.<br>";
        }
    }

    public function quemPegou() {
        if ($this->leitorAtual != null) {
            echo "Livro está com: " . $this->leitorAtual . "<br>";
        } else {
            echo "Livro está na biblioteca.<br>";
        }
    }
}

// Exercício 3 – Classe Leitor
class Leitor {
    private $nome;
    private $email;
    private $telefone;

    public function __construct($nome, $email, $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function exibirLeitor() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Telefone: " . $this->telefone . "<br>";
    }
}

// Exercício 5 – Classe Biblioteca
class Biblioteca {
    public $nomeBiblioteca;
    private $livros = [];
    private $leitores = [];

    public function __construct($nome) {
        $this->nomeBiblioteca = $nome;
    }

    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }

    public function adicionarLeitor(Leitor $leitor) {
        $this->leitores[] = $leitor;
    }

    public function listarLivros() {
        echo "<b>Livros na biblioteca:</b><br>";
        foreach ($this->livros as $livro) {
            $livro->exibirInformacoes();
            echo "<hr>";
        }
    }

    public function listarLeitores() {
        echo "<b>Leitores cadastrados:</b><br>";
        foreach ($this->leitores as $leitor) {
            $leitor->exibirLeitor();
            echo "<hr>";
        }
    }
}

// EXEMPLO DE USO 

echo "<h3>Exemplo de Empréstimo</h3>";
$livro1 = new Livro("Salvar o Fogo", "Itamar Vieira Junior", 2023);
$leitor1 = new Leitor("Kauanny", "kauanny@email.com", "119999999");

$livro1->exibirInformacoes();
$livro1->emprestar($leitor1->getNome());
$livro1->quemPegou();
$livro1->devolver();
$livro1->quemPegou();

echo "<h3>Biblioteca Completa</h3>";
$biblioteca = new Biblioteca("Biblioteca");

$livro2 = new Livro("1984", "George Orwell", 1949);
$livro3 = new Livro("Em busca de mim", "Viola Davis", 2022);

$leitor2 = new Leitor("João", "joao@email.com", "119888888");

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);

$biblioteca->adicionarLeitor($leitor1);
$biblioteca->adicionarLeitor($leitor2);

$biblioteca->listarLivros();
$biblioteca->listarLeitores();
?>
