<div style="background-color: #62c462;" class="bs-docs-example">
           <?php
           $QUIEN= new Usuario();
           echo "USUARIO: <b>".$_SESSION['usuario'].". </b>";?>   
           <?php
           $sessi=$QUIEN->verultimasesion($_SESSION['usuario']);
           if($sesion=  mysql_fetch_array($sessi)){
               $fechaultima=$sesion['ultimasesion'];
           }
           echo "|||Ultima fecha de ingreso: <b>".$fechaultima."</b>";
           ?>

</div>