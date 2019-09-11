<?php
abstract class Poligono {
    abstract public function area();
}

class Quadrado extends Poligono {
    private $lado;
    public function area() {
        return $this->lado * $this->lado;
    }    
    public function __construct($ld) {
        $this->lado = $ld;
    }
} // fim da classe quadrado.

class Retangulo extends Poligono {
   private $altura;
   private $base;
    public function area() {
        return $this->altura * $this->base;
    }
    public function __construct($altura, $base) {
        $this->altura = $altura;
        $this->base = $base;
    }
} // fim da classe Retangulo
class Triangulo extends Poligono {
    private $a;
    private $b;
    private $c;
    public function area() {
        $p =  ($this->a + $this->b + $this->c) / 2;
        $area = sqrt( $p * ($p -$this->a) * ($p -$this->b) *
                ($p -$this->c) );
        return $area;
    }
    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
} // fim da classe Triangulo