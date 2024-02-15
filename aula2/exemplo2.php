<?php
class Livro {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }
}

$livros = new Livro("la casa de madeira","jeorge");

echo "titulo do livro: " . $livros->getTitulo() . "<br>";
echo "autor do livro: " . $livros->getAutor() . "<br>";

?>