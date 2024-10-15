<?php

if (isset($_POST["json"])) {

    $errors = checkForm($_POST);
    $data["input_json"] = filter_var($_POST['json'], FILTER_SANITIZE_SPECIAL_CHARS);

    if (count($errors) > 0) {

        $data["errors"] = $errors;
    } else {

        $info = json_decode($_POST['json'], true);
        $_resultado = [];

        $alumnos_status = [];

        foreach ($info as $asignatura => $alumnos) {
            $notas = [];
            $suspensos = 0;
            $alumn_max = "";
            $nota_max = -1;
            $alumn_min = "";
            $nota_min = 11;
            $notas_alumnos = [];
            foreach ($alumnos as $nombre_alumno => $notas) {

                $notas_alumno = [];
                foreach ($notas as $nota) {
                    $notas_alumno[] = $nota;


                    if ($nota > $nota_max) {
                        $nota_max = $nota;
                        $alumn_max = $nombre_alumno;
                    }
                    if ($nota < $nota_min) {
                        $nota_min = $nota;
                        $alumn_min = $nombre_alumno;
                    }
                }

                if (!isset($alumnos_status[$nombre_alumno])) {
                    $alumnos_status[$nombre_alumno] = 0;
                }

                if (array_sum($notas_alumno) / count($notas_alumno) < 5) {
                    $alumnos_status[$nombre_alumno]++;
                }

                $notas_alumnos[] = array_sum($notas_alumno) / count($notas_alumno);

                if (round(array_sum($notas_alumno) / count($notas_alumno), 2) < 5) {
                    $suspensos++;
                }
            }



            $_resultado[$asignatura]["media"] = round(array_sum($notas_alumnos) / count($notas_alumnos), 2);
            $_resultado[$asignatura]["suspensos"] = $suspensos;
            $_resultado[$asignatura]["aprobados"] = count($alumnos)-$suspensos;
            $_resultado[$asignatura]["max"]["nota"] = $nota_max;
            $_resultado[$asignatura]["max"]["alumno"] = $alumn_max;
            $_resultado[$asignatura]["min"]["nota"] = $nota_min;
            $_resultado[$asignatura]["min"]["alumno"] = $alumn_min;
        }
        $data["resultado"] = $_resultado;
        $data["alumnos_status"] = $alumnos_status;

    }

}

function checkForm($data): array
{
    $errors = [];
    $info = json_decode($_POST['json'], true);

    if (empty($data["json"])) {
        $errors["json"][] = "El formulario está vacio";
    } else {
        if(is_null(json_decode($data['json']))){
            $errors["json"] = "Debes insertar un json";
        }else{
            foreach ($info as $asignatura => $alumnos) {
                if(!is_string($asignatura)){
                    $errors["json"][] = "{$asignatura} no es un String";
                }else{
                    foreach ($alumnos as $nombre_alumno => $notas) {
                        if(!is_string($nombre_alumno)){
                            $errors["json"][] = "{$nombre_alumno} de la asignatura {$asignatura} no es un String";
                        }else {
                            foreach ($notas as $nota) {
                                if(!is_numeric($nota)){
                                    $errors["json"][] = "La nota {$nota} del alumno {$nombre_alumno} de la asignatura {$asignatura} no es un numerico ";
                                }else{
                                    if($nota < 0 || $nota > 10){
                                        $errors["json"][] = "La nota {$nota} del alumno {$nombre_alumno} de la asignatura {$asignatura} tiene que ser un numero entre 0-10";
                                    }
                                }
                            }
                        }
                    }
                }

            }
        }
    }

    return $errors;
}

include 'views/templates/header.php';
include 'views/calculos_de_nota.view.php';
include 'views/templates/footer.php';