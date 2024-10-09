<?php
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */
//general
$data['titulo'] = "Estructuras de decision";

//Ejercicio1
$data["div_titulo_ej1"] = "Ejercicio 1";

$data["numero1"] = 10;
$data["numero2"] = 3;

//Ejercicio2
$data["div_titulo_ej2"] = "Ejercicio 2";


function bigger()
{
    $data["numero1"] = 2;
    $data["numero2"] = 10;
    $data["numero3"] = 5;

    if ($data["numero1"] > $data["numero2"] && $data["numero1"] > $data["numero3"]) {
        $data["numero1"] = "<strong>".$data["numero1"]."</strong>";
    } else if ($data["numero2"] > $data["numero1"] && $data["numero2"] > $data["numero3"]) {
        $data["numero2"] = "<strong>".$data["numero2"]."</strong>";
    } else {
        $data["numero3"] = "<strong>".$data["numero3"]."</strong>";
    }

    return $data["numero1"].", ".$data["numero2"].", ".$data["numero3"];
}

//Ejercico3
$data["div_titulo_ej3"] = "Ejercicio 3";

function parseSeconds()
{
    $data["segundos"] = 1000000;
    $data["horas"] = floor($data["segundos"]/3600);
    $data["minutos"] = floor(($data["horas"] * 3600)/60);
    $data["dias"] = floor($data["horas"]/24);

    return "dias: ".$data["dias"].", horas: ".$data["horas"].", minutos: ".$data["minutos"].", segundos: ".$data["segundos"];
}

//Ejercicio4
$data["div_titulo_ej4"] = "Ejercicio 4";

function leapYear()
{
    $data["year"] = 2005;

    if( $data["year"] % 4 == 0 && $data["year"] % 100 != 0 || $data["year"] % 400 == 0 ){
        return "El año es bisiesto";
    }else{
        return "el año no es bisiesto";
    }
}

//Ejercicio 5
$data["div_titulo_ej5"] = "Ejercicio 5";

function subtractSalary()
{
$data["salario"] = 2001;
$data["congratulations"] ="Felicidades, tienes un salario por encima de la media";

if($data["salario"]<=1000){
    $data["salario"]= $data["salario"] - ($data["salario"]*0.10);
}else if($data["salario"]>1000 && $data["salario"]<=2000){
    $data["salario"]=$data["salario"]-($data["salario"] *0.05);
}else if($data["salario"]>2000){
    $data["salario"]=$data["salario"]-($data["salario"] *0.03);
    return $data["salario"].", ".$data["congratulations"];
}
return $data["salario"];    $data["salario"]= $data["salario"] - ($data["salario"]*0.10);

}

//Ejercicio 7
$data["div_titulo_ej7"] = "Ejercicio 7";

function bebida()
{
    $data["bebida"] = "Marcilla";
    $data["tipo"]="";
    switch($data["bebida"]){

        case 'Marcilla':
            $data["tipo"] = "cafe";
            break;
        case 'Mondariz':
        case 'Sousa':
        case'Cabreiroa':
            $data["tipo"]="agua";
            break;
        case 'Coca-Cola':
        case'Kas':
        case'Pepsi':
            $data["tipo"] = "refresco";
            break;
    }
    return $data["tipo"];
}



/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/decision.view.php';
include 'views/templates/footer.php';
include 'views/templates/footer.php';