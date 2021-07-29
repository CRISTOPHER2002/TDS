<?php

if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    echo "el resultado de la suma es: ";
    echo ($_POST['numero1']) + ($_POST['numero2']) . '<br>';
} else if (isset($_POST['numero3']) && isset($_POST['numero4'])) {
    echo "el resultado de la resta es: ";
    echo ($_POST['numero3']) - ($_POST['numero4']) . '<br>';
} else if (isset($_POST['numero5']) && isset($_POST['numero6'])) {
    echo "el resultado de la multiplicacion es: ";
    echo ($_POST['numero5']) * ($_POST['numero6']) . '<br>';
} else if (isset($_POST['numero7']) && isset($_POST['numero8'])) {
    echo "el resultado de la division es: ";
    echo ($_POST['numero7']) / ($_POST['numero8']) . '<br>';
}
