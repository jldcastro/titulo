<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ingresar Nuevo Cliente</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="nuevo_cliente"  method="post"  action="crear_cliente" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="nombre">Cliente</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="zona">Zona</label>
                        <input type="text" class="form-control" id="zona" name="zona">
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="region">Región</label>
                        <input type="text" class="form-control" id="region" name="region">
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="comuna">Comuna</label>
                        <input type="text" class="form-control" id="comuna" name="comuna">
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad">
                        <span class="fa fa-home form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="direccion_ubicacion">Dirección</label>
                        <input type="text" class="form-control" id="direccion_ubicacion" name="direccion_ubicacion">
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class=".btn btn-primary">Registrar</button>
                </div>

            </form>
        </div>
    </div>
</div>
