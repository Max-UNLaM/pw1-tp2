<?php
/**
 * Created by PhpStorm.
 * User: maximiliano
 * Date: 1/05/18
 * Time: 18:38
 */
if (key_exists('calculo', $_POST)) {
    switch ($_POST['calculo']) {
        case "ecuacion":
            echo calcularEcuacion((float)$_POST['ecuacion-x-valor'], (float)$_POST['ecuacion-y-valor']);
            break;
        case "biblioteca":
            echo buscarLibro((string)$_POST['biblioteca-autor-valor']);
            break;
    }
    exit;
} else {
    $_POST = json_decode(file_get_contents('php://input'), true);
    if (key_exists('calculo', $_POST)) {
        switch ($_POST['calculo']) {
            case "menor":
                echo min($_POST['valor']);
                break;
            case "mayor":
                echo max($_POST['valor']);
                break;
            case "medio":
                echo obtenerMedio($_POST['valor']);
                break;
        }
    } else {
        header('Location: ../index.php?error=403');
    }
    exit;
}

function calcularEcuacion(float $x, float $y)
{
    $resultado = ($x * 2) + ($x * 2) + $y;
    return number_format($resultado, 2);
}

function buscarLibro(string $autor)
{
    $biblioteca = [
        "joyce" => "Ulises",
        "gabbo" => "Crónica de una muerte anunciada",
        "tolkien" => "El señor de los anillos (trilogía)",
        "platon" => "Borgias",
        "asimov" => "Cuentos completos",
        "cortazar" => "Bestiario",
        "dostoievski" => "El jugador"
    ];
    if (key_exists($autor, $biblioteca)) {
        return $biblioteca[$autor];
    } else {
        return "No se encuentra un libro para este autor";
    }
}

function obtenerMedio(array $numeros)
{
    sort($numeros);
    return $numeros[1];
}