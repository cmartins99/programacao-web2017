<?php

class Livro {
    private $titulo;
    private $autor;
    private $ano;
    private $editora;
    private $numpags;
    private $genero;
    
    function getEditora() {        return $this->editora;     }
    function setEditora($editora) {         $this->editora = $editora;     }
    function getTitulo() {          return $this->titulo;     }
    function getNumpags() {         return $this->numpags;     }
    function getGenero() {         return $this->genero;     }
    function setTitulo($titulo) {         $this->titulo = $titulo;     }
    function setAutor($autor) {        $this->autor = $autor;     }
    function setAno($ano) {         $this->ano = $ano;     }

    // metodo construtor padrao
    public function __construct() {
        // aqui voce pode introduzir algum codigo de inicializacao
    }
    // metodo que cria um objeto Livro usando um construtor padrao
    public static function constructLivro($titulo, $autor, $ano, $editora, $numpags, $genero) {
        $objLivro = new Livro();
        $objLivro->titulo = $titulo;
        $objLivro->autor = $autor;
        $objLivro->ano = $ano;
        $objLivro->editora = $editora;
        $objLivro->numpags = $numpags;
        $objLivro->genero = $genero;
        return $objLivro;
    }

    
     
}

 // teste do objeto Livro
 //  include './Livro.php';      // ---> se for usar o teste em outra pagina php 
// criando um objeto usando um construtor padrao   
  $obj1 = new Livro();
  $obj1->setTitulo("Engenharia de software");
  $obj1->setAutor("Pressman");
  $obj1->setAno(2013);
   
  echo "<h1> Informações do Livro: "  . $obj1->getTitulo() . "</h1>" ;
  echo "<hr>";
  echo "DADOS DO LIVRO: " .  $obj1->getTitulo();
  echo "<BR><BR>PRINT DO OBJETO LIVRO => " ;
  echo print_r($obj1);
  
  // criando um objeto usando um metodo "Fabrica" de objeto Livro
  $obj2livro = Livro::constructLivro("PHP PARA NERDS", "JOHN NERD", 2000, "CAMPUS", 100, "Tecnologia");
  echo "<hr>";
  echo "<h3>USANDO CONSTRUTOR FABRICA </h3>   <br> * DADOS DO LIVRO : " .  $obj2livro->getTitulo();
  echo "<BR><BR>PRINT DO OBJETO LIVRO => " ;
  echo print_r($obj2livro);
  
   