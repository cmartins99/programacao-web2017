<?php

// Inicializa a session
session_start();

// Define as variaveis de sessão
$_SESSION["favcolor"] = "verde";
$_SESSION["favanimal"] = "gato";
echo "Variaveis de sessao criadas.";
