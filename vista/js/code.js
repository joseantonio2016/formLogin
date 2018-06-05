  
$(document).ready(ini);

function ini(){
  $(".kore").click(recuperaExistencias);
    $("#lorem").click(nuevacelda);
    $("#nombreuso").click(recuperanombUsos);
}


  function recuperaExistencias(){
     $.ajax({
        url:"recuperarItems.php",
        success:function(result){
            
                $("#url_list").html(result);
            
        }
        
    });
  }
   

    function recuperanombUsos(){
    $.ajax({
        url:"recuperarnombreUsos.php",
        success:function(result){
            
                $("#l_usos").html(result);
            
        }
        
    });
}

function nuevacelda(){
        var tnu = String.raw`<tr><td><input type="text" list="url_list" onclick="recuperaExistencias()"></td><td><div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-outline-info active">
    <input type="radio" name="options" value="2" id="option1" autocomplete="off" checked> Apto
  </label>
  <label class="btn btn-outline-warning">
    <input type="radio" name="options" value="1" id="option2" autocomplete="off"> Poco
  </label>
  <label class="btn btn-outline-danger">
    <input type="radio" name="options" value="0" id="option3" autocomplete="off"> Nada
  </label>
</div></td></tr>`;

$("#tablanuevosusos").append(tnu);
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