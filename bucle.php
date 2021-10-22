<?php
//Bucle//
for($counter=1; $counter <= 30; $counter++) {
echo $counter;
}

for($infinito=1; $infinito <= 30; $infinito++) {
    echo "infinito";
    }

 //Funciones://
function suma ($num1,$num2){
$resultado = $num1 + $num2;
echo "El resultado de la suma es $resultado\n";
}
suma(25,7);

function resta ($num1,$num2){
    $resultado = $num1 - $num2;
    echo "El resultado de la resta es $resultado\n";
    }
    resta(25,7);

    $var1 = ' Hola que tal estas? ';
    $var2 = ' me llamo Stefan, tu que tal estas?';
    $concatenar = $var1 . ' - ' . 'Humano' . $var2;
    echo $concatenar;
?>