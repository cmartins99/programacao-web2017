<?php
include './Carro.php';
$car1 =  new Veiculo("VW", 2012, 'VERMELHO', "1.3", "GAS");

$car1->setCombustivelAtual(10);
echo "meu carro é " .  $car1->getMarca() . "  " . $car1->getAno();
