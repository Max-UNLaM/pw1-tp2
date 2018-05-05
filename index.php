<?php
$error = 0;
if (key_exists('error', $_GET)) {
    switch ($_GET['error']) {
        case 403:
            $error = 403;
            break;
    }
}
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
    <?php if ($error === 403): ?>
        <div class="jumbotron-fluid">
            <h2 class="display-4">Has intentado acceder a un sitio restringido</h2>
        </div>
    <?php endif ?>
    <div class="col-md-10 offset-md-1 col-sm-12 flex main-container main-menu-container">
        <div class="card main-menu-card">
            <div class="card-body main-menu-card-body justify-content-center">
                <a href="grupo1.php">
                    <button class="btn btn-primary">GRUPO UNO</button>
                </a>
            </div>
        </div>
        <div class="card main-menu-card">
            <div class="card-body main-menu-card-body justify-content-center">
                <a href="grupo2.php">
                    <button class="btn btn-primary">GRUPO DOS</button>
                </a>
            </div>
        </div>
        <div class="card main-menu-card">
            <div class="card-body main-menu-card-body justify-content-center">
                <a href="grupo3.php">
                    <button class="btn btn-primary">GRUPO TRES</button>
                </a>
            </div>
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