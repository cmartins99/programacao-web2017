<?php
class JogodeDados {
   private $dado1;
   private $dado2;
  
   public function lancar(){
       $this->dado1 = rand(1,6);
       $this->dado2 = rand(1,6);
   }
   function getDado1() {
       return $this->dado1;
   }
   function getDado2() {
       return $this->dado2;
   }
} // fim da classe
