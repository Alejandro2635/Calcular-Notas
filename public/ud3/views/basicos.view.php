<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['titulo']; ?></h1>

</div>

<!-- Content Row -->

<div class="row">

    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej1']; ?> </h6>
            </div>
            <div class="card-body">
                El cuadrado del numero <?php echo $data["ej1_x"];?> es <?php echo $data["ej1_y"]?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej2']; ?> </h6>
            </div>
            <div class="card-body">
                El precio por hora trabajada es  <?php echo $data["ej2_x"] ?> , se han trabajado <?php echo $data["ej2_y"] ?> horas por lo que se pagarán <?php echo $data["ej2_z"] ?> €
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej3']; ?> </h6>
            </div>
            <div class="card-body">
               El Area y el Perimetro de un triangolo es: <br/> Area: <?php echo $data["area"] ?>  Perimetro:<?php echo $data["perimetro"]?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej4']; ?> </h6>
            </div>
            <div class="card-body">
                Soy un alumno de DAW mi nombre es <?php echo $data["nombre_alumno"] ?> mi edad es <?php echo $data["edad_alumno"] ?> y mi nota media es <?php echo $data["media_alumno"] ?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej5']; ?> </h6>
            </div>
            <div class="card-body">
               El precio del hotel por noche  en temporada baja es <?php echo $data["precio_noche_tb"] ?> y su precio por pasar aquí <?php echo $data["numero_noches_tb"]?> dias  es <?php echo $data["precio_tb"]?>euros<br/>
                El precio del hotel por noche  en temporada baja es <?php echo $data["precio_noche_ta"] ?> y su precio por pasar aquí <?php echo $data["numero_noches_ta"]?> dias  es <?php echo $data["precio_ta"]?>euros
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej6']; ?> </h6>
            </div>
            <div class="card-body">
                Area del circulo: <?php echo $data["area_circulo"] ?> <br/>
                Perimetro del circulo: <?php echo $data["perimetro_circulo"] ?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej7']; ?> </h6>
            </div>
            <div class="card-body">
                <?php echo $data["km-s"] ?> Km/s son  <?php echo $data["m-s"] ?> m/s
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej8']; ?> </h6>
            </div>
            <div class="card-body">
                El numero <?php echo $data["numero"] ?> esta formado por centenas : <?php echo $data["centenas"]?> decenas: <?php echo $data["decenas"] ?> unidades: <?php echo $data["unidades"] ?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej9']; ?> </h6>
            </div>
            <div class="card-body">
                La cadena de texto <?php echo $data["cadena"] ?> está formada por <?php echo $data["caracteres"] ?> caracteres y <?php echo $data["palabras"] ?> palabras".
            </div>
        </div>
    </div>
</div>
