<?php
declare(strict_types=1);
$data = [];

if(!empty($_POST)){

    $errors = checkForm($_POST);

    if(count($errors) > 0){
        $data['input_numeros'] = filter_var($_POST['numeros'], FILTER_SANITIZE_SPECIAL_CHARS);
        $data['errors'] = $errors;
    }
    else{
        $aux = explode("|", $_POST["numeros"]);
        $array_numbers = [];
        foreach ($aux as $numbers){
            $array_numbers[]= explode(",", $numbers);
        }

        $numbers = [];
        foreach($array_numbers as $array){
            foreach ($array as $number){
                $numbers[]= $number;
            }
        }


        sort($numbers);
        $i=0;
        $j=0;
        foreach ($array_numbers as $array){
            while(){

            }
        }
        var_dump($numbers);
        $data["order"] = $numbers;



    }
}

function checkForm(array $data) : array
{
    $errors = [];
    if(empty($data["numeros"])){
        $errors["numeros"] = "Inserte un valor";
    }else{
        $aux = explode("|", $_POST["numeros"]);
        $array_numbers = [];
        foreach ($aux as $numbers){
            $array_numbers[]= explode(",", $numbers);
        }

        $error = false;
        $equal = true;
        $lastsize = 0;
        $i = 0;

        while($i < count($array_numbers) && !$error){
            $j = 0;
            if($lastsize == 0 || $lastsize == count($array_numbers[$i])){
                $lastsize = count($array_numbers[$i]);
            }else{
                $equal = false;
            }
            while($j < count($array_numbers[$i]) && !$error){
                if(!is_numeric($array_numbers[$i][$j])){
                    $error = true;
                }
                $j++;
            }
            $i++;
        }



        if($error){
            $errors['numeros'] = 'Sólo se permiten números, comas y barras';
        }
        if(!$equal){
            $errors["numeros"] = "las arrays tienen que ser del mismo tamaño";
        }
    }
    return $errors;

}

include 'views/templates/header.php';
include 'views/iterativos03.view.php';
include 'views/templates/footer.php';