function agregar(argumento){
//funcion para cargar formularios del sistema

		if(argumento==1){var ruta = "nuevo_usuario";}
        if(argumento==2){var ruta = "nuevo_equipo";}
        if(argumento==3){var ruta = "nuevo_nombre";}
        if(argumento==4){var ruta = "nueva_marca";}
        if(argumento==5){var ruta = "nueva_ubicacion";}
        if(argumento==6){var ruta = "nueva_actividad";}
        if(argumento==7){var ruta = "descargar_f5";}
        if(argumento==8){var ruta = "nueva_calibracion";}
        if(argumento==9){var ruta = "nuevo_cliente";}
        if(argumento==10){var ruta = "nueva_condicion";}
        if(argumento==11){var ruta = "nuevo_modelo";}
        if(argumento==12){var ruta = "nueva_unidad";}
        if(argumento==13){var ruta = "nuevo_numero";}
        if(argumento==14){var ruta = "nuevo_tipo";}
        if(argumento==15){var ruta = "nuevo_material";}

		$("#contenido_principal").html($("#cargador").html());
		   
		    $.get(ruta,function(resultado){
		        $("#contenido_principal").html(resultado);
		    })
}

function listas(lista){
//funcion para cargar el listado de usuarios

        if(lista==1){var ruta = "lista_usuarios";}
        if(lista==2){var ruta = "lista_equipos";}
        if(lista==3){var ruta = "lista_nombres";}
        if(lista==4){var ruta = "lista_marcas";}
        if(lista==5){var ruta = "lista_ubicaciones";}
        if(lista==6){var ruta = "listas_equipos";}
        if(lista==7){var ruta = "lista_actividades";}
        if(lista==8){var ruta = "lista_calibraciones";}
        if(lista==9){var ruta = "lista_clientes";}
        if(lista==10){var ruta = "lista_condiciones";}
        if(lista==11){var ruta = "lista_modelos";}
        if(lista==12){var ruta = "lista_unidades";}
        if(lista==13){var ruta = "lista_numeros";}
        if(lista==14){var ruta = "lista_tipos";}
        if(lista==15){var ruta = "lista_materiales";}

    $("#contenido_principal").html($("#cargador").html());

            $.get(ruta,function(resultado){
                $("#contenido_principal").html(resultado);
            })
}

function editar_usuario(id_usuario) {
//funcion para mostrar y actualizar la informacion de un usuario

    var ruta = "editar_usuario/"+id_usuario+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_marca(id_marca) {
//funcion para mostrar y actualizar la informacion de una marca

    var ruta = "editar_marca/"+id_marca+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_tipo(id_tipo) {
//funcion para mostrar y actualizar la informacion de una marca

    var ruta = "editar_tipo/"+id_tipo+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_condicion(id_condicion) {
//funcion para mostrar y actualizar la informacion de un estadode un equipo

    var ruta = "editar_condicion/"+id_condicion+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_modelo(id_modelo) {
//funcion para mostrar y actualizar la informacion de un estadode un equipo

    var ruta = "editar_modelo/"+id_modelo+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_unidad(id_unidad) {
//funcion para mostrar y actualizar la informacion de un estadode un equipo

    var ruta = "editar_unidad/"+id_unidad+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_equipo(id_equipo) {
//funcion para mostrar y actualizar la informacion de un equipo

    var ruta = "editar_equipo/"+id_equipo+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_nombre(id_nombre) {
//funcion para mostrar y actualizar la informacion de un nombre

    var ruta = "editar_nombre/"+id_nombre+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_ubicacion(id_ubicacion) {
//funcion para mostrar y actualizar la informacion de un lugar de almacenamiento

    var ruta = "editar_ubicacion/"+id_ubicacion+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_material(id_material) {
//funcion para mostrar y actualizar la informacion de un usuario

    var ruta = "editar_material/"+id_material+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_actividad(id_actividad) {
//funcion para mostrar y actualizar la informacion de una actividad

    var ruta = "editar_actividad/"+id_actividad+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function editar_cliente(id_cliente) {
//funcion para mostrar y actualizar la informacion de una actividad

    var ruta = "editar_cliente/"+id_cliente+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function mostrar_usuario(id_usuario) {
//funcion para mostrar y actualizar la informacion de un usuario

    var ruta = "mostrar_usuario/"+id_usuario+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function mostrar_equipo(id_equipo) {
//funcion para mostrar y actualizar la informacion de un usuario

    var ruta = "mostrar_equipo/"+id_equipo+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function mostrar_cliente(id_cliente) {
//funcion para mostrar y actualizar la informacion de un usuario

    var ruta = "mostrar_cliente/"+id_cliente+"";

    $("#contenido_principal").html($("#cargador").html());

    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

 $(document).on("submit",".formulario",function(e){
//funcion para atrapar el formulario de usuarios y enviar los datos

     e.preventDefault();
        $('html, body').animate({scrollTop: '0px'}, 200);
        
        var formulario=$(this);
        var usuario=$(this).attr("id");
        var equipo=$(this).attr("id");
        var nombre=$(this).attr("id");
        var marca=$(this).attr("id");
        var ubicacion=$(this).attr("id");
        var actividad=$(this).attr("id");
        var cliente=$(this).attr("id");
        var condicion=$(this).attr("id");
        var modelo=$(this).attr("id");
        var unidad=$(this).attr("id");
        var calibracion=$(this).attr("id");
        var numero=$(this).attr("id");
        var tipo=$(this).attr("id");
        var material=$(this).attr("id");


        if(usuario=="nuevo_usuario"){ var ruta="crear_usuario"; var nota="notificacion"; }
        if(equipo=="nuevo_equipo"){ var ruta="crear_equipo"; var nota="notificacion"; }
        if(nombre=="nuevo_nombre"){ var ruta="crear_nombre"; var nota="notificacion"; }
        if(marca=="nueva_marca"){ var ruta="crear_marca"; var nota="notificacion"; }
        if(ubicacion=="nueva_ubicacion"){ var ruta="crear_ubicacion"; var nota="notificacion"; }
        if(actividad=="nueva_actividad"){ var ruta="crear_actividad"; var nota="notificacion"; }
        if(cliente=="nuevo_cliente"){ var ruta="crear_cliente"; var nota="notificacion"; }
        if(condicion=="nueva_condicion"){ var ruta="crear_condicion"; var nota="notificacion"; }
        if(modelo=="nuevo_modelo"){ var ruta="crear_modelo"; var nota="notificacion"; }
        if(unidad=="nueva_unidad"){ var ruta="crear_unidad"; var nota="notificacion"; }
        if(calibracion=="nueva_calibracion"){ var ruta="crear_calibracion"; var nota="notificacion"; }
        if(numero=="nuevo_numero"){ var ruta="crear_numero"; var nota="notificacion"; }
        if(tipo=="nuevo_tipo"){ var ruta="crear_tipo"; var nota="notificacion"; }
        if(material=="nuevo_material"){ var ruta="crear_material"; var nota="notificacion"; }

        if(usuario=="editar_usuario"){ var ruta="actualizar_usuario"; var nota="notificacion"; }
        if(equipo=="editar_equipo"){ var ruta="actualizar_equipo"; var nota="notificacion"; }
        if(nombre=="editar_nombre"){ var ruta="actualizar_nombre"; var nota="notificacion"; }
        if(marca=="editar_marca"){ var ruta="actualizar_marca"; var nota="notificacion"; }
        if(ubicacion=="editar_ubicacion"){ var ruta="actualizar_ubicacion"; var nota="notificacion"; }
        if(actividad=="editar_actividad"){ var ruta="actualizar_actividad"; var nota="notificacion"; }
        if(cliente=="editar_cliente"){ var ruta="actualizar_cliente"; var nota="notificacion"; }
        if(condicion=="editar_condicion"){ var ruta="actualizar_condicion"; var nota="notificacion"; }
        if(modelo=="editar_modelo"){ var ruta="actualizar_modelo"; var nota="notificacion"; }
        if(unidad=="editar_unidad"){ var ruta="actualizar_unidad"; var nota="notificacion"; }
        if(tipo=="editar_tipo"){ var ruta="actualizar_tipo"; var nota="notificacion"; }
        if(material=="editar_material"){ var ruta="actualizar_material"; var nota="notificacion"; }


        if(usuario=="cambiar_contrasena"){ var ruta="cambiar_contrasena"; var nota="notificacion_contrasena"; }

     $("#"+nota+"").html($("#cargador").html());

              $.ajax({

                    type: "POST",
                    url : ruta,
                    datatype:'json',
                    data : formulario.serialize(),
                    success : function(resultado){

                        $("#"+nota+"").html(resultado);
                        if(usuario==nuevo_usuario){
                            $('#'+usuario+'').trigger("reset");
                        }

                        if(equipo==nuevo_equipo){
                            $('#'+equipo+'').trigger("reset");
                        }

                        if(nombre==nuevo_nombre){
                            $('#'+nombre+'').trigger("reset");
                        }

                        if(marca==nueva_marca){
                            $('#'+marca+'').trigger("reset");
                        }

                        if(ubicacion==nueva_ubicacion){
                            $('#'+ubicacion+'').trigger("reset");
                        }

                        if(actividad==nueva_actividad){
                            $('#'+actividad+'').trigger("reset");
                        }

                        if(cliente==nuevo_cliente){
                            $('#'+cliente+'').trigger("reset");
                        }

                        if(condicion==nueva_condicion){
                            $('#'+condicion+'').trigger("reset");
                        }

                        if(modelo==nuevo_modelo){
                            $('#'+modelo+'').trigger("reset");
                        }

                        if(unidad==nueva_unidad){
                            $('#'+unidad+'').trigger("reset");
                        }

                        if(calibracion==nueva_calibracion){
                            $('#'+calibracion+'').trigger("reset");
                        }

                        if(numero==nuevo_numero){
                            $('#'+numero+'').trigger("reset");
                        }

                        if(tipo==nuevo_tipo){
                            $('#'+tipo+'').trigger("reset");
                        }

                        if(material==nuevo_material){
                            $('#'+material+'').trigger("reset");
                        }
                    }
                });
})

//funcion para indicar correctamente la paginación
$(document).on("click",".pagination li a",function(e){

    e.preventDefault();

    var ruta =$( this).attr("href");
    $("#contenido_principal").html($("#cargador").html());


    $.get(ruta,function(resultado){

        $("#contenido_principal").html(resultado);
    })
})

$(document).on("submit",".imagenes",function(e){


    e.preventDefault();
    var formu=$(this);
    var nombreform=$(this).attr("id");

    if(nombreform=="subir_imagen" ){ var ruta="imagen_usuario";  var nota="notificacion_imagen"}
    if(nombreform=="subir_equipo" ){ var ruta="imagen_equipo";  var nota="notificacion_imagen"}
    //información del formulario
    var formData = new FormData($("#"+nombreform+"")[0]);

    //hacemos la petición ajax
    $.ajax({
        url: ruta,
        type: 'POST',

        // Form data
        //datos del formulario
        data: formData,
        //necesario para subir archivos via ajax
        cache: false,
        contentType: false,
        processData: false,
        //mientras enviamos el archivo
        beforeSend: function(){
            $("#"+nota+"").html($("#cargador").html());
        },
        //una vez finalizado correctamente
        success: function(data){
            $("#"+nota+"").html(data);
            $("#foto").attr('src', $("#foto").attr('src') + '?' + Math.random() );
        },
        //si ha ocurrido un error
        error: function(data){
            alert("Ha ocurrido un error") ;

        }
    });
});

function eliminar_usuario(argumento) {

    var ruta = "eliminar_usuario/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(1);
    })
}

function eliminar_marca(argumento) {

    var ruta = "eliminar_marca/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(4);
    })
}

function eliminar_material(argumento) {

    var ruta = "eliminar_material/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(15);
    })
}

function eliminar_tipo(argumento) {

    var ruta = "eliminar_tipo/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(14);
    })
}

function eliminar_condicion(argumento) {

    var ruta = "eliminar_condicion/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(10);
    })
}

function eliminar_modelo(argumento) {

    var ruta = "eliminar_modelo/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(11);
    })
}

function eliminar_unidad(argumento) {

    var ruta = "eliminar_unidad/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(12);
    })
}

function eliminar_equipo(argumento) {

    var ruta = "eliminar_equipo/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(2);
    })
}

function eliminar_nombre(argumento) {

    var ruta = "eliminar_nombre/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(3);
    })
}

function eliminar_ubicacion(argumento) {

    var ruta = "eliminar_ubicacion/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(5);
    })
}

function eliminar_actividad(argumento) {

    var ruta = "eliminar_actividad/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(7);
    })
}

function eliminar_cliente(argumento) {

    var ruta = "eliminar_cliente/" + argumento + "";
    var divresul = "notificacion";
    $("#" + divresul + "").html($("#cargador").html());

    $.get(ruta, function (resultado) {
        $("#" + divresul + "").html(resultado);
        listas(9);
    })
}

function buscarusuario(){

    var dato=$("#dato_buscado").val();
    if(dato != "")
    {
        var ruta="buscar_usuarios/"+dato+"";
    }

    $("#contenido_principal").html($("#cargador_empresa").html());
    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })

}

function buscarequipo(){

    var dato=$("#dato_buscado").val();
    if(dato != "")
    {
        var ruta="buscar_equipos/"+dato+"";
    }

    $("#contenido_principal").html($("#cargador_empresa").html());
    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })
}

function buscarcliente(){

    var dato=$("#dato_buscado").val();
    if(dato != "")
    {
        var ruta="buscar_clientes/"+dato+"";
    }

    $("#contenido_principal").html($("#cargador_empresa").html());
    $.get(ruta,function(resultado){
        $("#contenido_principal").html(resultado);
    })

}

function showContent() {
    element = document.getElementById("content");
    check = document.getElementById("check");
    if (check.checked) {
        element.style.display='block';
    }
    else {
        element.style.display='none';
    }
}

function showContent2() {
    element = document.getElementById("content2");
    check = document.getElementById("check2");
    if (check.checked) {
        element.style.display='block';
    }
    else {
        element.style.display='none';
    }
}

function showContent3() {
    element = document.getElementById("content3");
    check = document.getElementById("check3");
    if (check.checked) {
        element.style.display='block';
    }
    else {
        element.style.display='none';
    }
}

function showContent4() {
    element = document.getElementById("content4");
    check = document.getElementById("check4");
    if (check.checked) {
        element.style.display='block';
    }
    else {
        element.style.display='none';
    }
}