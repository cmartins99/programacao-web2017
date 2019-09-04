<?php
 include './JogoDados.php';
 
 $jogo = new JogodeDados();
 echo "<h1>LANCAMENTO DE DADOS </H1>";
 for ($i =1; $i <= 10; $i++) {
    $jogo->lancar(); 
    echo "<br>LANCAMENTO NUM = $i => " . $jogo->getDado1() ." e " . $jogo->getDado2(); 
 }
 echo "<hr>";