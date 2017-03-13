<div class="row">
    <div class="col-md-6 col-md-offset-3">

            <div class="box-header with-border">
                <h3 class="box-title">Actualizar datos Unidad de peso</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="editar_unidad" method="post"  action="actualizar_unidad" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="id_unidad" value="<?= $unidad->id; ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="nombre">Unidad de peso</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $unidad->nombre; ?>">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <button type="submit" class=".btn btn-primary col-md-offset-5">Actualizar</button>
                </div>
            </form>
    </div>
</div>
