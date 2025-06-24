<?php
// Classe Livro
class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "📘 O livro '{$this->titulo}' foi emprestado com sucesso.<br>";
        } else {
            echo "❌ O livro '{$this->titulo}' já está emprestado.<br>";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        echo "✅ O livro '{$this->titulo}' foi devolvido.<br>";
    }

    public function estaDisponivel() {
        return $this->disponivel;
    }

    public function getTitulo() {
        return $this->titulo;
    }
}

// Classe Aluno
class Aluno {
    private $nome;
    private $matricula;

    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function pegarLivro($livro) {
        echo "👩‍🎓 {$this->nome} está tentando pegar o livro '{$livro->getTitulo()}'...<br>";
        if ($livro->estaDisponivel()) {
            $livro->emprestar();
        } else {
            echo "⚠️ Desculpe, {$this->nome}. O livro não está disponível.<br>";
        }
    }
}

// Criando alguns livros
$livro1 = new Livro("Salvar o Fogo", "Itamar Vieira Junior");
$livro2 = new Livro("Capitães da Areia", "Jorge Amado");

// Criando alguns alunos
$aluno1 = new Aluno("João", "A001");
$aluno2 = new Aluno("Maria", "A002");

// Testando o empréstimo de livros
$aluno1->pegarLivro($livro1); // João pega o livro
$aluno2->pegarLivro($livro1); // Maria tenta pegar o mesmo livro

$livro1->devolver();          // João devolve o livro

$aluno2->pegarLivro($livro1); // Agora Maria pode pegar

$aluno1->pegarLivro($livro2); // João pega outro livro
?>