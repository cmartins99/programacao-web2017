<?php

echo "<h1> Homepage </h1>";
echo "<br>Bem-vindo  <strong>" . $_GET["login"] . "</strong>"; 

// exibe a data e hora locais (de Belem/PA, Brasil)
date_default_timezone_set('America/Belem');
echo "<br>Seu acesso ocorreu em " .  date ("d-m-Y") . " às "  .date("H:i:s");

