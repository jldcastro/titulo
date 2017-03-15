<div class="row">
    <div class="col-md-6 col-md-offset-3">

            <div class="box-header with-border">
                <h3 class="box-title">Actualizar datos Modelo</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="editar_modelo" method="post"  action="actualizar_modelo" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="id_modelo" value="<?= $modelo->id; ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="nombre">Modelo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $modelo->nombre; ?>">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback col-md-12">
                        <label for="id_marca">Seleccione Marca</label>
                        <select id="id_marca" name="id_marca" class="form-control">
                            <?php foreach($marcas as $marca){ ?>
                                <option value="<?= $marca->id; ?>"><?= $marca->nombre; ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group has-feedback">
                    <button type="submit" class=".btn btn-primary col-md-offset-5">Actualizar</button>
                </div>
            </form>
    </div>
</div>
