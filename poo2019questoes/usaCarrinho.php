<?php
include './CarrinhoCompras.php';

$carShopping = new Carrinho('JOAO SANTOS');
$carShopping->addItem( new Item("PAPEL", 22, 2));
$carShopping->addItem( new Item("CANETA", 2.4, 10));
$carShopping->addItem( new Item("LAPIS", 1.5, 5));
$carShopping->addItem( new Item("AGENDA", 12, 2));
echo "Cliente: " . $carShopping->getCliente() . "  DATA: " .  $carShopping->getDataCompra();
echo "<br> ITENS <br>";
var_dump($carShopping->getItens());

echo "<br> VALOR TOTAL <br>";

