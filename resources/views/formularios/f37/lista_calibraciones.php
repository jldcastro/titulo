<div class="box-header">
    <h3 class="box-title">Lista de solicitudes</h3>
    <br><br>
    <h6 class="box-title">Buscar solicitudes</h6>
    <div class="input-group input-group-sm col-md-3">
        <input type="text" class="form-control" id="dato_buscado">
        <span class="input-group-btn">
            <button class="btn btn-info btn-flat" type="button" onclick="buscarsolicitud();" ><i class="fa fa-fw a fa-search"></i></button>
        </span>
    </div>
</div>

<div class="box-body">
    <?php
    if( count($calibraciones) >0){
    ?>

        <table id="tabla_equipos" class="table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th style="width:10px">N°</th>
                    <th>Vendedor</th>
                    <th>Cliente</th>
                </tr>
            </thead>

            <tbody>
            <?php
                foreach($calibraciones as $calibracion){
            ?>

                <tr role="row" class="odd">

                </tr>

                <?php
                }
                ?>

        </table>

    <?php
    echo str_replace('/?', '?', $calibraciones->render() )  ;
    }
    else
    {
    ?>

    <br/><div class='alert alert-warning'><label>No existe ninguna solicitud de cotización dentro de la lista</label></div>

    <?php
    }
    ?>

</div>

<div class="form-group has-feedback">
    <button class=".btn btn-primary col-md-offset-5"><a href="javascript:void(0);" onclick="agregar(8);" style="color: #ffffff"> Agregar Solicitud</a></button>
</div>




