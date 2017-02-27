<div class="user-panel">
    <div class="pull-left image">
        <?php if($usuario->foto==""){ $usuario->foto="imagenes/usuarios/perfil.png"; }  ?>
        <img src="<?=  $usuario->foto;  ?>"  alt="User Image"  style="width:50px;height:50px;">
    </div>
    <div class="pull-left info">
        <p>Usuario: <?=  $usuario->name;  ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>


<ul class="sidebar-menu">
    <li class="header">MENÚ</li>

    <li class="treeview">
    <a href="#">
        <i class="fa fa-users"></i> <span>Usuarios</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="javascript:void(0);" onclick="listas(1);"><i class="fa fa-list"></i>Lista Usuarios</a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-briefcase"></i> <span>Equipos</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="javascript:void(0);" onclick="listas(2);"><i class="fa fa-file-word-o"></i>Ficha Equipos</a></li>
        <li class="active"><a href="javascript:void(0);" onclick="#"><i class="fa fa-calendar"></i>Calendario de actividades</a></li>


        <li class="treeview">
            <a href="#">
                <i class="fa fa-wrench"></i> <span>Mantenedores</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="javascript:void(0);" onclick="listas(3);"><i class="fa fa-briefcase"></i>Equipos</a></li>
                <li class="active"><a href="javascript:void(0);" onclick="listas(4);"><i class="fa fa-barcode"></i>Marcas</a></li>
                <li class="active"><a href="javascript:void(0);" onclick="listas(5);"><i class="fa fa-map-marker"></i>Ubicaciones</a></li>
                <li class="active"><a href="javascript:void(0);" onclick="listas(7);"><i class="fa fa-bar-chart"></i>Actividades</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-file-o"></i> <span>Informes</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="active"><a href="javascript:void(0);" onclick="listas(6);"><i class="fa fa-file-word-o"></i>Listado de equipos</a></li>
            </ul>
        </li>
    </ul>
</ul>