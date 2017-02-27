<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ingresar Nueva Solicitud</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form  id="nueva_solicitud"  method="post"  action="crear_solicitud" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="fecha_solicitud">Fecha solicitud</label>
                        <input type="date" class="form-control" id="fecha_solicitud" name="fecha_solicitud">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="vendedor">Vendedor</label>
                        <input type="text" class="form-control" id="vendedor" name="vendedor">
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="cliente">Cliente</label>
                        <input type="text" class="form-control" id="cliente" name="cliente">
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="text">Comuna del servicio</label>
                        <input type="text" class="form-control" id="comuna_servicio" name="comuna_servicio">
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="lugar_servicio">Lugar del servicio</label>
                        <input type="text" class="form-control" id="lugar_servicio" name="lugar_servicio">
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <p class="text-red">Las fechas que se encuentren reservadas deben ser confirmadas 5 días hábiles antes del servicio, de lo contrario se anulará el servicio</p>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label>Seleccione formulario tipo equipo</label>
                        <select class="form-control" name="#" onChange="mostrar(this.value);">
                            <option value="bascula">Detalle Báscula Camión</option>
                            <option value="balanza">Detalle Balanzas</option>
                            <option value="masa">Masas</option>
                            <option value="pesometro">Detalle Pesómetros</option>
                        </select>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class=".btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-6 col-md-offset-3" id="bascula" style="display: none">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Detalle Báscula Camión</h3>
            </div><!-- /.box-header -->

        <div id="notificacion"></div>

        <form id="nueva_solicitud"  method="post"  action="crear_solicitud" class="form-horizontal formulario" role="form">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="box-body">
                <div class="form-group has-feedback col-md-12">
                    <label for="cantidad">Cantidad</label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad">
                    <span class="fa fa-plus form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback col-md-12">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca">
                    <span class="fa fa-barcode form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback col-md-12">
                    <label for="modelo">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo">
                    <span class="fa fa-barcode form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback col-md-12">
                    <label for="tipo">Tipo</label>
                    <input type="text" class="form-control" id="tipo" name="tipo">
                    <span class="fa fa-list form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback col-md-12">
                    <label for="punto">Puntos</label>
                    <input type="text" class="form-control" id="punto" name="punto">
                    <span class="fa fa-map-marker form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback col-md-12">
                    <label for="pesaje">Pesaje MOP</label>
                    <input type="text" class="form-control" id="pesaje" name="pesaje">
                    <span class="fa fa-star-o form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback col-md-12">
                    <label for="capacidad">Cap(Ton)</label>
                    <input type="text" class="form-control" id="capacidad" name="capacidad">
                    <span class="fa fa-star-o form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback col-md-12">
                    <label for="grad">Grad(Kg)</label>
                    <input type="text" class="form-control" id="grad" name="grad">
                    <span class="fa fa-star-o form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback col-md-12">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado">
                    <span class="fa fa-list form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback col-md-12">
                    <label for="fecha_umantencion">Fecha Última Mantención</label>
                    <input type="date" class="form-control" id="fecha_umantencion" name="fecha_umantencion">
                    <span class="fa fa-calendar form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback col-md-12">
                    <label for="fecha_umantencion">Fecha última Cal</label>
                    <input type="date" class="form-control" id="fecha_umantencion" name="fecha_umantencion">
                    <span class="fa fa-calendar form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback col-md-12">
                    <label for="valor_unitario">Valor Unitario</label>
                    <input type="text" class="form-control" id="valor_unitario" name="valor_unitario">
                    <span class="fa fa-money form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback col-md-12">
                    <label for="fecha_tentativa">Fecha Tentativa</label>
                    <input type="date" class="form-control" id="fecha_tentativa" name="fecha_tentativa">
                    <span class="fa fa-calendar form-control-feedback"></span>
                </div>
            </div>
        </form>
        </div>
    </div>

    <div class="col-md-6 col-md-offset-3" id="balanza" style="display: none">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Detalle Balanzas</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form id="nueva_solicitud"  method="post"  action="crear_solicitud" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="cantidad">Cantidad</label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad">
                        <span class="fa fa-plus form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="marca">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="tipo">Tipo</label>
                        <input type="text" class="form-control" id="tipo" name="tipo">
                        <span class="fa fa-list form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="punto">Puntos</label>
                        <input type="text" class="form-control" id="punto" name="punto">
                        <span class="fa fa-map-marker form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="capacidad">Cap(Ton)</label>
                        <input type="text" class="form-control" id="capacidad" name="capacidad">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="grad">Grad(Kg)</label>
                        <input type="text" class="form-control" id="grad" name="grad">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado">
                        <span class="fa fa-list form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="fecha_umantencion">Fecha Última Mantención</label>
                        <input type="date" class="form-control" id="fecha_umantencion" name="fecha_umantencion">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="fecha_umantencion">Fecha última Cal</label>
                        <input type="date" class="form-control" id="fecha_umantencion" name="fecha_umantencion">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="valor_unitario">Valor Unitario</label>
                        <input type="text" class="form-control" id="valor_unitario" name="valor_unitario">
                        <span class="fa fa-money form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="fecha_tentativa">Fecha Tentativa</label>
                        <input type="date" class="form-control" id="fecha_tentativa" name="fecha_tentativa">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-6 col-md-offset-3" id="masa" style="display: none">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Masas</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form id="nueva_solicitud"  method="post"  action="crear_solicitud" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="cantidad">Cantidad</label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad">
                        <span class="fa fa-plus form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="capacidad">Cap(Ton)</label>
                        <input type="text" class="form-control" id="capacidad" name="capacidad">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="material">Material</label>
                        <input type="text" class="form-control" id="material" name="material">
                        <span class="fa fa-list form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="clase_oiml">Clase OIML</label>
                        <input type="text" class="form-control" id="clase_oiml" name="clase_oiml">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado">
                        <span class="fa fa-list form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="clase_oiml">Requiere Ajuste</label>
                        <input type="text" class="form-control" id="clase_oiml" name="clase_oiml">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="clase_oiml">Requiere Mantención</label>
                        <input type="text" class="form-control" id="clase_oiml" name="clase_oiml">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>


                    <div class="form-group has-feedback col-md-12">
                        <label for="valor_unitario">Valor Unitario</label>
                        <input type="text" class="form-control" id="valor_unitario" name="valor_unitario">
                        <span class="fa fa-money form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="fecha_tentativa">Fecha Tentativa</label>
                        <input type="date" class="form-control" id="fecha_tentativa" name="fecha_tentativa">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-6 col-md-offset-3" id="pesometro" style="display: none">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Detalle Pesómetro</h3>
            </div><!-- /.box-header -->

            <div id="notificacion"></div>

            <form id="nueva_solicitud"  method="post"  action="crear_solicitud" class="form-horizontal formulario" role="form">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="box-body">
                    <div class="form-group has-feedback col-md-12">
                        <label for="cantidad">Cantidad</label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad">
                        <span class="fa fa-plus form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="marca">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo">
                        <span class="fa fa-barcode form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="capacidad">Capacidad(ton/hr)</label>
                        <input type="text" class="form-control" id="capacidad" name="capacidad">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="capacidad">Rango Uso</label>
                        <input type="text" class="form-control" id="capacidad" name="capacidad">
                        <span class="fa fa-star-o form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado">
                        <span class="fa fa-list form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="fecha_umantencion">Fecha Última Mantención</label>
                        <input type="date" class="form-control" id="fecha_umantencion" name="fecha_umantencion">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="fecha_umantencion">Fecha última Cal</label>
                        <input type="date" class="form-control" id="fecha_umantencion" name="fecha_umantencion">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>


                    <div class="form-group has-feedback col-md-12">
                        <label for="valor_unitario">Valor Unitario</label>
                        <input type="text" class="form-control" id="valor_unitario" name="valor_unitario">
                        <span class="fa fa-money form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback col-md-12">
                        <label for="fecha_tentativa">Fecha Tentativa</label>
                        <input type="date" class="form-control" id="fecha_tentativa" name="fecha_tentativa">
                        <span class="fa fa-calendar form-control-feedback"></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
