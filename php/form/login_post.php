<?php

$erro = "";
$login = "";
$senha = "";
// verifica se foi enviado por método POST
if (!empty($_POST)) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if (ehValido($login, $senha)) {
        // redireciona para pagina principal
        header("Location: homepage.php?login=" . $login);
    } else {
        $erro = "Login ($login) ou Senha incorretos!";
        // retorna à pagina de login com o erro
        header("Location: login_form.php?erro=" . $erro);
    }
}

function ehValido($_login, $_senha) {
    if ($_login === "admin" & $_senha === "admin") {
        return true;
    } else {
        if ($_login === "guest" & $_senha === "guest") {
            return true;
        } else {
            return false;
        }
    }
}
