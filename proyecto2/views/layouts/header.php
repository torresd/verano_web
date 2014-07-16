<?php 
  define('BASEURL','http://localhost/verano_web/proyecto2');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen 3</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="../css/bootstrap-datetimepicker.css" />



    
    <link href="../css/navbar.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
  </head>



  <body role="document" class="fondo">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo BASEURL; ?>/views/site/inicio.php">Examen 3 
          <img height="40" width="40" src="../images/lince.gif"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo BASEURL; ?>/views/autor/autor.php">Autor</a></li>
            <li class="active"><a href="<?php echo BASEURL; ?>/views/articulo/articulo.php">Articulo</a></li>
            <li class="active"><a href="<?php echo BASEURL; ?>/views/revista/revista.php">Revista</a></li>
            <li class="active"><a href="<?php echo BASEURL; ?>/views/status/status.php">Status</a></li>
            
            

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo BASEURL; ?>/views/site/login.php">
              <span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
          </ul>
          

        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">
      <br /><br /><br />
      <div class="row">
        <div class="col-md-12" align="center"><img  src="../images/principal.jpg"></div>
        <br /><br /><br />
      </div>