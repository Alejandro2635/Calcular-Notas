<?php
declare(strict_types=1);
$data = [];

if(!empty($_POST)){
    $errors = checkForm($_POST);

    if(!empty($errors)){
        $data["input_text"] = filter_var($_POST['texto'], FILTER_SANITIZE_SPECIAL_CHARS);
        $data["errors"] = $errors;
    }
    else{
        $characters = [];

        if(preg_match_all("/[a-z]/", strtolower($_POST["texto"]), $letras)){
            foreach($letras[0] as $letra){
                if(isset($characters[$letra])){
                    $characters[$letra] ++;
                }else{
                    $characters[$letra] = 1;
                }
            }
        }
        arsort($characters);
        $data["characters"] = $characters;
    }


}

function checkForm(array $data) : array
{
    $errors = [];
    if(empty($data["texto"])){
        $errors["texto"] = "Inserte algun tipo de texto";
    }

    return $errors;

}

include 'views/templates/header.php';
include 'views/iterativos04.view.php';
include 'views/templates/footer.php';