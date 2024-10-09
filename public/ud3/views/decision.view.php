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
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej1']; ?></h6>
            </div>
            <div class="card-body">
                <?php
                    if($data["numero1"] % $data["numero2"] == 0){
                        echo '<p>Son divisibles</p>';
                    }else{
                        echo '<p>No son divisibles</p>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej2']; ?></h6>
            </div>
            <div class="card-body">
                <?php
                   echo bigger();
                ?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej3']; ?></h6>
            </div>
            <div class="card-body">
                <?php
                    echo parseSeconds();
                ?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej4']; ?></h6>
            </div>
            <div class="card-body">
                <?php
                    echo leapYear();
                ?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej6']; ?></h6>
            </div>
            <div class="card-body">
                <?php echo subtractSalary();
                ?>
            </div>
        </div>
    </div>
    <div class="col-7">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo_ej7']; ?></h6>
            </div>
            <div class="card-body">
                <?php echo bebida();
                ?>
            </div>
        </div>
    </div>
</div>

