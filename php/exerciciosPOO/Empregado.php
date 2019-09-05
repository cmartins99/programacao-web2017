<?php

class Empregado {
    private $nome;
    private $idade;
    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }
        
    public function toString() {
        return  "{$this->nome} tem {$this->idade} anos de idade.";
    }
}
class Diarista extends Empregado {
    private $salarioDia;
    function getSalarioDia() {
        return $this->salarioDia;
    }

    function setSalarioDia($salarioDia) {
        $this->salarioDia = $salarioDia;
    }


}
class Mensalista extends Empregado {
    private $salarioMes;
    
    function getSalarioMes() {
        return $this->salarioMes;
    }

    function setSalarioMes($salarioMes) {
        $this->salarioMes = $salarioMes;
    }
    public function toString2() {
        return  "{$this->nome} tem {$this->idade} anos de idade. <br>  RECEBE = {$this->salarioMes} " ;
    }

}

// criar a classe Diarista
// Testando a classe Mensalista
$empM = new Mensalista();
$empM->setNome("Bob Smith");
$empM->setIdade(30);
$empM->setSalarioMes(1000);
echo $empM->toString(); // imprime "Bob Smith tem 30 anos de idade."
echo "<br>SALARIO = " . $empM->getSalarioMes();

