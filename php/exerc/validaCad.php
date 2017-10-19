<?php
if (!empty($_GET)) {
    $nome = $_GET["nome"];
     $idade = $_GET["idade"];
     $sexo = $_GET["sexo"];
     $end = $_GET["end"];
     $erro = "";
    // print_r( $_GET);
     if ( !($idade > 18 && $sexo="Masc")) {
        $erro = "Idade para sexo MASC deve ser maior que 18";
     }
     if ( !($idade > 20 && $sexo="Fem")) {
        $erro = "Idade para sexo FEM deve ser maior que 20";
     }
     // testa o nome        
     $nomes = explode(" ", $nome);
     if (count($nomes) < 2) {
        $erro = $erro . "<br>" . "Nome deve ter duas partes no minimo";
     }
     if ($erro=="") {
         header ("Location: bemvindo.php"); 
     } else {
         header ("Location: cadPessoa.php?erro=$erro"); 
     }
}