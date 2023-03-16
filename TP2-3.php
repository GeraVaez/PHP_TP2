<?php
/* Ordenar en forma creciente tres valores diferentes A, B, C. */

$A = readline("Por favor ingrese el valor de A: ");
$B = readline("Por favor ingrese el valor de B: ");
$C = readline("Por favor ingrese el valor de C: ");

if ($A != $B && $C != $B) {
    if ( $A > $B && $C < $A){
        if ( $B < $C )
            echo "Los valores se organizan de la siguiente manera: $A,$B,$C";
        else
            echo "Los valores se organizan de la siguiente manera: $A,$C,$B";
    }else if ($B > $C && $A < $B){
        if($A>$C)
            echo "Los valores se organizan de la siguiente manera: $B,$A,$C";
        else
            echo "Los valores se organizan de la siguiente manera: $B,$C,$A";    
    }else if($B < $C && $A<$C){
        if($A>$B)
            echo "Los valores se organizan de la siguiente manera: $C,$A,$B";
        else
            echo "Los valores se organizan de la siguiente manera: $C,$B,$A";
    }
}else
    echo "Uno o mas numeros ingresados son identicos";