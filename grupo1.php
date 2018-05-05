<?php

$variable = "Variable loca";

?>

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
        <a href="index.php"><h3>Introducción al <span class="badge badge-secondary">PHP</span></h3></a>
        <nav class="nav nav-pills">
            <a class="nav-link active" href="#">GRUPO UNO</a>
            <a class="nav-link" href="grupo2.php">GRUPO DOS</a>
            <a class="nav-link" href="grupo3.php">GRUPO TRES</a>
        </nav>
    </header>
    <div class="col-md-10 offset-md-1 col-sm-12 flex main-container">
        <div class="card main-card">
            <div class="card-header">
                <h3>Datos de la variable</h3>
            </div>
            <div class="card-body">
                <ul>
                    <li>
                        <strong>Tipo variable: </strong> <?php echo(gettype($variable)) ?>
                    </li>
                    <li>
                        <strong>Valor variable: </strong> <?php echo($variable) ?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card main-card">
            <div class="card-header">
                <h3>Área del triángulo</h3>
            </div>
            <div class="card-body">
                <form id="form-area-triangulo" enctype="multipart/form-data" name="fileinfo" class="flex flex-column">
                    <input type="hidden" value="area-triangulo" name="calculo">
                    <div class="form-group">
                        <label for="triangulo-base-valor">Base: </label>
                        <input type="number" name="triangulo-base-valor" id="triangulo-base-valor">
                    </div>
                    <div class="form-group">
                        <label for="triangulo-altura-valor">Altura: </label>
                        <input type="number" name="triangulo-altura-valor" id="triangulo-altura-valor">
                    </div>
                    <input type="submit" name="triangulo-submit" value="Calcular triangulo" class="btn btn-primary">
                </form>
            </div>
            <div id="triangulo-resultado" class="card-footer"></div>
        </div>
        <div class="card main-card">
            <div class="card-header">
                <h3>Área del rectángulo</h3>
            </div>
            <div class="card-body">
                <form id="form-area-rectangulo" enctype="multipart/form-data" name="fileinfo" class="flex flex-column">
                    <input type="hidden" value="area-rectangulo" name="calculo">
                    <div class="form-group">
                        <label for="rectangulo-base-valor">Base: </label>
                        <input type="number" name="rectangulo-base-valor" id="rectangulo-base-valor">
                    </div>
                    <div class="form-group">
                        <label for="rectangulo-altura-valor">Altura: </label>
                        <input type="number" name="rectangulo-altura-valor" id="rectangulo-altura-valor">
                    </div>
                    <input type="submit" name="rectangulo-submit" value="Calcular rectangulo" class="btn btn-primary">
                </form>
            </div>
            <div id="rectangulo-resultado" class="card-footer"></div>
        </div>
        <div class="card main-card">
            <div class="card-header">
                <h3>Área del trapecio</h3>
            </div>
            <div class="card-body">
                <form id="form-area-trapecio" enctype="multipart/form-data" name="fileinfo" class="flex flex-column">
                    <input type="hidden" value="area-trapecio" name="calculo">
                    <div class="form-group">
                        <label for="trapecio-base-valor">Base Mayor: </label>
                        <input type="number" name="trapecio-base-mayor-valor" id="trapecio-base-mayor-valor">
                    </div>
                    <div class="form-group">
                        <label for="trapecio-base-valor">Base Menor: </label>
                        <input type="number" name="trapecio-base-menor-valor" id="trapecio-base-menor-valor">
                    </div>
                    <div class="form-group">
                        <label for="trapecio-altura-valor">Altura: </label>
                        <input type="number" name="trapecio-altura-valor" id="trapecio-altura-valor">
                    </div>
                    <input type="submit" name="trapecio-submit" value="Calcular trapecio" class="btn btn-primary">
                </form>
            </div>
            <div id="trapecio-resultado" class="card-footer"></div>
        </div>
    </div>
    <script src="js/grupo-uno.js"></script>
    </body>
    </html>
<?php
/**
 * Created by PhpStorm.
 * User: maximiliano
 * Date: 22/04/18
 * Time: 20:25
 */