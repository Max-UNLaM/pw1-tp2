<?php
/**
 * Created by PhpStorm.
 * User: maximiliano
 * Date: 1/05/18
 * Time: 18:38
 */

if ($_POST && key_exists('calculo', $_POST)) {
    switch ($_POST['calculo']) {
        case "area-triangulo":
            echo calcularAreaTriangulo((float)$_POST['triangulo-base-valor'], (float)$_POST['triangulo-altura-valor']);
            break;
        case "area-rectangulo":
            echo calcularAreaRectangulo((float)$_POST["rectangulo-base-valor"], (float)$_POST["rectangulo-altura-valor"]);
            break;
        case "area-trapecio":
            echo calcularAreaTrapecio((float)$_POST["trapecio-base-mayor-valor"], (float)$_POST["trapecio-base-menor-valor"], (float)$_POST["trapecio-altura-valor"]);
            break;
    }
} else {
    header('Location: ../index.php?error=403');
}


function calcularAreaTriangulo(float $base, float $altura)
{
    return number_format(($base * $altura) / 2, 2);
}

function calcularAreaRectangulo(float $base, float $altura)
{
    return number_format($base * $altura);
}

function calcularAreaTrapecio(float $baseMayor, float $baseMenor, float $altura)
{
    return number_format($altura * ($baseMayor + $baseMenor) / 2);
}