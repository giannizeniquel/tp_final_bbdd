$(".btnEditarUsuario").click(function(){
    let id_usuario = $(this).attr("idUsuario");
    let datos = new FormData();
    console.log(id_usuario);
    console.log(datos)
    datos.append("idUsuario", id_usuario);
    $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            console.log("idUsuario", "Respuesta");
            $("#editar_usuario_nombre").val(respuesta['nombre']);
            $("#editar_usuario_email").val(respuesta['usuario']);
            $("#editar_usuario_rol").val(respuesta['perfil']);
        },
        error: function(respuesta){
            console.log("Error", respuesta);
        }
    }); 
});