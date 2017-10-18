<?php

// Inicializa a session
session_start();

// Ecoa os valores das variaveis de session 
echo "A cor favorita é " . $_SESSION["favcolor"] . ".<br>";
echo "O animal favorito é " . $_SESSION["favanimal"] . ".";


// to change a session variable, just overwrite it 
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);