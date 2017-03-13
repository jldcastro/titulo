<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Actualizar Datos Cliente</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="editar_cliente"  method="post"  action="actualizar_cliente" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="id_cliente" value="<?= $cliente->id; ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="nombre">Cliente</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $cliente->nombre; ?>">
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="zona">Zona</label>
                        <input type="text" class="form-control" id="zona" name="zona" value="<?= $cliente->zona; ?>">
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="region">Región</label>
                        <input type="text" class="form-control" id="region" name="region" value="<?= $cliente->region; ?>">
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="comuna">Comuna</label>
                        <input type="text" class="form-control" id="comuna" name="comuna" value="<?= $cliente->comuna; ?>">
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?= $cliente->ciudad; ?>">
                        <span class="fa fa-home form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="direccion_ubicacion">Dirección</label>
                        <input type="text" class="form-control" id="direccion_ubicacion" name="direccion_ubicacion" value="<?= $cliente->direccion_ubicacion; ?>">
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class=".btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
