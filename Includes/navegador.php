<div class="bs-docs-example" style="background-color: silver;">
    
<ul class="nav nav-pills">
<!--INICIO-->
<li class="dropdown">
    <a id="tula" class="dropdown-toggle" href="inicio.php"><i class="icon-home"></i>INICIO</a>
</li>


<!--PERFIL DEL USUARIO-->
<?php if($_SESSION['tipodeusuario']=="profesor"){ ?>
<li class="dropdown">
  <a id="perfil"class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#"><i class="icon-user"></i>MI PERFIL<b class="caret"></b></a>
  <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
    <li><a id="cpassword" tabindex="-1" href="changepass.php"><i class="icon-cog"></i>Cambiar Contrase&ntilde;a</a></li>                  
  </ul>  
</li>
<?php }?>

<!--ADMINISTRACION-->
<?php if($_SESSION['tipodeusuario']=="profesor" and 
        ($_SESSION['niveldeuser']==4 or 
         $_SESSION['niveldeuser']==5 or 
         $_SESSION['niveldeuser']==6 or 
         $_SESSION['niveldeuser']==7 or 
         $_SESSION['niveldeuser']==8)){?>
<li class="dropdown">
  <a id="consult"class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#"><i class="icon-search"></i>CONSULTAR<b class="caret"></b></a>
  <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
<?php if($_SESSION['niveldeuser']==4 or 
         $_SESSION['niveldeuser']==5 or 
         $_SESSION['niveldeuser']==6 or 
         $_SESSION['niveldeuser']==7 or 
         $_SESSION['niveldeuser']==8){?>
<li><a tabindex="-1" href="busdocente.php"><i class="icon-user"></i>Profesores</a></li>
  <?php
  }
  ?>
<li><a tabindex="-1" href="vistadegrados.php"><i class="icon-book"></i>Indicadores</a></li>
  </ul>
</li>

<li class="dropdown">
    <a id="consult"class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#"><i class="icon-search"></i>NIVELES ACAD&Eacute;MICOS<b class="caret"></b></a>
    <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
      <li><a tabindex="-1" href="inicial.php"><i class="icon-user"></i>Inicial</a></li>
      <li><a tabindex="-1" href="primaria.php"><i class="icon-user"></i>Primaria</a></li>
      <li><a tabindex="-1" href="secundaria.php"><i class="icon-user"></i>Secundaria</a></li>
    </ul>
</li>

<li class="dropdown">
    <a id="tula" class="dropdown-toggle" href="inputsystem.php"><i class="icon-road"></i>INGRESOS AL SISTEMA</a>
</li>

<?php 
}
?>

<!--ALUMNO-->
<?php if($_SESSION['niveldeuser']==='0'){?>
<li class="dropdown">
  <a id="masis"class="dropdown-toggle" role="button" href="miaula.php"><i class="icon-globe"></i>MI AULA</a>
</li>
<li class="dropdown">
  <a id="masis"class="dropdown-toggle" role="button" href="minotadetallada.php"><i class="icon-book"></i>ASIGNATURAS</a>
</li>
<li class="dropdown">
  <a id="masis"class="dropdown-toggle" role="button" href="miasistencia.php"><i class="icon-calendar"></i>ASISTENCIA</a>  
</li>
<li class="dropdown">
  <a id="masis"class="dropdown-toggle" role="button" href="miboleta.php"><i class="icon-book"></i>BOLETA DE NOTAS</a>
</li>
<li class="dropdown">
  <a id="masis"class="dropdown-toggle" role="button" href="mimensaje.php"><i class="icon-envelope"></i>MENSAJE</a>
</li>

<?php }?>

<!--TUTORIA-->
<?php
if($_SESSION['tipodeusuario']=="profesor" and 
  ($_SESSION['niveldeuser']=='1' or 
   $_SESSION['niveldeuser']=='2' )){
?>
<li class="dropdown">
  <a id="tutoria"class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#"><i class="icon-bullhorn"></i>TUTORIA<b class="caret"></b></a>
  <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
  <li><a id="" tabindex="-1" href="miconsolidado2.php"><i class="icon-random"></i>Consolidados</a></li>
<?php if($_SESSION['tipodeusuario']=="profesor" and 
        ($_SESSION['niveldeuser']=='12')){ ?>
    <li><a id="" tabindex="-1" href="miacta.php"><i class="icon-tasks"></i>Actas</a></li>
    <li><a id="" tabindex="-1" href="estadisticagrado.php"><i class="icon-retweet"></i>Estad&iacute;sticas</a></li>
    <li><a id="" tabindex="-1" href="ordenmerito.php"><i class="icon-star-empty"></i>&Oacute;rden De M&eacute;rito</a></li>
    <li><a id="" tabindex="-1" href="primerospuestosgrado.php"><i class="icon-star"></i>Primeros Puestos</a></li>
<?php } ?>
  </ul>
</li>
<?php
}
?>

<!--REGISTRA-->
<?php if($_SESSION['definemenu']==300){ ?>              
<li class="dropdown">
  <a id="regis"class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#"><i class="icon-th-list"></i>REGISTRA<b class="caret"></b></a>
  <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop1">
  <?php if($_SESSION['niveldeuser']==1 or 
           $_SESSION['niveldeuser']==2 or
	   $_SESSION['niveldeuser']==3 or
           $_SESSION['niveldeuser']==9){ ?>
          <li><a id="Registra_Notas" tabindex="-1" href="regnota.php"><i class="icon-book"></i>Notas</a></li>
  <?php }?>

  <?php if($_SESSION['niveldeuser']==1){ ?>
          <li><a id="acriterios" tabindex="-1" href="regcomponent.php"><i class="icon-pencil"></i>Criterios De Evaluaci&oacute;n</a></li>
  <?php }?>

 <?php if($_SESSION['tipodeusuario']=="profesor" and
          ($_SESSION['niveldeuser']=='9' )){ ?>
          <li><a id="tasistencia" tabindex="-1" href="regasistencia.php"><i class="icon-calendar"></i>Asistencias</a></li>
  <?php }?>

  <?php if($_SESSION['tipodeusuario']=="profesor" and 
          ($_SESSION['niveldeuser']=='2' or 
           $_SESSION['niveldeuser']=='1' )){ ?>
          <li><a id="tmensaje" tabindex="-1" href="regmensaje.php"><i class="icon-envelope"></i>Mensajes</a></li>
  <?php }?>
  
  <?php if($_SESSION['tipodeusuario']=="profesor" and 
          ($_SESSION['niveldeuser']=='2' or 
           $_SESSION['niveldeuser']=='1' )){ ?>
          <li><a id="tmensaje" tabindex="-1" href="choose.php"><i class="icon-envelope"></i>PP.FF</a></li>
  <?php }?>  
  
  </ul>
</li>
<?php }?>

<!--CONTROL-->
<?php if($_SESSION['tipodeusuario']===""){?>
<li class="dropdown">
    <a id="administrator"class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#"><i class="icon-eye-open"></i>ADMINISTRACION<b class="caret"></b></a>
  <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop1">
      <li><a id="" tabindex="-1" href="#"><i class="icon-user"></i>1er Bimestre</a></li>
      <li><a id="" tabindex="-1" href="#"><i class="icon-user"></i>2do Bimestre</a></li>
      <li><a id="" tabindex="-1" href="#"><i class="icon-user"></i>3er Bimestre</a></li>
      <li><a id="" tabindex="-1" href="#"><i class="icon-user"></i>4to Bimestre</a></li>
      <li><a id="" tabindex="-1" href="#"><i class="icon-user"></i>Anual</a></li>
  </ul>
</li>              
<?php }?>

<!--SOPORTE-->
<li class="dropdown">
  <a id="soport"class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#"><i class="icon-wrench"></i>SOPORTE<b class="caret"></b></a>
  <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
    <li><a href="#" id="popover" class="popover" rel="popover" data-content="<?php echo "La Oficina Informática del Liceo Naval Capitán De Corbeta(OI-LNCC) renov&oacute; el Sistema De Notas online para un mejor servicio. <br>Cualquier queja, duda &oacute; sugerencia con el funcionamiento del mismo no duden en comunicarse con nosotros envi&aacute;ndonos un mensaje a sistemas@lncc.edu.pe<br>Estamos trabajando para usted.<br>Este sistema fue desarrollado con tecnología libre<br><code>Powered by LeoAki</code>\n " ?>" title="OI-LNCC">Acerca De</a></li>
  </ul>
</li>

<!--SOPORTE-->
<li class="dropdown">
    <a id="csesion" class="dropdown-toggle" href="logout.php" onclick=""><i class="icon-off"></i>CERRAR SESION</a>
</li>

        <li class="dropdown"><i class="icon-user"></i>Bienvenido(a) <?php
            require_once 'Class/Usuario.php';
            $QUIEN= new Usuario(); 
            $uiui=$QUIEN->QUIENES($_SESSION['dni']);
            if($rowcito=  mysql_fetch_array($uiui)){
                $paterno=$rowcito['paterno'];
                $materno=$rowcito['materno'];
                $nombrestodos=$rowcito['nombres'];
            }
            echo $paterno." ".$materno.", ".$nombrestodos;?>
       </li>
</ul>
</div>