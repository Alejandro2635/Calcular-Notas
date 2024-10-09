<?php
declare(strict_types=1);
$data = [];

if(!empty($_POST)){

    $errors = checkForm($_POST);

    if(count($errors) > 0){
        $data["input_numero"] = filter_var($_POST['numero'], FILTER_SANITIZE_SPECIAL_CHARS);
        $data["errors"] = $errors;
    }
    else{

        $primos = [];

        for($i=2; $i <= $_POST['numero'] ;$i++){
            $primos[$i] = true;
        }

        for($i = 2  ; $i <= $_POST["numero"]; $i++) {
           if($primos[$i]){
                for($j = $i**2; $j <= $_POST["numero"]; $j += $i){
                    $primos[$j] = false;
                }
           }
        }
        $data["primos"] = $primos;


    }


}

function checkForm(array $data) : array
{
    $errors = [];
    if(empty($data["numero"])){
        $errors["numero"] = "Inserte algun tipo de texto";
    }

    $numeric = true;

    for($i = 0; $i<strlen($data["numero"]); $i++){
        if(!is_numeric($data["numero"][$i])){
            $numeric = false;
        }
    }

    if(!$numeric){
        $errors["numero"] = "Tiene que ser solo un numero";
    }



    return $errors;

}

include 'views/templates/header.php';
include 'views/iterativos06.view.php';
include 'views/templates/footer.php';