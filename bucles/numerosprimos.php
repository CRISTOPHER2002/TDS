<?php
$minimo=1;
$maximo=60;
echo "<h1>Tabla de numeros primos del 1 al 60</h1>";
   for($i=$minimo;$i<=$maximo;$i++){
       if(getprimo($i)){
           echo "el numero: ". $i ." es primo". "<br/>";
       }else{
           echo "el numero: ". $i ." no es primo". "<br/>";
       }
   }

function getprimo($numero) {
    $contador=0;
     for($i=1;$i<=$numero;$i++){
     if ($numero%$i==0){
         $contador = $contador + 1;
     }
}

if ($contador==2) {
    return true;
}else{
    return false;
}
}
