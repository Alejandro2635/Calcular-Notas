<?php
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */
//General
$data['titulo'] = "Ejercicios Básicos";

//Ejercicio1
$data["div_titulo_ej1"] = "Ejercicio 1";
//ej1
$data["ej1_x"] = 20;
$data["ej1_y"] = $data["ej1_x"]**2;

//Ejercicio2

$data["div_titulo_ej2"] = "Ejercicio 2";
//ej1
$data["ej2_x"]= 35;
$data["ej2_y"] = 37.5;
$data["ej2_z"] = $data["ej2_x"] * $data["ej2_y"];

//Ejercicio3
$data["div_titulo_ej3"] = "Ejercicio 3";
//ej1
$data["base"] = 4;
$data["altura"] = 3;

$data["area"] = ($data["base"] * $data["altura"])/2;
$data["perimetro"] = $data["altura"] + $data["altura"] + $data["base"];

//Ejercicio 4

$data["div_titulo_ej4"] = "Ejercicio 4";

$data["nombre_alumno"] = "Iago";
$data["edad_alumno"] = 20;
$data["media_alumno"] = 7;

//Ejercicio5
$data["div_titulo_ej5"] = "Ejercicio 5";

$data["precio_noche_tb"] = 20;
$data["precio_noche_ta"] = 50;
$data["numero_noches_tb"]= 5;
$data["numero_noches_ta"] = 3;

$data["precio_tb"] = $data["precio_noche_tb"] * $data["numero_noches_tb"];
$data["precio_ta"] = $data["precio_noche_ta"] * $data["numero_noches_ta"];

//Ejercicio6
$data["div_titulo_ej6"] = "Ejercicio 6";

$radio = 5;

$data["area_circulo"] = round(3.14 * $radio ** 2, 2);
$data["perimetro_circulo"] = $radio * 2;

//Ejercicio7
$data["div_titulo_ej7"] = "Ejercicio 7";

$data["km-s"] = 10.5;

$data["m-s"] = $data["km-s"]*1000;

//Ejercicio8
$data["div_titulo_ej8"] = "Ejercicio 8";

$data["numero"]=321;
$data["centenas"] = intval($data["numero"]/100);
$data["decenas"] = intval(($data["numero"]%100)/10);
$data["unidades"] = $data["numero"]%10;

//Ejercicio9

$data["div_titulo_ej9"] = "Ejercicio 9";
$data["cadena"] = "Hola soy una cadena";
$data["caracteres"]=strlen($data["cadena"]);
$data["palabras"] = str_word_count($data["cadena"]);


























/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/basicos.view.php';
include 'views/templates/footer.php';