<?php 
  define('BASEURL','http://localhost/verano_web/proyecto1/');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase programación web verano</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/style.css" >
    <link rel="stylesheet" href="../css/bootstrap.css">
    
    <link rel="stylesheet" href="../css/jquery.fancybox.css">
    <link rel="stylesheet" href="../css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>-->
    <link rel="stylesheet" href="../css/mi.css" >
<link rel="stylesheet" href="../css/navbar.css" >
  
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document" class="fondo">

    <!-- Fixed navbar -->
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../site/inicio.php" class="navbar-brand"><span class="glyphicon glyphicon-th-list"></span>FIFA</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <?php if( isset($_SESSION['user']) ){?>
        <li>
          <a href="<?php echo BASEURL; ?>views/integrante/integrante.php">Integrantes</a>
        </li>
        <li>
          <a href="<?php echo BASEURL; ?>views/pais/pais.php">Pais</a>
        </li>
        <li>
          <a href="<?php echo BASEURL; ?>views/continente/continente.php">Continente</a>
        </li>
        <li>
          <a href="<?php echo BASEURL; ?>views/equipo/equipo.php">Equipo</a>
        </li>
        <li>
          <a href="<?php echo BASEURL; ?>views/posicion/posicion.php">Posicion</a>
        </li>
        <li>
          <a href="<?php echo BASEURL; ?>views/estadio/estadio.php">Estadio</a>
        </li>
        <?php } ?>
        <?php if( !isset($_SESSION['user']) ){?>
        <li class="active" align="right">
          <a href="<?php echo BASEURL; ?>views/site/login.php">Login<span class="glyphicon glyphicon-log-in">
          </span> /</a>
        </li>
        <?php }else{ ?>
        <li class="active" align="right">
          <a href="<?php echo BASEURL; ?>views/site/logout.php">Logout<span class="glyphicon glyphicon-log-out">
          </span> /</a>
        </li>
        <?php } ?>
        <li class="active" align="right">
          <a href="#"><span class="glyphicon glyphicon-subtitles"></span>    /</a>
        </li>
        <li class="active" align="right">
          <a href="#"><span class="glyphicon glyphicon-search"></span>    /</a>
        </li>
        <li class="active" align="right">
          <a href="#"><span class="glyphicon glyphicon-user"></span></a>
        </li>
      </ul>
    </nav>
  </div>
</header>

    <div class="container theme-showcase" role="main">

