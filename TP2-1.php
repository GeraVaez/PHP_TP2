
<?php
/* 1. Leer una variable N de tipo entero e informar si el numero es positivo negativo o cero y también si es
par, impar o cero. El número cero no es ni positivo ni negativo ni par ni impar. */
$numRead = readline("Por favor ingresar el valor de N: --> ");

if($numRead == 0) 
    echo "El numero ingresado es CERO".PHP_EOL;
else {
    echo ($numRead>0) ? "El numero ingresado es Positivo".PHP_EOL : "El numero ingresado es Negativo".PHP_EOL; 
    echo ($numRead %2 == 0) ? "El numero ingresado es Par".PHP_EOL : "El numero ingresado es Impar".PHP_EOL;
}