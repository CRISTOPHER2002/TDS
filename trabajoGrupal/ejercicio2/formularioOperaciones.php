<!-- Código HTML, creación del formulario -->
<html>
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h1>Formulario para una calculadora</h1>
            <form action="formularioOperaciones.php" method="post" enctype="multipart/form-data">
                Ingrese el primer número:
                <input type="number" name="numero1" placeholder="Número 1" required autofocus><br>
                <br>
                Ingrese el segundo número:
                <input type="number" name="numero2" placeholder="Número 2" required><br>
                <br>
                <input type="submit" name="suma" value="Suma"> &nbsp &nbsp
                <input type="submit" name="resta" value="Resta"> &nbsp &nbsp
                <input type="submit" name="multiplicacion" value="Multiplicación"> &nbsp &nbsp
                <input type="submit" name="division" value="División">
            </form>
        </div>
    </body>
</html>


<?php

/* Código PHP, presentación del resultado */
echo "<br>";
if (isset($_POST['numero1']) && isset($_POST['numero2'])) {

    if (isset($_POST['suma'])) {
        echo "el resultado de la suma es: ";
        echo ($_POST['numero1']) + ($_POST['numero2']) . '<br>';
    }
    if (isset($_POST['resta'])) {
        echo "el resultado de la resta es: ";
        echo ($_POST['numero1']) - ($_POST['numero2']) . '<br>';
    }
    if (isset($_POST['multiplicacion'])) {
        echo "el resultado de la multiplicacion es: ";
        echo ($_POST['numero1']) * ($_POST['numero2']) . '<br>';
    }
    if (isset($_POST['division'])) {
        echo "el resultado de la division es: ";
        echo ($_POST['numero1']) / ($_POST['numero2']) . '<br>';
    }
}