<?php
/**
 * Created by PhpStorm.
 * User: maximiliano
 * Date: 1/05/18
 * Time: 22:29
 */

if ($_POST && key_exists('calculo', $_POST)) {
    switch ($_POST['calculo']) {
        case "variable-trambolica":
            echo variableTrambolica((int)$_POST["variable-trambolica-valor"]);
            break;
        case "contador":
            echo cienAlCero();
            break;
        case "multiplicador":
            echo multiplicador();
            break;
    }
} else {
    header('Location: ../index.php?error=403');
}

function variableTrambolica(int $variable)
{
    $pivot = $variable ** $variable;
    $i = 1;
    while ($variable < $pivot) {
        $variable = $variable * $i;
        $i++;
    }
    return $variable;
}

function cienAlCero()
{
    $respuesta = "";
    $calculo = [];
    $pivot = 0;
    while ($pivot <= 100) {
        array_push($calculo, $pivot);
        $pivot += 2;
    }
    rsort($calculo);
    foreach ($calculo as $elemento) {
        $respuesta .= " " . (string)$elemento;
    }
    return $respuesta . ".";
}

function multiplicador()
{
    $resultado = [];
    for ($i = 1; $i < 21; $i++) {
        $aux = $i;
        for ($j = 25; $j < 31; $j++) {
            $aux = $aux * $j;
        }
        array_push($resultado, $aux);
    }
    return imprimirMultiplicador($resultado);
}

function imprimirMultiplicador(array $resultado) {
    $texto = "";
    foreach ($resultado as $valor) {
        $texto = $texto . " " . (string)$valor;
    }
    return $texto . ".";
}