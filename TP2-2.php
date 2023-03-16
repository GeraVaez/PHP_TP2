<?php   
/* Una institución de educación, con carreras tanto diurnas como vespertinas, considera lo siguiente en
su proceso académico: si un estudiante de carrera vespertina tiene una nota de presentación mayor
o igual a 6, se exime, y si no alcanza el 6 pero tiene una nota de presentación igual o mayor a 3.5,
rinde examen. Si el estudiante es de carrera diurna y si su nota de presentación es mayor o igual a
3.5, rinde examen (no hay posibilidad de eximirse). En ambos regímenes, si la nota de presentación
es menor que 3.5, reprueba. Hacer la tabla de decisión y escriba el algoritmo correspondiente. 

Condiciones    >= 6      >=3.5     <3.5
vespertina     EXIMIDO   RINDE     REPROBADO
diurna         RRINDE    RINDE     REPROBADO
*/

$notaPresentacion = readline("Por favor ingrese la nota presentación del alumnno: ");
$carreraVespertina = readline("¿El estudiante cursa la modalidad 'VESPERTINA'? Y/N: ");
if ($carreraVespertina == 'Y' || $carreraVespertina == 'y') {
    if ($notaPresentacion >= 6) 
        echo "El alumno queda EXIMIDO del examen final." . "\n";
    else if ($notaPresentacion >= 3.5){
        echo "El estudiante RINDE el examen final." . "\n";
    }else {
        echo "El estudiante esta REPROBADO." . "\n";
    }
}else if ($notaPresentacion >= 3.5)
    echo "El estudiante RINDE el examen final." . "\n";
else 
    echo "El estudiante esta REPROBADO." . "\n";
    

