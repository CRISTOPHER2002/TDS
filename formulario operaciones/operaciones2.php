<?php

if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    if ($_POST['operacion'] == 0) {
        echo "el resultado de la suma es: ";
        echo ($_POST['numero1']) + ($_POST['numero2']) . '<br>';
    } else if ($_POST['operacion'] == 1) {
        echo "el resultado de la resta es: ";
        echo ($_POST['numero1']) - ($_POST['numero2']) . '<br>';
    } else if ($_POST['operacion'] == 2) {
        echo "el resultado de la multiplicacion es: ";
        echo ($_POST['numero1']) * ($_POST['numero2']) . '<br>';
    } else if ($_POST['operacion'] == 3) {
        echo "el resultado de la division es: ";
        echo ($_POST['numero1']) / ($_POST['numero2']) . '<br>';
    }
}
