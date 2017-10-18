<?php
// Inicializa a session
session_start();

if (isset($_SESSION["views"])) {
    $_SESSION["views"] = $_SESSION["views"] + 1;
}
else {
    $_SESSION["views"] =  1;
}
    
// Ecoa o valor da variavel de session (views)
echo "Você acesso a página " . $_SESSION["views"] . " vezes.<br>";
