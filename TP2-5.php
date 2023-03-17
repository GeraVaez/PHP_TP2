Leer un valor de Día, Mes y Año de una fecha (ej.: 10-5-2003). Mostrar la fecha con el respectivo 
nombre del mes (ej.: 10-mayo-2003). Si el número leído para el mes no está entre 1 y 12 imprimir un 
mensaje de error. Comprobar que el día se encuentre entre 1 y 31 y el año sea mayor que 2000. 
<?php
$ctrl=false;
$dia= readline("Por favor ingrese el valor del día: ");
$mes= readline("Por favor ingrese el valor del mes: ");
$anio= readline("Por favor ingrese el valor del anio: ");

//Comprobamos que la fecha ingresada sea correcta
if ($dia<=31 && $dia>0 && $mes<=12 && $mes>0 && $anio >2000) {
    //ahora comprobamos que el año sea bisiesto o no
    if ($anio % 4==0 && $anio % 100!=0) 
			$bisciesto = true;
	elseif($anio % 400==0 && $anio % 100==0) 
				$bisciesto = true;
        else
            $bisciesto = false;
}else{
    echo"Fecha mal ingresada";
}
//si el año es bisiesto, comprobamos que el dia de Febrero esté bien ingresado
if(($bisciesto == true ) && (($dia<30 && $dia>0) && ($mes == 2))){
    $ctrl=true;
}
//si no es bisiesto, comprobamos que los diasingresados en febrero esten ok
if(($bisciesto == false ) && (($dia<29 && $dia>0) && ($mes == 2))){
    $ctrl=true;
}
//comprobamos que los meses de 30 dias esten correctamente ingresados
if((($dia <=30 && $dia>0) && ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11))){
    $ctrl= true;
}
//si el interruptor "ctr" es verdadero  la fecha ingresada es correcta

if($ctrl == true){
    echo "$dia - ";
    switch ($mes) {
        case 1:
            echo "Enero";
            break;
        case 2:
            echo "Febrero";
            break;
        case 3:
            echo "Marzo";
            break;
        case 4:
            echo "Abril";
            break;
        case 5:
            echo "Mayo";
            break;
        case 6:
            echo "Junio";
            break;
        case 7:
            echo "Julio";
            break;
        case 8:
            echo "Agosto";
            break;
        case 9:
            echo "Septiembre";
            break;
        case 10:
            echo "Octubre";
            break;
        case 11:
            echo "Noviembre";
            break;
        case 12:
            echo "Diciembre";
            break;
    }
echo " - $anio";

}