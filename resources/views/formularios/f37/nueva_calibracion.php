<div class="row">
    <div class="col-md-12">
        <div class="box-header with-border">
            <h3 class="box-title">Ingresar Nueva Solicitud</h3>
        </div>

        <div id="notificacion"></div>

    </div>
</div>
<div class="row">
<form  id="nueva_calibracion"  method="post"  action="crear_calibracion" class="form-horizontal formulario" role="form">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    <div class="box-body">
        <div class="col-md-6">
            <!-- form start -->
            <div class="box-body">
                <div class="form-group">
                    <label for="numero" class="col-sm-4 control-label">N°</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="id_numero" name="id_numero" value="<?= $numero->id ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Fecha solicitud</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="fecha_solicitud" name="fecha_solicitud" value="<?= $fecha_solicitud; ?>"  disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Vendedor</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="id_usuario" name="id_usuario" value="<?= $nombre_completo ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Cliente</label>
                    <div class="col-sm-6">
                        <select id="id_cliente" name="id_cliente" class="form-control">

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Comuna del servicio</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="comuna_servicio" name="comuna_servicio">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Lugar del servicio</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="lugar_servicio" name="lugar_servicio">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        <button type="submit" class=".btn btn-primary">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <!-- form start -->
            <div class="box-body">
                <p style="background-color: #ffff00;">Completar solo si está vendido</p>
                <div class="form-group">
                    <label for="numero" class="col-sm-4 control-label" style="background-color: #2CC0DD">Nombre Contacto</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label" style="background-color: #2CC0DD">Fono Contacto</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label" style="background-color: #2CC0DD">Correo contacto</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label" style="background-color: #2CC0DD"> Dirección Cliente</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label" style="background-color: #2CC0DD">Dirección Envío Certificado</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label" style="background-color: #2CC0DD">Comuna/Ciudad Envío</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label" style="background-color: #2CC0DD">Direcc. de despacho</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label" style="background-color: #2CC0DD">N° Nota Venta</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label" style="background-color: #2CC0DD">N° Orden Compra</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</div>

<p class="text-red">LAS FECHAS QUE SE ENCUENTREN RESERVADAS DEBEN SER CONFIRMADAS 5 DIAS HABILES ANTES DEL SERVICIO, DE LO CONTRARIO SE ANULARÁ EL SERVICIO</p>

<label>Seleccione tipo equipo</label>
<br>
<input type="checkbox" name="check" id="check" value="1" class="checkbox-inline" onchange="javascript:showContent()" />Báscula
<input type="checkbox" name="check" id="check2" value="2" class="checkbox-inline" onchange="javascript:showContent2()" />Balanza
<input type="checkbox" name="check" id="check3" value="3" class="checkbox-inline" onchange="javascript:showContent3()" />Masa
<input type="checkbox" name="check" id="check4" value="4" class="checkbox-inline" onchange="javascript:showContent4()" />Pesómetro

<div id="content" style="display: none; overflow:auto; overflow-y:hidden;">
    <table class="table users table-hover">
        <thead>
        <tr id="miTablaPersonalizada">
            <th style="background-color: #F8DFF5">Ítem</th>
            <th style="background-color: #F8DFF5">Cantidad</th>
            <th style="background-color: #F8DFF5"> Marca</th>
            <th style="background-color: #F8DFF5">Modelo</th>
            <th style="background-color: #F8DFF5">Tipo</th>
            <th style="background-color: #F8DFF5">Ubicación</th>
            <th style="background-color: #F8DFF5">Puntos</th>
            <th style="background-color: #F8DFF5">Pesaje(MOP)</th>
            <th style="background-color: #F8DFF5">Capacidad</th>
            <th style="background-color: #F8DFF5">Unidad Capacidad</th>
            <th style="background-color: #F8DFF5">Graduación</th>
            <th style="background-color: #F8DFF5">Unidad Graduación</th>
            <th style="background-color: #F8DFF5">Condición</th>
            <th style="background-color: #F8DFF5">Fecha Última Mantención</th>
            <th style="background-color: #F8DFF5">Fecha Última Cal.</th>
            <th style="background-color: #F8DFF5">Valor Referencial</th>
            <th style="background-color: #F8DFF5">Valor Unitario</th>
            <th style="background-color: #F8DFF5">Fecha Tentativa</th>
            <th style="background-color: #F8DFF5">Horario Tentativo</th>
            <th style="background-color: #F8DFF5">Observación</th>
        </tr>
        <tr>
            <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="1" disabled></td>
            <td><input type="text" class="form-control" id="cantidad" name="cantidad" style="width : 100px;"></td>
            <td><select id="id_marca" name="id_marca" style="width : 200px;" class="form-control">
                    <option disabled selected>Seleccione Marca</option>
                    <?php foreach($marcas as $marca){ ?>
                        <option value="<?= $marca->id; ?>"><?= $marca->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Modelo</option>
                    <?php foreach($modelos as $modelo){ ?>
                        <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_tipo" name="id_tipo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Tipo</option>
                    <?php foreach($tipos as $tipo){ ?>
                        <option value="<?= $tipo->id; ?>"><?= $tipo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="puntos" name="puntos" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="pesaje" name="pesaje" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="capacidad" name="capacidad" style="width : 100px;"></td>
            <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="graduacion" name="graduacion" style="width : 100px;"></td>
            <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
                    <?php foreach($condiciones as $condicion){ ?>
                        <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
            <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
            <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="valu" name="valu" style="width : 100px;" disabled></td>
            <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
            <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
            <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
        </tr>
        <tr>
            <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="2" disabled></td>
            <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
            <td><select id="id_marca" name="id_marca" style="width : 200px;" class="form-control">
                    <option disabled selected>Seleccione Marca</option>
                    <?php foreach($marcas as $marca){ ?>
                        <option value="<?= $marca->id; ?>"><?= $marca->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Modelo</option>
                    <?php foreach($modelos as $modelo){ ?>
                        <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_tipo" name="id_tipo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Tipo</option>
                    <?php foreach($tipos as $tipo){ ?>
                        <option value="<?= $tipo->id; ?>"><?= $tipo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
            <td><input type="text" class="form-control" id="pesaje" name="pesaje"></td>
            <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
            <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
            <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
                    <?php foreach($condiciones as $condicion){ ?>
                        <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
            <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
            <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
            <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
            <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
            <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
        </tr>
        <tr>
            <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="3" disabled></td>
            <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
            <td><select id="id_marca" name="id_marca" style="width : 200px;" class="form-control">
                    <option disabled selected>Seleccione Marca</option>
                    <?php foreach($marcas as $marca){ ?>
                        <option value="<?= $marca->id; ?>"><?= $marca->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Modelo</option>
                    <?php foreach($modelos as $modelo){ ?>
                        <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_tipo" name="id_tipo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Tipo</option>
                    <?php foreach($tipos as $tipo){ ?>
                        <option value="<?= $tipo->id; ?>"><?= $tipo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
            <td><input type="text" class="form-control" id="pesaje" name="pesaje"></td>
            <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
            <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
            <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
                    <?php foreach($condiciones as $condicion){ ?>
                        <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
            <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
            <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
            <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
            <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
            <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
        </tr>
        <tr>
            <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="4" disabled></td>
            <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
            <td><select id="id_marca" name="id_marca" style="width : 200px;" class="form-control">
                    <option disabled selected>Seleccione Marca</option>
                    <?php foreach($marcas as $marca){ ?>
                        <option value="<?= $marca->id; ?>"><?= $marca->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Modelo</option>
                    <?php foreach($modelos as $modelo){ ?>
                        <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_tipo" name="id_tipo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Tipo</option>
                    <?php foreach($tipos as $tipo){ ?>
                        <option value="<?= $tipo->id; ?>"><?= $tipo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
            <td><input type="text" class="form-control" id="pesaje" name="pesaje"></td>
            <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
            <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
            <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
                    <?php foreach($condiciones as $condicion){ ?>
                        <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
            <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
            <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
            <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
            <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
            <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
        </tr>
        <tr>
            <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="5" disabled></td>
            <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
            <td><select id="id_marca" name="id_marca" style="width : 200px;" class="form-control">
                    <option disabled selected>Seleccione Marca</option>
                    <?php foreach($marcas as $marca){ ?>
                        <option value="<?= $marca->id; ?>"><?= $marca->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Modelo</option>
                    <?php foreach($modelos as $modelo){ ?>
                        <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_tipo" name="id_tipo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Tipo</option>
                    <?php foreach($tipos as $tipo){ ?>
                        <option value="<?= $tipo->id; ?>"><?= $tipo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
            <td><input type="text" class="form-control" id="pesaje" name="pesaje"></td>
            <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
            <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
            <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
                    <?php foreach($condiciones as $condicion){ ?>
                        <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
            <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
            <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
            <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
            <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
            <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
        </tr>
        <tr>
            <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="6" disabled></td>
            <td><input type="text" class="form-control" id="cantidad" name="cantidad" style="width : 100px;"></td>
            <td><select id="id_marca" name="id_marca" style="width : 200px;" class="form-control">
                    <option disabled selected>Seleccione Marca</option>
                    <?php foreach($marcas as $marca){ ?>
                        <option value="<?= $marca->id; ?>"><?= $marca->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Modelo</option>
                    <?php foreach($modelos as $modelo){ ?>
                        <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_tipo" name="id_tipo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Tipo</option>
                    <?php foreach($tipos as $tipo){ ?>
                        <option value="<?= $tipo->id; ?>"><?= $tipo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="puntos" name="puntos" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="pesaje" name="pesaje" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="capacidad" name="capacidad" style="width : 100px;"></td>
            <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="graduacion" name="graduacion" style="width : 100px;"></td>
            <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
                    <?php foreach($condiciones as $condicion){ ?>
                        <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
            <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
            <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="valu" name="valu" style="width : 100px;" disabled></td>
            <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
            <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
            <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
        </tr>
        <tr>
            <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="7" disabled></td>
            <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
            <td><select id="id_marca" name="id_marca" style="width : 200px;" class="form-control">
                    <option disabled selected>Seleccione Marca</option>
                    <?php foreach($marcas as $marca){ ?>
                        <option value="<?= $marca->id; ?>"><?= $marca->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Modelo</option>
                    <?php foreach($modelos as $modelo){ ?>
                        <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_tipo" name="id_tipo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Tipo</option>
                    <?php foreach($tipos as $tipo){ ?>
                        <option value="<?= $tipo->id; ?>"><?= $tipo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
            <td><input type="text" class="form-control" id="pesaje" name="pesaje"></td>
            <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
            <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
            <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
                    <?php foreach($condiciones as $condicion){ ?>
                        <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
            <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
            <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
            <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
            <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
            <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
        </tr>
        <tr>
            <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="8" disabled></td>
            <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
            <td><select id="id_marca" name="id_marca" style="width : 200px;" class="form-control">
                    <option disabled selected>Seleccione Marca</option>
                    <?php foreach($marcas as $marca){ ?>
                        <option value="<?= $marca->id; ?>"><?= $marca->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Modelo</option>
                    <?php foreach($modelos as $modelo){ ?>
                        <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_tipo" name="id_tipo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Tipo</option>
                    <?php foreach($tipos as $tipo){ ?>
                        <option value="<?= $tipo->id; ?>"><?= $tipo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
            <td><input type="text" class="form-control" id="pesaje" name="pesaje"></td>
            <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
            <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
            <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
                    <?php foreach($condiciones as $condicion){ ?>
                        <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
            <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
            <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
            <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
            <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
            <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
        </tr>
        <tr>
            <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="9" disabled></td>
            <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
            <td><select id="id_marca" name="id_marca" style="width : 200px;" class="form-control">
                    <option disabled selected>Seleccione Marca</option>
                    <?php foreach($marcas as $marca){ ?>
                        <option value="<?= $marca->id; ?>"><?= $marca->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Modelo</option>
                    <?php foreach($modelos as $modelo){ ?>
                        <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_tipo" name="id_tipo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Tipo</option>
                    <?php foreach($tipos as $tipo){ ?>
                        <option value="<?= $tipo->id; ?>"><?= $tipo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
            <td><input type="text" class="form-control" id="pesaje" name="pesaje"></td>
            <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
            <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
            <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
                    <?php foreach($condiciones as $condicion){ ?>
                        <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
            <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
            <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
            <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
            <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
            <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
        </tr>
        <tr>
            <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="10" disabled></td>
            <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
            <td><select id="id_marca" name="id_marca" style="width : 200px;" class="form-control">
                    <option disabled selected>Seleccione Marca</option>
                    <?php foreach($marcas as $marca){ ?>
                        <option value="<?= $marca->id; ?>"><?= $marca->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Modelo</option>
                    <?php foreach($modelos as $modelo){ ?>
                        <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_tipo" name="id_tipo" style="width : 230px;" class="form-control">
                    <option disabled selected>Seleccione Tipo</option>
                    <?php foreach($tipos as $tipo){ ?>
                        <option value="<?= $tipo->id; ?>"><?= $tipo->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
            <td><input type="text" class="form-control" id="pesaje" name="pesaje"></td>
            <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
            <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
            <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
                    <?php foreach($unidades as $unidad){ ?>
                        <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
                    <?php foreach($condiciones as $condicion){ ?>
                        <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
                    <?php } ?>
                </select></td>
            <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
            <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
            <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
            <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
            <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
            <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
            <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
        </tr>
        <tr>
            <td style="width : 50px;"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><p style="text-align: center">TOTAL</p></td>
            <td><input type="text" class="form-control" id="total" name="total" disabled></td>
            <td></td>
            <td></td>
        </tr>
        </thead>
    </table>
</div>

<div id="content2" style="display: none; overflow:auto; overflow-y:hidden;">
<table class="table users table-hover">
<thead>
<tr id="miTablaPersonalizada">
    <th style="background-color: #F8DFF5">Ítem</th>
    <th style="background-color: #F8DFF5">Cantidad</th>
    <th style="background-color: #F8DFF5">Marca</th>
    <th style="background-color: #F8DFF5">Modelo</th>
    <th style="background-color: #F8DFF5">Tipo</th>
    <th style="background-color: #F8DFF5">Ubicación</th>
    <th style="background-color: #F8DFF5">Puntos</th>
    <th style="background-color: #F8DFF5">Capacidad</th>
    <th style="background-color: #F8DFF5">Unidad Capacidad</th>
    <th style="background-color: #F8DFF5">Graduación</th>
    <th style="background-color: #F8DFF5">Unidad Graduación</th>
    <th style="background-color: #F8DFF5">Condición</th>
    <th style="background-color: #F8DFF5">Fecha Última Mantención</th>
    <th style="background-color: #F8DFF5">Fecha Última Cal.</th>
    <th style="background-color: #F8DFF5">Valor Referencial</th>
    <th style="background-color: #F8DFF5">Valor Unitario</th>
    <th style="background-color: #F8DFF5">Fecha Tentativa</th>
    <th style="background-color: #F8DFF5">Horario Tentativo</th>
    <th style="background-color: #F8DFF5">Observación</th>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="1" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad" style="width : 100px;"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="tipo" name="tipo" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="puntos" name="puntos" style="width : 100px;"style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad" style="width : 100px;"></td>
    <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="graduacion" name="graduacion" style="width : 100px;"></td>
    <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
            <?php foreach($condiciones as $condicion){ ?>
                <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" style="width : 100px;" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="2" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="tipo" name="tipo"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad" style="width : 100px;"></td>
    <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
    <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
            <?php foreach($condiciones as $condicion){ ?>
                <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="3" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="tipo" name="tipo"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
    <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
            <?php foreach($condiciones as $condicion){ ?>
                <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="4" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="tipo" name="tipo"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
    <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
            <?php foreach($condiciones as $condicion){ ?>
                <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="5" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="tipo" name="tipo"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
    <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
            <?php foreach($condiciones as $condicion){ ?>
                <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="6" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad" style="width : 100px;"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="tipo" name="tipo" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="puntos" name="puntos" style="width : 100px;"style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="graduacion" name="graduacion" style="width : 100px;"></td>
    <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
            <?php foreach($condiciones as $condicion){ ?>
                <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" style="width : 100px;" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="7" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="tipo" name="tipo"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
    <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
            <?php foreach($condiciones as $condicion){ ?>
                <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="8" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="tipo" name="tipo"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
    <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
            <?php foreach($condiciones as $condicion){ ?>
                <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="9" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="tipo" name="tipo"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
    <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
            <?php foreach($condiciones as $condicion){ ?>
                <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="10" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="tipo" name="tipo"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="puntos" name="puntos"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidadc" name="id_unidadc" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="graduacion" name="graduacion"></td>
    <td><select id="id_unidadg" name="id_unidadg" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_condicion" name="id_condicion" style="width : 200px;" class="form-control">
            <?php foreach($condiciones as $condicion){ ?>
                <option value="<?= $condicion->id; ?>"><?= $condicion->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td style="width : 50px;"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p style="text-align: center">TOTAL</p></td>
    <td><input type="text" class="form-control" id="total" name="total" disabled></td>
    <td></td>
    <td></td>
</tr>
</thead>
</table>

</div>

<div id="content3" style="display: none; overflow:auto; overflow-y:hidden;">
<table class="table users table-hover">
<thead>
<tr id="miTablaPersonalizada">
    <th style="background-color: #F8DFF5">Ítem</th>
    <th style="background-color: #F8DFF5">Cantidad</th>
    <th style="background-color: #F8DFF5">Marca</th>
    <th style="background-color: #F8DFF5">Modelo</th>
    <th style="background-color: #F8DFF5">Capacidad</th>
    <th style="background-color: #F8DFF5">Unidad Capacidad</th>
    <th style="background-color: #F8DFF5">Rango Uso</th>
    <th style="background-color: #F8DFF5">Condición</th>
    <th style="background-color: #F8DFF5">Fecha Última Mantención</th>
    <th style="background-color: #F8DFF5">Fecha Última Cal.</th>
    <th style="background-color: #F8DFF5">Valor Referencial</th>
    <th style="background-color: #F8DFF5">Valor Unitario</th>
    <th style="background-color: #F8DFF5">Fecha Tentativa</th>
    <th style="background-color: #F8DFF5">Observación</th>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="1" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad" style="width : 100px;"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="r_uso" name="r_uso" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="estado" name="estado" style="width : 100px;"></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" style="width : 100px;" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="2" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="r_uso" name="r_uso"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="3" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="r_uso" name="r_uso"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="4" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="r_uso" name="r_uso"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="5" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="r_uso" name="r_uso"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="6" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad" style="width : 100px;"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="r_uso" name="r_uso" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="estado" name="estado" style="width : 100px;"></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" style="width : 100px;" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="7" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="r_uso" name="r_uso"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="8" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="r_uso" name="r_uso"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="9" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="r_uso" name="r_uso"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="10" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><select id="marca" name="marca" style="width : 200px;" class="form-control">

        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="r_uso" name="r_uso"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="date" class="form-control" id="fu_mantencion" name="fu_mantencion"></td>
    <td><input type="date" class="form-control" id="fu_calibracion" name="fu_calibracion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td style="width : 50px;"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p style="text-align: center">TOTAL</p></td>
    <td><input type="text" class="form-control" id="total" name="total" disabled></td>
    <td></td>
    <td></td>
</tr>
</thead>
</table>
</div>

<div id="content4" style="display: none; overflow:auto; overflow-y:hidden;">
<table class="table users table-hover">
<thead>
<tr id="miTablaPersonalizada">
    <th style="background-color: #F8DFF5">Ítem</th>
    <th style="background-color: #F8DFF5">Cantidad</th>
    <th style="background-color: #F8DFF5">Ubicación</th>
    <th style="background-color: #F8DFF5">Capacidad</th>
    <th style="background-color: #F8DFF5">Unidad Capacidad</th>
    <th style="background-color: #F8DFF5">Modelo</th>
    <th style="background-color: #F8DFF5">Material</th>
    <th style="background-color: #F8DFF5">Clase(OILM)</th>
    <th style="background-color: #F8DFF5">Condición</th>
    <th style="background-color: #F8DFF5">Requiere Ajuste</th>
    <th style="background-color: #F8DFF5">Requiere Man.</th>
    <th style="background-color: #F8DFF5">Valor Referencial</th>
    <th style="background-color: #F8DFF5">Valor Unitario</th>
    <th style="background-color: #F8DFF5">Fecha Tentativa</th>
    <th style="background-color: #F8DFF5">Horario Tentativo</th>
    <th style="background-color: #F8DFF5">Observación</th>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="1" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="material" name="material" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="c_oilm" name="c_oilm" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="estado" name="estado" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="r_ajuste" name="r_ajuste" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="r_mantencion" name="r_mantencion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" style="width : 100px;" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="2" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="material" name="material"></td>
    <td><input type="text" class="form-control" id="c_oilm" name="c_oilm"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="text" class="form-control" id="r_ajuste" name="r_ajuste"></td>
    <td><input type="text" class="form-control" id="r_mantencion" name="r_mantencion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="3" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="material" name="material"></td>
    <td><input type="text" class="form-control" id="c_oilm" name="c_oilm"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="text" class="form-control" id="r_ajuste" name="r_ajuste"></td>
    <td><input type="text" class="form-control" id="r_mantencion" name="r_mantencion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="4" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="material" name="material"></td>
    <td><input type="text" class="form-control" id="c_oilm" name="c_oilm"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="text" class="form-control" id="r_ajuste" name="r_ajuste"></td>
    <td><input type="text" class="form-control" id="r_mantencion" name="r_mantencion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="5" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="material" name="material"></td>
    <td><input type="text" class="form-control" id="c_oilm" name="c_oilm"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="text" class="form-control" id="r_ajuste" name="r_ajuste"></td>
    <td><input type="text" class="form-control" id="r_mantencion" name="r_mantencion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="6" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="material" name="material"></td>
    <td><input type="text" class="form-control" id="c_oilm" name="c_oilm"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="text" class="form-control" id="r_ajuste" name="r_ajuste"></td>
    <td><input type="text" class="form-control" id="r_mantencion" name="r_mantencion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="7" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="material" name="material"></td>
    <td><input type="text" class="form-control" id="c_oilm" name="c_oilm"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="text" class="form-control" id="r_ajuste" name="r_ajuste"></td>
    <td><input type="text" class="form-control" id="r_mantencion" name="r_mantencion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="8" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="material" name="material"></td>
    <td><input type="text" class="form-control" id="c_oilm" name="c_oilm"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="text" class="form-control" id="r_ajuste" name="r_ajuste"></td>
    <td><input type="text" class="form-control" id="r_mantencion" name="r_mantencion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="9" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="material" name="material"></td>
    <td><input type="text" class="form-control" id="c_oilm" name="c_oilm"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="text" class="form-control" id="r_ajuste" name="r_ajuste"></td>
    <td><input type="text" class="form-control" id="r_mantencion" name="r_mantencion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td><input type="text" class="form-control" id="item" name="item" style="width : 50px;" value="10" disabled></td>
    <td><input type="text" class="form-control" id="cantidad" name="cantidad"></td>
    <td><input type="text" class="form-control" id="ubicacion" name="ubicacion" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="capacidad" name="capacidad"></td>
    <td><select id="id_unidad" name="id_unidad" style="width : 100px;" class="form-control">
            <?php foreach($unidades as $unidad){ ?>
                <option value="<?= $unidad->id; ?>"><?= $unidad->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><select id="id_modelo" name="id_modelo" style="width : 230px;" class="form-control">
            <?php foreach($modelos as $modelo){ ?>
                <option value="<?= $modelo->id; ?>"><?= $modelo->nombre; ?> </option>
            <?php } ?>
        </select></td>
    <td><input type="text" class="form-control" id="material" name="material"></td>
    <td><input type="text" class="form-control" id="c_oilm" name="c_oilm"></td>
    <td><input type="text" class="form-control" id="estado" name="estado"></td>
    <td><input type="text" class="form-control" id="r_ajuste" name="r_ajuste"></td>
    <td><input type="text" class="form-control" id="r_mantencion" name="r_mantencion"></td>
    <td><input type="text" class="form-control" id="v_referencial" name="v_referencial" style="width : 100px;"></td>
    <td><input type="text" class="form-control" id="valu" name="valu" disabled></td>
    <td><input type="date" class="form-control" id="f_tentativa" name="f_tentativa"></td>
    <td><input type="time" class="form-control" id="h_tentativo" name="h_tentativo"></td>
    <td><input type="text" class="form-control" id="observacion" name="observacion" style="width: 300px;"></td>
</tr>
<tr>
    <td style="width : 50px;"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p style="text-align: center">TOTAL</p></td>
    <td><input type="text" class="form-control" id="total" name="total" disabled></td>
    <td></td>
    <td></td>
</tr>
</thead>
</table>
</div>




