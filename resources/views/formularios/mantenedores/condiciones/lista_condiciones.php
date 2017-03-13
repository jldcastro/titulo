    <div class="box-header">
        <h3 class="box-title">Lista de condiciones equipos</h3>
    </div>

    <div class="box-body">

        <?php
        if( count($condiciones) >0){
            ?>

            <table id="tabla_marcas" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th style="width:10px">Id</th>
                    <th>Estado Equipo</th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach($condiciones as $condicion){
                    ?>

                    <tr role="row" class="odd">
                        <td class="sorting_1"><?= $condicion->id; ?></td>
                        <td><?= $condicion->nombre; ?></td>
                        <td><button class=".btn  btn-success btn-xs" onclick="editar_condicion(<?= $condicion->id; ?>);" ><i class="fa fa-fw fa-pencil-square-o"></i> Actualizar</button>
                            <button class=".btn  btn-danger btn-xs" onclick="eliminar_condicion(<?= $condicion->id; ?>);" ><i class="fa fa-fw fa-remove"></i> Eliminar</button>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </table>

            <?php
            echo str_replace('/?', '?', $condiciones->render() )  ;
        }
        else
        {
            ?>

            <br/><div class='alert alert-warning'><label>No existe ninguna condición dentro de la lista</label></div>

        <?php
        }
        ?>

    </div>

<div class="form-group has-feedback">
    <button class=".btn btn-primary col-md-offset-5"><a href="javascript:void(0);" onclick="agregar(10);" style="color: #ffffff"> Agregar Condición</a></button>
</div>



