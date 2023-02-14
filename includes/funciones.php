<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

// funcion que revisa que el usuario esta autenticado
// no va a retornar nada por eso colocamos void
function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
    }
}
// void es que no va a retornar nada
function isAdmin() : void {
    if(!isset($_SESSION['admin'])) {
        header('Location: /');
    }
}

function esUltimo(string $actual , string $proximo) : bool {
    if($actual !== $proximo) {
        return true;
    }

    return false;
}