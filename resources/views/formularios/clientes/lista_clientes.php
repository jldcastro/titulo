<div class="box box-primary">

    <div class="box-header">
        <h3 class="box-title">Lista de clientes</h3>
        <br><br>
        <h6 class="box-title">Buscar Clientes</h6>
        <div class="input-group input-group-sm col-md-3">
            <input type="text" class="form-control" id="dato_buscado">
            <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="button" onclick="buscarcliente();" ><i class="fa fa-fw a fa-search"></i></button>
            </span>
        </div>
    </div>

    <div class="box-body">

        <?php
        if( count($clientes) >0){
            ?>

            <table id="tabla_usuarios" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Zona</th>
                    <th>Región</th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach($clientes as $cliente){
                    ?>

                    <tr role="row" class="odd">
                        <td><?= $cliente->nombre; ?></td>
                        <td><?= $cliente->zona; ?></td>
                        <td><?= $cliente->region; ?></td>
                        <td><button class=".btn  btn-success btn-xs" onclick="editar_cliente(<?= $cliente->id; ?>);" ><i class="fa fa-fw fa-pencil-square-o"></i> Actualizar</button>
                            <button class=".btn  btn-warning btn-xs" onclick="mostrar_cliente(<?= $cliente->id; ?>);"><i class="fa fa-fw fa-eye"></i> Detalles</button>
                            <button class=".btn  btn-danger btn-xs" onclick="eliminar_cliente(<?= $cliente->id; ?>);"><i class="fa fa-fw fa-remove"></i> Eliminar</button>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </table>

            <?php
            echo str_replace('/?', '?', $clientes->render() )  ;
        }
        else
        {
            ?>

            <br/><div class='alert alert-warning'><label>No existe ningun cliente dentro de la lista</label></div>

        <?php
        }
        ?>

    </div>
</div>
<div class="form-group has-feedback">
    <button class=".btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i><a href="javascript:void(0);" onclick="agregar(9);" style="color: #ffffff"> Agregar Cliente</a></button>
</div>



