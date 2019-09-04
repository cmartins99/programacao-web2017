<?php
  include './Livro.php';
  
  $obj1 = new Livro();
  $obj1->setTitulo("Engenharia de software");
  $obj1->setAutor("Pressman");
  $obj1->setAno(2013);
   
  echo "<h1> Informações do Livro: "  . $obj1->getTitulo() . "</h1>" ;
  echo "<hr>";
  echo print_r($obj1);

