<?php

include 'includes/class.triangulo';
$triangulo = new triangulo();
echo $triangulo->get_formulario();

if (isset($_POST['guardar'])){
    echo "El resultado del area es igual a <strong>".$triangulo->area($_POST['base'],$_POST['altura'])
            . "</strong> el resultado del perimetro es igual a <strong>".$triangulo->perimetro($_POST['base'],$_POST['altura'])."</strong>";
}