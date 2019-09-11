<?php
include './Poligono.php';

$quadrado = new Quadrado(2);
echo "<br> a area do quadrado = " .$quadrado->area();

$triangulo = new Triangulo(3,3,5);
echo "<br> a area do triangulo = " .$triangulo->area();



