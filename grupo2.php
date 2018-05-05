<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP2</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
</head>
<body>
<header>
    <a href="index.php"><h3>Estructuras <span class="badge badge-secondary">secuenciales</span></h3></a>
    <nav class="nav nav-pills">
        <a class="nav-link" href="grupo1.php">GRUPO UNO</a>
        <a class="nav-link active" href="#">GRUPO DOS</a>
        <a class="nav-link" href="grupo3.php">GRUPO TRES</a>
    </nav>
</header>
<div class="col-md-10 offset-md-1 col-sm-12 flex main-container">
    <div class="card main-card">
        <div class="card-header">
            <h3>Ejercicio Uno</h3>
        </div>
        <div class="card-body">
            <form id="form-variable-trambolica" enctype="multipart/form-data" name="fileinfo" class="flex flex-column">
                <input type="hidden" value="variable-trambolica" name="calculo">
                <div class="form-group">
                    <label for="variable-trambolica-valor">Variable: </label>
                    <input type="number" name="variable-trambolica-valor" id="variable-trambolica-valor">
                </div>
                <input type="submit" name="trapecio-submit" value="Calcular variable" class="btn btn-primary">
            </form>
        </div>
        <div id="variable-trambolica-resultado" class="card-footer"></div>
    </div>
    <div class="card main-card">
        <div class="card-header">
            <h3>Ejercicio Dos</h3>
        </div>
        <div class="card-body">
            <form id="form-contador" enctype="multipart/form-data" name="fileinfo" class="flex flex-column">
                <input type="hidden" value="contador" name="calculo">
                <input type="submit" name="contador-submit" value="Contar..." class="btn btn-primary">
            </form>
        </div>
        <div class="card-footer" id="contador-resultado"></div>
    </div>
    <div class="card main-card">
        <div class="card-header">
            <h3>Ejercicio Tres</h3>
        </div>
        <div class="card-body">
            <form id="form-multiplicador" enctype="multipart/form-data" name="fileinfo" class="flex flex-column">
                <input type="hidden" value="multiplicador" name="calculo">
                <input type="submit" name="multiplicador-submit" value="Multiplicar..." class="btn btn-primary">
            </form>
        </div>
        <div class="card-footer" id="multiplicador-resultado"></div>
    </div>
</div>
<script src="js/grupo-dos.js"></script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: maximiliano
 * Date: 22/04/18
 * Time: 20:25
 */