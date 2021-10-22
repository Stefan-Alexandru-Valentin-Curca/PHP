<?php

#scope
$a = 3;

function foo(){
    global $a;
    $a += 2;
    echo "valor de la funcion" .$a;
}
 
echo "<br>";
foo();
echo "variable de la funcion" .$a;



?>