<?php

$data["carton"] = [];
$data["bolas"] = [];

function getNumbers(): array
{
    $numbers = [];
    for ($i = 0; $i < 15; $i++) {
        $numbers[] = newNumber($numbers);
    }

    return $numbers;
}

function isRepeat(array $numbers, int $number)
{
    foreach($numbers as $num){
        if($num == $number){
           return true;
        }
    }

    return false;
}

function newNumber(array $numbers) : int{
    $repeat = true;

    while($repeat){
        $newNumber = rand(1,25);
        if(!isRepeat($numbers, $newNumber)){
            $repeat = false;
        }
    }

    return $newNumber;
}

if(isset($_GET["start"])) {
    if($_GET["start"]) {
        if (isset($_GET["carton"])) {

            $data["carton"] = $_GET["carton"];
            $data["bolas"] = $_GET["bolas"];

            $new_number = newNumber($data["bolas"]);
            $data["bolas"][] = $new_number;

            $i = 0;
            $found = false;

            while ($i < count($data["carton"]) && !$found) {
                if ($data["carton"][$i] == $new_number) {
                    unset($data["carton"][$i]);
                    $data["carton"] = array_values($data["carton"]);
                    $found = true;
                }
                $i++;
            }


        } else {
            $data["carton"] = getNumbers();
            $data["bolas"] = [];
            $data["bolas"][] = newNumber($data["bolas"]);

            $i = 0;
            $found = false;

            while ($i < count($data["carton"]) && !$found) {
                if ($data["carton"][$i] == $data["bolas"][0]) {
                    unset($data["carton"][$i]);
                    $data["carton"] = array_values($data["carton"]);
                    $found = true;
                }
                $i++;
            }
        }
    }
}

$stop = [
    "start" => false
];

$data["url_stop"] = "./?sec=iterativos07&" . http_build_query($stop);

if(isset($_GET["start"])) {
    $datos = [
        "carton" => $data["carton"],
        "bolas" => $data["bolas"],
        "start" => true
    ];
}else{
    $datos = [
        "start" => true
    ];
}

$data["url"] = "./?sec=iterativos07&" . http_build_query($datos);

include 'views/templates/header.php';
include 'views/iterativos07.view.php';
include 'views/templates/footer.php';





