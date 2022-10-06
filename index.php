<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="includes/index.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!-- Clase contenedor el cual va a tener nuestro reloj -->
    <div class="container p-3 my-3 border">
        <center>
        <?php
        // Definimos la zona horaria que en este caso es Mexico
        date_default_timezone_set('America/Mexico_city');
        // Con la etiqueta span y la clase border encerramos las horas, minutos y segundo en un cuadro
        echo '<span class="border">' .date("h:i:sa");'</span>';
        echo '<br>';
        // Definimos los dias y mes y el año encerrado en una etiqua span
        echo '<span class="border">' .date("d/m/Y");'</span>';
        ?>
        </center>

    </div>
</body>

</html>