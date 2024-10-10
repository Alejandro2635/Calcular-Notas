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
        </div>

        <?php if(isset($data["resultado"])){?>
            <div class="card shadow mb-4">
                <div class="col-12 " style="margin: 20px">
                    <div>
                        <table  border="1px" class="table table-striped table-bordered dataTable" style="width: 97%">
                            <thead>
                            <tr>
                                <th>Asignatura</th>
                                <th>Media</th>
                                <th>Suspensos</th>
                                <th>Aprobados</th>
                                <th>Máxima Nota</th>
                                <th>Alumno con Máxima Nota</th>
                                <th>Mínima Nota</th>
                                <th>Alumno con Mínima Nota</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($data["resultado"] as $asignatura => $info) {
                                echo "<tr>";

                                echo "<td>".$asignatura."</td>";
                                echo "<td>".$info["media"] ?? " "."</td>";
                                echo "<td>".$info["suspensos"] ?? " "."</td>";
                                echo "<td>".$info["aprobados"] ?? " "."</td>";
                                echo "<td>".$info["max"]["nota"] ?? " "."</td>";
                                echo "<td>".$info["max"]["alumno"] ?? " "."</td>";
                                echo "<td>".$info["min"]["nota"] ?? " "."</td>";
                                echo "<td>".$info["min"]["alumno"] ?? " "."</td>";

                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="alert alert-success"> Aprueban todo:

                        <?php

                        foreach ($data["alumnos_status"] as $nombre_alumno => $suspensos){
                            echo "<ul>";
                            if($suspensos == 00){
                                echo "<li>{$nombre_alumno}</li>";
                            }
                            echo "</ul>";
                        }
                        ?>
                    </div>
                </div>


                <div class="col-12 col-lg-6">
                    <div class="alert alert-warning"> Suspendido almenos una:

                        <?php
                        foreach ($data["alumnos_status"] as $nombre_alumno => $suspensos){
                            echo "<ul>";
                            if($suspensos > 0){
                                echo "<li>{$nombre_alumno}</li>";
                            }
                            echo "</ul>";
                        }
                        ?>
                    </div>
                </div>


                <div class="col-12 col-lg-6">
                    <div class="alert alert-info"> Promocionados:
                        <?php
                        foreach ($data["alumnos_status"] as $nombre_alumno => $suspensos){
                            echo "<ul>";
                            if($suspensos == 1){
                                echo "<li>{$nombre_alumno}</li>";
                            }
                            echo "</ul>";
                        }
                        ?>
                    </div>
                </div>


                <div class="col-12 col-lg-6">
                    <div class="alert alert-danger"> No promocionados:

                        <?php
                        foreach ($data["alumnos_status"] as $nombre_alumno => $suspensos){
                            echo "<ul>";
                            if($suspensos > 1){
                                echo "<li>{$nombre_alumno}</li>";
                            }
                            echo "</ul>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3 col-12">
                        <label for="textarea">Inserte un JSON</label>
                        <textarea class="form-control" id="json" name="json"
                                  rows="3"><?php echo $data['input_json'] ?? ''; ?></textarea>
                        <p class="text-danger small"><?php echo $data['errors']['json'] ?? ''; ?></p>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Enviar" name="enviar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>


