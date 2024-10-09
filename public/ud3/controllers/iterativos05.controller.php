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
        $words = explode(" ", $_POST["texto"]);
        $order = [];

        foreach($words as $word){
            if(isset($order[$word])){
                $order[$word] ++;
            }else{
                $order[$word] = 1;
            }
        }

        arsort($order);
        $data["words"] = $order;
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
include 'views/iterativos05.view.php';
include 'views/templates/footer.php';