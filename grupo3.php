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
    <a href="index.php"><h3>Estructuras <span class="badge badge-secondary">selectivas</span></h3></a>
    <nav class="nav nav-pills">
        <a class="nav-link" href="grupo1.php">GRUPO UNO</a>
        <a class="nav-link" href="grupo2.php">GRUPO DOS</a>
        <a class="nav-link active" href="#">GRUPO TRES</a>
    </nav>
</header>
<div class="col-md-10 offset-md-1 col-sm-12 flex main-container">
    <div class="card main-card">
        <div class="card-header">
            <h3>Ejercicio Uno</h3>
        </div>
        <div class="card-body">
            <form id="form-ecuacion" enctype="multipart/form-data" name="fileinfo" class="flex flex-column">
                <input type="hidden" value="ecuacion" name="calculo">
                <div class="form-group">
                    <label for="ecuacion-x-valor">X: </label>
                    <input type="number" name="ecuacion-x-valor" id="ecuacion-x-valor">
                </div>
                <div class="form-group">
                    <label for="ecuacion-y-valor">B: </label>
                    <input type="number" name="ecuacion-y-valor" id="ecuacion-y-valor">
                </div>
                <input type="submit" name="ecuacion-submit" value="Calcular ecuación" class="btn btn-primary">
            </form>
        </div>
        <div id="ecuacion-resultado" class="card-footer"></div>
    </div>
    <div class="card main-card">
        <div class="card-header">
            <h3>Ejercicio Dos</h3>
        </div>
        <div class="card-body">
            <form id="form-biblioteca" enctype="multipart/form-data" name="fileinfo" class="flex flex-column">
                <input type="hidden" value="biblioteca" name="calculo">
                <div class="form-group">
                    <label for="biblioteca-autor-valor">Autor: </label>
                    <select name="biblioteca-autor-valor" id="biblioteca-autor-valor">
                        <option value="asimov">Asimov, Isaac</option>
                        <option value="cortazar">Cortazar, Julio</option>
                        <option value="dostoievski">Dostoievski, Fiódor</option>
                        <option value="joyce">Joyce, James</option>
                        <option value="gabbo">Márquez, Gabriel García</option>
                        <option value="platon">Platón</option>
                        <option value="tolkien">Tolkien, John Ronald Reuen</option>
                    </select>
                </div>
                <input type="submit" name="biblioteca-submit" value="Traer Libro" class="btn btn-primary">
            </form>
        </div>
        <div id="biblioteca-resultado" class="card-footer"></div>
    </div>
    <div class="card main-card">
        <div class="card-header">
            <h3>Ejercicio Tres</h3>
        </div>
        <div class="card-body">
            <form id="form-mayor" enctype="multipart/form-data" name="fileinfo" class="flex flex-column">
                <input type="hidden" value="mayor" name="calculo">
                <div class="form-group">
                    <label for="mayor-valor-1">Número 1: </label>
                    <input type="number" name="mayor-valor-1" required id="mayor-valor-3">
                </div>
                <div class="form-group">
                    <label for="mayor-valor-2">Número 2: </label>
                    <input type="number" name="mayor-valor-2" required id="mayor-valor-3">
                </div>
                <div class="form-group">
                    <label for="mayor-valor-3">Número 3: </label>
                    <input type="number" name="mayor-valor-3" required id="mayor-valor-3">
                </div>
                <input type="submit" name="mayor-submit" value="Traer Mayor" class="btn btn-primary">
            </form>
        </div>
        <div id="mayor-resultado" class="card-footer"></div>
    </div>
    <div class="card main-card">
        <div class="card-header">
            <h3>Ejercicio Cuatro</h3>
        </div>
        <div class="card-body">
            <form id="form-menor" enctype="multipart/form-data" name="fileinfo" class="flex flex-column">
                <input type="hidden" value="menor" name="calculo">
                <div class="form-group">
                    <label for="menor-valor-1">Número 1: </label>
                    <input type="number" name="menor-valor-1" required id="menor-valor-3">
                </div>
                <div class="form-group">
                    <label for="menor-valor-2">Número 2: </label>
                    <input type="number" name="menor-valor-2" required id="menor-valor-3">
                </div>
                <div class="form-group">
                    <label for="menor-valor-3">Número 3: </label>
                    <input type="number" name="menor-valor-3" required id="menor-valor-3">
                </div>
                <input type="submit" name="menor-submit" value="Traer Menor" class="btn btn-primary">
            </form>
        </div>
        <div id="menor-resultado" class="card-footer"></div>
    </div>
    <div class="card main-card">
        <div class="card-header">
            <h3>Ejercicio Dos</h3>
        </div>
        <div class="card-body">
            <form id="form-medio" enctype="multipart/form-data" name="fileinfo" class="flex flex-column">
                <input type="hidden" value="medio" name="calculo">
                <div class="form-group">
                    <label for="medio-valor-1">Número 1: </label>
                    <input type="number" name="medio-valor-1" required id="medio-valor-1">
                </div>
                <div class="form-group">
                    <label for="medio-valor-2">Número 2: </label>
                    <input type="number" name="medio-valor-2" required id="medio-valor-2">
                </div>
                <div class="form-group">
                    <label for="medio-valor-3">Número 3: </label>
                    <input type="number" name="medio-valor-3" required id="medio-valor-3">
                </div>
                <input type="submit" name="medio-submit" value="Traer Medio" class="btn btn-primary">
            </form>
        </div>
        <div id="medio-resultado" class="card-footer"></div>
    </div>
</div>
<script src="js/grupo-tres.js"></script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: maximiliano
 * Date: 22/04/18
 * Time: 20:25
 */