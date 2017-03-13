<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box-header with-border">
                <h3 class="box-title">Ingresar Nueva Condición</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="nueva_condicion"  method="post"  action="crear_condicion" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="nombre">Condición</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                        <span class="fa fa-circle form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <button type="submit" class=".btn btn-primary col-md-offset-5">Registrar</button>
                </div>
            </form>
        </div>
    </div>

