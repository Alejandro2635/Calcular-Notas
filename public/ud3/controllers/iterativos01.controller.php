<?php
declare(strict_types=1);
$data = [];

if(!empty($_POST)){
    $errors = checkForm($_POST);

    if(!empty($errors)){
        $data["input_numeros"] = filter_var($_POST["numeros"],FILTER_SANITIZE_SPECIAL_CHARS);
        $data["errors"] = $errors;
    }else{
        $aux = explode(",", $_POST["numeros"]);
        $data["max"] = max($aux);
        $data["min"] = min($aux);
    }
}

function checkForm(array $data) : array
{
    $errors = [];
    if(empty($data["numeros"])){
        $errors["numeros"] = "Inserte algún valor en este campo";
    }else{
        $aux = explode(",", $_POST["numeros"]);
        $i = 0;
        $error = false;
        while($i<count($aux) && !$error){
            if(!is_numeric($aux[$i])){
                $error = true;
            }
            $i++;
        }
        if($error){
            $errors["numeros"] = "Solo se permiten numeros y comas";
        }
    }
    return $errors;
}

/*
 * Llamamos a las vistas
 */
var_dump($data);
var_dump($_POST);
include 'views/templates/header.php';
include 'views/iterativos01.view.php';
include 'views/templates/footer.php';