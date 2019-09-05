<?php
class Veiculo {
    // atributos
    private $marca;
    private $ano;
    private $cor;
    private $motor;
    private $tipoCombustivel;
    private $velocidadeAtual;
    private $combustivelAtual;

     
    
    // métodos
    public function acelerar() {
       $this->velocidadeAtual++;
    }
     
    public function frear() {
        $this->velocidadeAtual--;
        if ($this->velocidadeAtual < 0) {
            $this->velocidadeAtual = 0;
        }
    }
     

    // métodos de acesso Get's e Set's 
    function getMarca() {
        return $this->marca;
    }
    function setMarca($marca) {
        $this->marca = $marca;
    }
    function getAno() {
        return $this->ano;
    }
    function setAno($ano) {
        $this->ano = $ano;
    }
    function getMotor() {
        return $this->motor;
    }
    function getTipoCombustivel() {
        return $this->tipoCombustivel;
    }
    function getVelocidadeAtual() {
        return $this->velocidadeAtual;
    }
    function getCombustivelAtual() {
        return $this->combustivelAtual;
    }
    function setMotor($motor) {
        $this->motor = $motor;
    }

    function setTipoCombustivel($tipoCombustivel) {
        $this->tipoCombustivel = $tipoCombustivel;
    }

    function setVelocidadeAtual($velocidadeAtual) {
		if ($velocidadeAtual < 0)
			throw new Exception  ("VELOCIDADE INVALIDADA!");
        $this->velocidadeAtual = $velocidadeAtual;
    }

    function setCombustivelAtual($combustivelAtual) {
        $this->combustivelAtual = $combustivelAtual;
    }

    function getCor() {
        return $this->cor;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }
    public function __construct2($marca, $ano, $cor, $motor, $tipoCombustivel) {
        $this->marca = $marca;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->motor = $motor;
        $this->tipoCombustivel = $tipoCombustivel;
        $this->velocidadeAtual = 0;
        $this->combustivelAtual = 0;
   }
}
// fim da classe


// teste
$v1 =  new Veiculo();
$v1->setMarca ( "FIAT" );
$v1->setVelocidadeAtual (10);
echo " A MARCA = " . $v1->getMarca() . "<br> ";
echo " A VELOCIDADE = " . $v1->getVelocidadeAtual() . "<br> ";
$v1->acelerar();
  
echo " A VELOCIDADE ATUAL = " . $v1->getVelocidadeAtual() . "<br> ";
$v1->frear();
$v1->frear();
$v1->frear();
echo " APOS FREAR VELOCIDADE ATUAL = " . $v1->getVelocidadeAtual() . "<br> ";

print_r ( $v1 );
