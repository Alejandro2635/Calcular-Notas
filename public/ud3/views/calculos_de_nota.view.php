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
            <?php if(isset($data["resultado"])){?>
                <div class="row">
                    <div class="col-12" style="margin: 20px">
                        <div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

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
</div>