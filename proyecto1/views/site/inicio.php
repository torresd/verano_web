<?php 
  session_start();
  include ('../layouts/header.php');
?>


      <div class="jumbotron">
        <h1>Hola, Mundo!</h1>
        <p>Los enlaces de la barra de navegacion llevaran a las paginas creadas</p>
        <p><a id="modalbox" href="#login_form">click to open</a></p>
      </div>







      <div class="container">
        <div class="row">
            <div class='col-sm-6'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker2'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
      </div>


<div id="login_form" align="right">
  <h2 align="center">Revista</h2>

  <form id="contact" name="contact" action="#" method="post" align = "right">
    
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" class="txt">
    <br>
    <label for="portada">Portada</label>
    <input type="text" id="portada" name="portada" class="txt">
    <br>
    <label for="volumen">Volumen</label>
    <input type="text" id="nombre" name="nombre" class="txt">
    <br>
    <label for="titulo">Titulo</label>
    <input type="text" id="titulo" name="titulo" class="txt">
    <br>
    <label for="subtitulo">Subtitulo</label>
    <input type="text" id="subtitulo" name="subtitulo" class="txt">
    <br>
    <label for="numero">Numero</label>
    <input type="text" id="numero" name="numero" class="txt">
    <br>
    <label for="clave">Clave</label>
    <input type="text" id="clave" name="clave" class="txt">
    <br>
    
    <br>
    <label for="directorio">Directorio</label>
    <textarea type="text" id="directorio" name="directorio" class="txt"></textarea>
    <br>
    <label for="editorial">Editorial</label>
    <textarea type="text" id="editorial" name="editorial" class="txt"></textarea>
    <br>
    <br>
    <br>
    <br>
    
    <button id="send">Guardar</button>
  </form>
</div> 

<div id="wrapper">
  <p>Send us feedback from the modal window.</p>

  <p><a class="modalbox" href="#inline">click to open</a></p>
</div>

<!-- hidden inline form -->
<div id="inline">
  <h2>Send us a Message</h2>

  <form id="contact" name="contact" action="#" method="post">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="email" class="txt">
    <br>
    <label for="msg">Enter a Message</label>
    <textarea id="msg" name="msg" class="txtarea"></textarea>
    
    <button id="send">Send E-mail</button>
  </form>
</div>

<!-- basic fancybox setup -->
<script type="text/javascript">
  function validateEmail(email) { 
    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(email);
  }

  $(document).ready(function() {
    $(".modalbox").fancybox();
    $("#contact").submit(function() { return false; });

    
    $("#send").on("click", function(){
      var emailval  = $("#email").val();
      var msgval    = $("#msg").val();
      var msglen    = msgval.length;
      var mailvalid = validateEmail(emailval);
      
      if(mailvalid == false) {
        $("#email").addClass("error");
      }
      else if(mailvalid == true){
        $("#email").removeClass("error");
      }
      
      if(msglen < 4) {
        $("#msg").addClass("error");
      }
      else if(msglen >= 4){
        $("#msg").removeClass("error");
      }
      
      if(mailvalid == true && msglen >= 4) {
        // if both validate we attempt to send the e-mail
        // first we hide the submit btn so the user doesnt click twice
        $("#send").replaceWith("<em>sending...</em>");
        
        $.ajax({
          type: 'POST',
          url: 'sendmessage.php',
          data: $("#contact").serialize(),
          success: function(data) {
            if(data == "true") {
              $("#contact").fadeOut("fast", function(){
                $(this).before("<p><strong>Success! Your feedback has been sent, thanks :)</strong></p>");
                setTimeout("$.fancybox.close()", 1000);
              });
            }
          }
        });
      }
    });
  });
</script>

<?php include ('../layouts/footer.php'); ?>
