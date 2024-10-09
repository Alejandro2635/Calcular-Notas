<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Iterativas 06</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ordenar array</h6>
            </div>
            <!-- Content Row -->
            <?php if(isset($_GET["start"])){ ?>
            <?php if (count($data["carton"]) > 0) { ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success"> Numeros restantes :
                            <br/>
                            <?php
                            foreach ($data["carton"] as $numero){
                                echo $numero." ";
                            }
                            ?>
                            <br/>
                            Bolas :
                            <br/>
                            <?php
                            foreach ($data["bolas"] as $numero){
                                echo $numero." ";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }else{
            ?>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success">
                        BINGO !!
                    </div>
                </div>
            </div>
            <?php
            }
            }
            ?>
            <div class="card-body">
                <form action="<?php echo $data["url"];?>" method="post">
                    <div class="mb-3">
                        <input type="submit" value="EMPEZAR / SACAR BOLA" name="enviar" class="btn btn-primary" style="width: 300px">
                    </div>
                </form>
                <form action="<?php echo $data["url_stop"];?>" method="post">
                    <div class="mb-3">
                        <input type="submit" value="ACABAR LA PARTIDA" name="enviar" class="btn btn-primary" style="width: 300px">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

