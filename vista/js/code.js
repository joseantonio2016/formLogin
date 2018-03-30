$(document).ready(ini);

function ini(){
    $("#btnRegistrar").click(enviarDatos);
    $("#btnValida").click(validar);
}
function enviarDatos(){
    var usuario = $("#usuario").val();
    var pass =$("#pass").val();
    $.ajax({
        url:"insertar.php",
        success:function(result){
            if (result=="true"){
                $("#resultado").html("Registro satisfactorio");
            }else{
                 $("#resultado").html("Datos no válidos");
            }
            //alert(result);
        },
        data:{
            //proviene de GET[usuario] y de VAR usuario
            usuario:usuario,
            pass:pass
        },
        type:"GET"
        
    });
}
function validar(){
     var usuario = $("#usuario").val();
     var pass =$("#pass").val();
    $.ajax({
        url:"validar.php",
        success:function(result){
            if (result=="true"){
                document.location.href="admin.php";
                //$("#resultado").html("<div style='background:green'>Acceso satisfactorio</div>");
            }else{
                $("#resultado").html("<div class='alert alert-danger' role='alert'><b>Acceso denegado.</b> Usuario no válido</div>");
                // $("#resultado").html("<div style='background:red'>Acceso denegado</div>");
            }
           // alert(result);
        },
        data:{
            //proviene de POST[usuario] y de VAR usuario
            usuario:usuario,
            pass:pass
        },
        type:"POST"
        
    });
}