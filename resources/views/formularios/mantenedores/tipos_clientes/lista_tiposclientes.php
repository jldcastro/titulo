    <div class="box-header">
        <h3 class="box-title">Lista de tipos de clientes</h3>
    </div>

    <div class="box-body">

        <?php
        if( count($tipos_clientes) >0){
            ?>

            <table id="tabla_marcas" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th style="width:10px">Id</th>
                    <th>Tipos Clientes</th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach($tipos_clientes as $tipo_cliente){
                    ?>

                    <tr role="row" class="odd">
                        <td class="sorting_1"><?= $tipo_cliente->id; ?></td>
                        <td><?= $tipo_cliente->nombre; ?></td>
                        <td><button class=".btn  btn-success btn-xs" onclick="editar_tipocliente(<?= $tipo_cliente->id; ?>);" ><i class="fa fa-fw fa-pencil-square-o"></i> Actualizar</button>
                            <button class=".btn  btn-danger btn-xs" onclick="eliminar_tipocliente(<?= $tipo_cliente->id; ?>);" ><i class="fa fa-fw fa-remove"></i> Eliminar</button>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </table>

            <?php
            echo str_replace('/?', '?', $tipos_clientes->render() )  ;
        }
        else
        {
            ?>

            <br/><div class='alert alert-warning'><label>No existe ningún tipo de cliente dentro de la lista</label></div>

        <?php
        }
        ?>

    </div>
<div class="form-group has-feedback">
    <button class=".btn btn-primary col-md-offset-5"><a href="javascript:void(0);" onclick="agregar(16);" style="color: #ffffff"> Agregar Tipo Cliente</a></button>
</div>



