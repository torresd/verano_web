<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Articulo.php');
  include ('../../controllers/ArticuloController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
  $clase=new ArticuloController();
  if (isset($_POST['nombre'])){
  	
  	
  	$clase->insertaArticulo($_POST,$_FILES);
}
?>


      <div class="jumbotron">
        <h1>Articulo</h1>
      </div>

      <br /><br /><br />

<div class="container" align="center">
	<?php include "../funcion.php" ?>
	<div class="container" align="center">
		<div class="col-md-3">
		</div>
		<div class="col-md-6" align="center">
					

		  <form role"form" action="" method="POST" enctype="multipart/form-data">
		    
		    <label for="nombre">Nombre</label>
		    <br>
		    <input type="text" id="nombre" name="nombre" class="txt" size="60" value="
			<?php echo $clase->get_nombre(); ?>">
		    <br>
		    <label for="resumen">Resumen</label>
		    <br>
		    <textarea rows="4" cols="60" id="resumen" name="resumen" >
		    	<?php echo htmlspecialchars($_POST['resumen']);?>
		    </textarea>
		    <br>
		    <label for="abstract">Abstract</label>
		    <br>
		    <textarea rows="4" cols="60" id="abstract" name="abstract" >
		    	<?php echo htmlspecialchars($_POST['abstract']);?></textarea>
		    <br>
		    <label for="introduccion">Introduccion</label>
		    <br>
		    <textarea rows="4" cols="60" id="introduccion" name="introduccion" >
		    	<?php echo htmlspecialchars($_POST['introduccion']);?></textarea>
		    <br>
		    <label for="metodologia">Metodologia</label>
		    <br>
		    <textarea rows="4" cols="60" id="metodologia" name="metodologia" >
		    	<?php echo htmlspecialchars($_POST['metodologia']);?></textarea>
		    <br>
		    <label for="contenido">Contenido</label>
		    <br>
		    <textarea rows="4" cols="60" id="contenido" name="contenido" >
		    	<?php echo htmlspecialchars($_POST['contenido']);?></textarea>
		    <br>
		    <br>
		    	<label for="fecha_creacion">Fecha de creacion</label>
		    	<br>
                <div class='input-group date' id='datetimepicker1' align="center">
                	
                	<br>
                    <input type='text' class="form-control" id="fecha_creacion" name="fecha_creacion" size="60" value="
			<?php echo $clase->get_fecha_creacion(); ?>"/>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            <br> 
		    <label for="archivo_pdf">Archivo</label>
		    <br>
		    <input type="file" id="archivo_pdf" name="archivo_pdf" class="txt">
		    <br>
		    <label for="id_status">Status</label>
		    <br>
		    <select id="id_status" name="id_status">
			  <option value="1">Propuesta</option>
			  <option value="2">En desarrollo</option>
			  <option value="3">Finalizado</option>
			  <option value="4">Cancelado</option>
			</select>
			<br>
		    <label for="conclusiones">Conclusiones</label>
		    <br>
		    <textarea rows="4" cols="60" id="conclusiones" name="conclusiones" >
		    	<?php echo htmlspecialchars($_POST['conclusiones']);?></textarea>
		    <br>
		    <label for="agradecimientos">Agradecimientos</label>
		    <br>
		    <textarea rows="4" cols="60" id="agradecimientos" name="agradecimientos" >
		    	<?php echo htmlspecialchars($_POST['agradecimientos']);?></textarea>
		    <br>
		    <label for="referencias">Referencias</label>
		    <br>
		    <textarea rows="4" cols="60" id="referencias" name="referencias" >
		    	<?php echo htmlspecialchars($_POST['referencias']);?></textarea>
		    <br>
		    
		    <button align ="center" id="send">Guardar</button>
		  </form>
		</div>  
	</div>



      




<?php include ('../layouts/footer.php'); ?>
