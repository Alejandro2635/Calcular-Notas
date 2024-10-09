<?php

if(isset($_POST["json"])){

    $errors = checkForm($_POST);
    if(count($errors) > 0){
        $data["input_json"] = filter_var($_POST['json'], FILTER_SANITIZE_SPECIAL_CHARS);
        $data["errors"] = $errors;
    }else{
        $info = json_decode($_POST['json'], true);

        $resultado = [];
        $alumnos_suspendidos = [];
        $alumnos_array = [];
        $alumnos_no_promocionados = [];
        foreach($info as $asignatura => $alumnos){
            $notas = [];
            $suspensos = 0;
            $aprobados = 0;
            $nota_max = 0;
            $alumno_max = "";
            $nota_min = 10;
            $alumno_min = "";

            foreach ($alumnos as $nombre_alumno => $nota){
                $notas[] = $nota;
                if($nota < 5){
                    $suspensos++;
                    if(!in_array($nombre_alumno, $alumnos_suspendidos)){
                        $alumnos_suspendidos[] = $nombre_alumno;
                    }
                    if(!isset($alumnos_no_promocionados[$nombre_alumno])){
                        $alumnos_no_promocionados[$nombre_alumno] = 1;
                    }else{
                        $alumnos_no_promocionados[$nombre_alumno] ++;
                    }

                }else{
                    $aprobados++;
                }

                if(!in_array($nombre_alumno, $alumnos_array)){
                    $alumnos_array[]= $nombre_alumno;
                }

                if($nota >= $nota_max){
                    $nota_max = $nota;
                    $alumno_max = $nombre_alumno;
                }

                if($nota <= $nota_min){
                    $nota_min = $nota;
                    $alumno_min = $nombre_alumno;
                }
            }

            $resultado[$asignatura]["media"] = round(array_sum($notas)/count($notas),2);
            $resultado[$asignatura]["suspensos"] = $suspensos;
            $resultado[$asignatura]["aprobados"] = $aprobados;
            $resultado[$asignatura]["max"]["alumno"] = $alumno_max;
            $resultado[$asignatura]["max"]["nota"] = $nota_max;
            $resultado[$asignatura]["min"]["alumno"] = $alumno_min;
            $resultado[$asignatura]["min"]["nota"] = $nota_min;

        }

        $data["aprobados"] = array_diff($alumnos_array, $alumnos_suspendidos);
        $data["resultado"] = $resultado;
        $data["suspensos"] = $alumnos_suspendidos;
        $data["no_promocionados"] = $alumnos_no_promocionados;


    }
}


function checkForm($data) : array
{
    $errors = [];

    if(is_null(json_decode($data['json']))){
        $errors["json"] = "Debes insertar un json";
    }else{
        $erroresFomato = [];
        $info = json_decode($_POST['json'], true);

        foreach ($info as $asignatura => $alumnos){
            if(!is_string($asignatura) || mb_strlen($asignatura) < 1){
                $erroresFomato[] = $asignatura." no es un String";
            }
            if(!is_array($alumnos)){
                $erroresFomato[] = $alumnos." no es un Array";
            }
            else{
                foreach ($alumnos as $nombre_alumno => $nota){
                    if(!is_string($nombre_alumno) || mb_strlen($nombre_alumno) < 1){
                        $erroresFomato[] = $nombre_alumno." no es un String";
                    }
                    if(!is_numeric($nota) ){
                        $erroresFomato[] = $nota." no es un Numerico";
                    }
                }
            }
        }
        if(count($erroresFomato) > 0){
            $errors["json"] = implode(", ", $erroresFomato);
        }

    }

    if(empty($data["json"])){
        $errors["json"] = "Formulario empty";
    }

    return $errors;
}
include 'views/templates/header.php';
include 'views/iterativos08.view.php';
include 'views/templates/footer.php';





