    <div class="box-header">
        <h3 class="box-title">Lista de unidades de peso</h3>
    </div>

    <div class="box-body">

        <?php
        if( count($unidades) >0){
            ?>

            <table id="tabla_marcas" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th style="width:10px">Id</th>
                    <th>Unidad de medida</th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach($unidades as $unidad){
                    ?>

                    <tr role="row" class="odd">
                        <td class="sorting_1"><?= $unidad->id; ?></td>
                        <td><?= $unidad->nombre; ?></td>
                        <td><button class=".btn  btn-success btn-xs" onclick="editar_unidad(<?= $unidad->id; ?>);" ><i class="fa fa-fw fa-pencil-square-o"></i> Actualizar</button>
                            <button class=".btn  btn-danger btn-xs" onclick="eliminar_unidad(<?= $unidad->id; ?>);" ><i class="fa fa-fw fa-remove"></i> Eliminar</button>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </table>

            <?php
            echo str_replace('/?', '?', $unidades->render() )  ;
        }
        else
        {
            ?>

            <br/><div class='alert alert-warning'><label>No existe ninguna unidad de peso dentro de la lista</label></div>

        <?php
        }
        ?>

    </div>

<div class="form-group has-feedback">
    <button class=".btn btn-primary col-md-offset-5"><a href="javascript:void(0);" onclick="agregar(12);" style="color: #ffffff"> Agregar Unidad</a></button>
</div>



