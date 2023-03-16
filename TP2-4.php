<?php  
/* Escribir un algoritmo que con solo ingresar los lados de un triángulo rectángulo le dice al usuario si 
es isoceles, escaleno o equilatero.
Propiedad existencial de un triangulo LA suma de dos lados debe ser mayor a la longitud del tercero
(L1+L2)>L3 || (L1+L3) > L2 || (L3+L2) > L1
*/
$L1 = readline("Por favor ingrese las longitud de L1: ");
$L2 = readline("Por favor ingrese las longitud de L2: ");
$L3 = readline("Por favor ingrese las longitud de L3: ");

if (($L1 + $L2) > $L3 || ($L1 + $L3) > $L2 || ($L2 + $L3) > $L1){
    if($L1==$L2 && $L2==$L3)
        echo "El triangulo es EQUILATERO". "\n";
    else if($L1==$L3 || $L2==$L3 || $L1==$L2)
        echo "El triangulo es ISÓSCELES". "\n";
    else
        echo "El triangulo es ESCALENO". "\n";
}
else 
    echo "Los valores ingresados no corresponden a un triangulo";
