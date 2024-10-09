<?php

if(isset($_POST["json"])){

    $errors = checkForm($_POST);
    $data["input_json"] = filter_var($_POST['json'], FILTER_SANITIZE_SPECIAL_CHARS);

    if(count($errors) > 0){

        $data["errors"] = $errors;
    }else{

        $info = json_decode($_POST['json'], true);
        $_resultado = [];

        foreach ($info as $asignatura => $alumns){
            $notas = [];
            $suspensos = [];
            $alumnos = [];
            $alumn_max = "";
            $nota_max = -1;
            $alumn_min = "";
            $nota_min = 11;
            $notas_alumnos = [];
            foreach ($alumns as $nombre_alumno => $notas){
                if(!in_array($nombre_alumno, $alumnos)){
                    $alumnos[] = $nombre_alumno;
                }
                $notas_alumno = [];
                foreach ($notas as $nota) {
                    $notas_alumno[] = $nota;

                    if($nota < 5 && !in_array($nombre_alumno, $suspensos)){
                        $suspensos[] = $nombre_alumno;
                    }
                    if($nota > $nota_max){
                        $nota_max = $nota;
                        $alumn_max = $nombre_alumno;
                    }
                    if($nota < $nota_min){
                        $nota_min = $nota;
                        $alumn_min = $nombre_alumno;
                    }
                }

                $notas_alumnos[] = array_sum($notas_alumno)/count($notas_alumno);

            }

            $_resultado[$asignatura]["media"] = round(array_sum($notas_alumnos)/count($notas_alumnos),2);
            $_resultado[$asignatura]["suspensos"] = count($suspensos);
            $_resultado[$asignatura]["aprobados"] = count(array_diff($alumnos, $suspensos));
            $_resultado[$asignatura]["max"]["nota"] = $nota_max;
            $_resultado[$asignatura]["max"]["alumno"] = $alumn_max;
            $_resultado[$asignatura]["min"]["nota"] = $nota_min;
            $_resultado[$asignatura]["min"]["alumno"] = $alumn_min;
        }
        $data["resultado"] = $_resultado;
    }

}

function checkForm($data) : array
{
    $errors = [];
    $info = json_decode($_POST['json'], true);

    if (empty($data["json"])) {
        $errors["json"][] = "El formulario está vacio";
    } else{
        if(is_null($info)){
            $errors["json"][] = "El json está mal formado";
        }
    }

    return $errors;
}
include 'views/templates/header.php';
include 'views/calculos_de_nota.view.php';
include 'views/templates/footer.php';