<?php
 include './Calculadora.php';
 
$calc = new Calculadora();
echo "<br> SOMA  =  " . $calc->soma(10, 5);
echo "<br> SUB =  " . $calc->sub(10, 5);
echo "<br> DIV =  " . $calc->div(10, 5);
echo "<br> MULT =  " . $calc->mult(10, 5);
