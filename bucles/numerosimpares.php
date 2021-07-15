<?php
echo "<h1>Tabla que muestre los numeros impares del 1 al 60</h1>";
for ($i = 1; $i <= 60; $i++) {
    if ($i % 2 == 0) {
        echo "el numero: " . $i . " es par" . "<br/>";
    } else {
        echo "el numero: " . $i . " es impar" . "<br/>";
    }
}