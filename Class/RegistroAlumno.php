<?php
require_once 'Conection.php';
class RegistroAlumno extends Conection{

    private $alumnoregistro;private $situacion;

    private $alumnoseccion;private $registro;

    private $p11;private $p12;private $p13;private $p14;private $p15;
    private $p16;private $p17;private $p18;private $p19;private $p110;
    private $p111;private $p112;private $p113;
    private $promedio1;


    private $p21;private $p22;private $p23;private $p24;private $p25;
    private $p26;private $p27;private $p28;private $p29;private $p210;
    private $p211;private $p212;
    private $promedio2;

    private $p31;private $p32;private $p33;private $p34;private $p35;
    private $p36;private $p37;private $p38;private $p39;private $p310;
    private $p311;private $p312;private $p313;
    private $promedio3;

    private $p41;private $p42;private $p43;private $p44;private $p45;
    private $p46;private $p47;private $p48;private $p49;private $p410;
    private $p411;private $p412;
    private $promedio4;

    private $p51;private $p52;private $p53;private $p54;private $p55;
    private $p56;private $p57;private $p58;private $p59;private $p510;
    private $p511;private $p512;
    private $promedio5;

    private $pb;

    public function getAlumnoseccion() {
        return $this->alumnoseccion;
    }

    public function setAlumnoseccion($alumnoseccion) {
        $this->alumnoseccion = $alumnoseccion;
    }

    public function getRegistro() {
        return $this->registro;
    }

    public function setRegistro($registro) {
        $this->registro = $registro;
    }

    public function getP11() {
        return $this->p11;
    }

    public function setP11($p11) {
        $this->p11 = $p11;
    }

    public function getP12() {
        return $this->p12;
    }

    public function setP12($p12) {
        $this->p12 = $p12;
    }

    public function getP13() {
        return $this->p13;
    }

    public function setP13($p13) {
        $this->p13 = $p13;
    }

    public function getP14() {
        return $this->p14;
    }

    public function setP14($p14) {
        $this->p14 = $p14;
    }

    public function getP15() {
        return $this->p15;
    }

    public function setP15($p15) {
        $this->p15 = $p15;
    }

    public function getP16() {
        return $this->p16;
    }

    public function setP16($p16) {
        $this->p16 = $p16;
    }

    public function getP17() {
        return $this->p17;
    }

    public function setP17($p17) {
        $this->p17 = $p17;
    }

    public function getP18() {
        return $this->p18;
    }

    public function setP18($p18) {
        $this->p18 = $p18;
    }

    public function getP19() {
        return $this->p19;
    }

    public function setP19($p19) {
        $this->p19 = $p19;
    }

    public function getP110() {
        return $this->p110;
    }

    public function setP110($p110) {
        $this->p110 = $p110;
    }

    public function getPromedio1() {
        return $this->promedio1;
    }

    public function setPromedio1($promedio1) {
        $this->promedio1 = $promedio1;
    }

    public function getP21() {
        return $this->p21;
    }

    public function setP21($p21) {
        $this->p21 = $p21;
    }

    public function getP22() {
        return $this->p22;
    }

    public function setP22($p22) {
        $this->p22 = $p22;
    }

    public function getP23() {
        return $this->p23;
    }

    public function setP23($p23) {
        $this->p23 = $p23;
    }

    public function getP24() {
        return $this->p24;
    }

    public function setP24($p24) {
        $this->p24 = $p24;
    }

    public function getP25() {
        return $this->p25;
    }

    public function setP25($p25) {
        $this->p25 = $p25;
    }

    public function getP26() {
        return $this->p26;
    }

    public function setP26($p26) {
        $this->p26 = $p26;
    }

    public function getP27() {
        return $this->p27;
    }

    public function setP27($p27) {
        $this->p27 = $p27;
    }

    public function getP28() {
        return $this->p28;
    }

    public function setP28($p28) {
        $this->p28 = $p28;
    }

    public function getP29() {
        return $this->p29;
    }

    public function setP29($p29) {
        $this->p29 = $p29;
    }

    public function getP210() {
        return $this->p210;
    }

    public function setP210($p210) {
        $this->p210 = $p210;
    }

    public function getPromedio2() {
        return $this->promedio2;
    }

    public function setPromedio2($promedio2) {
        $this->promedio2 = $promedio2;
    }

    public function getP31() {
        return $this->p31;
    }

    public function setP31($p31) {
        $this->p31 = $p31;
    }

    public function getP32() {
        return $this->p32;
    }

    public function setP32($p32) {
        $this->p32 = $p32;
    }

    public function getP33() {
        return $this->p33;
    }

    public function setP33($p33) {
        $this->p33 = $p33;
    }

    public function getP34() {
        return $this->p34;
    }

    public function setP34($p34) {
        $this->p34 = $p34;
    }

    public function getP35() {
        return $this->p35;
    }

    public function setP35($p35) {
        $this->p35 = $p35;
    }

    public function getP36() {
        return $this->p36;
    }

    public function setP36($p36) {
        $this->p36 = $p36;
    }

    public function getP37() {
        return $this->p37;
    }

    public function setP37($p37) {
        $this->p37 = $p37;
    }

    public function getP38() {
        return $this->p38;
    }

    public function setP38($p38) {
        $this->p38 = $p38;
    }

    public function getP39() {
        return $this->p39;
    }

    public function setP39($p39) {
        $this->p39 = $p39;
    }

    public function getP310() {
        return $this->p310;
    }

    public function setP310($p310) {
        $this->p310 = $p310;
    }

    public function getPromedio3() {
        return $this->promedio3;
    }

    public function setPromedio3($promedio3) {
        $this->promedio3 = $promedio3;
    }

    public function getP41() {
        return $this->p41;
    }

    public function setP41($p41) {
        $this->p41 = $p41;
    }

    public function getP42() {
        return $this->p42;
    }

    public function setP42($p42) {
        $this->p42 = $p42;
    }

    public function getP43() {
        return $this->p43;
    }

    public function setP43($p43) {
        $this->p43 = $p43;
    }

    public function getP44() {
        return $this->p44;
    }

    public function setP44($p44) {
        $this->p44 = $p44;
    }

    public function getP45() {
        return $this->p45;
    }

    public function setP45($p45) {
        $this->p45 = $p45;
    }

    public function getP46() {
        return $this->p46;
    }

    public function setP46($p46) {
        $this->p46 = $p46;
    }

    public function getP47() {
        return $this->p47;
    }

    public function setP47($p47) {
        $this->p47 = $p47;
    }

    public function getP48() {
        return $this->p48;
    }

    public function setP48($p48) {
        $this->p48 = $p48;
    }

    public function getP49() {
        return $this->p49;
    }

    public function setP49($p49) {
        $this->p49 = $p49;
    }

    public function getP410() {
        return $this->p410;
    }

    public function setP410($p410) {
        $this->p410 = $p410;
    }

    public function getPromedio4() {
        return $this->promedio4;
    }

    public function setPromedio4($promedio4) {
        $this->promedio4 = $promedio4;
    }

    public function getP51() {
        return $this->p51;
    }

    public function setP51($p51) {
        $this->p51 = $p51;
    }

    public function getP52() {
        return $this->p52;
    }

    public function setP52($p52) {
        $this->p52 = $p52;
    }

    public function getP53() {
        return $this->p53;
    }

    public function setP53($p53) {
        $this->p53 = $p53;
    }

    public function getP54() {
        return $this->p54;
    }

    public function setP54($p54) {
        $this->p54 = $p54;
    }

    public function getP55() {
        return $this->p55;
    }

    public function setP55($p55) {
        $this->p55 = $p55;
    }

    public function getP56() {
        return $this->p56;
    }

    public function setP56($p56) {
        $this->p56 = $p56;
    }

    public function getP57() {
        return $this->p57;
    }

    public function setP57($p57) {
        $this->p57 = $p57;
    }

    public function getP58() {
        return $this->p58;
    }

    public function setP58($p58) {
        $this->p58 = $p58;
    }

    public function getP59() {
        return $this->p59;
    }

    public function setP59($p59) {
        $this->p59 = $p59;
    }

    public function getP510() {
        return $this->p510;
    }

    public function setP510($p510) {
        $this->p510 = $p510;
    }

    public function getPromedio5() {
        return $this->promedio5;
    }

    public function setPromedio5($promedio5) {
        $this->promedio5 = $promedio5;
    }

    public function getPb() {
        return $this->pb;
    }

    public function setPb($pb) {
        $this->pb = $pb;
    }

    public function getAlumnoregistro() {
        return $this->alumnoregistro;
    }

    public function setAlumnoregistro($alumnoregistro) {
        $this->alumnoregistro = $alumnoregistro;
    }

    public function getSituacion() {
        return $this->situacion;
    }

    public function setSituacion($situacion) {
        $this->situacion = $situacion;
    }

#--------------------add-----------------
    public function getP111() {         #-
        return $this->p111;             #-
    }                                   #-
                                        #-
    public function setP111($p111) {    #-
        $this->p111 = $p111;            #-
    }                                   #-
                                        #-
    public function getP112() {         #-
        return $this->p112;             #-
    }                                   #-
                                        #-
    public function setP112($p112) {    #-
        $this->p112 = $p112;            #-
    }                                   #-
                                        #-
    public function getP113() {         #-
        return $this->p113;             #-
    }                                   #-
                                        #-
    public function setP113($p113) {    #-
        $this->p113 = $p113;            #-
    }                                   #-
#----------------fin----add--------------
    public function getP211() {
        return $this->p211;
    }

    public function setP211($p211) {
        $this->p211 = $p211;
    }

    public function getP212() {
        return $this->p212;
    }

    public function setP212($p212) {
        $this->p212 = $p212;
    }

    public function getP311() {
        return $this->p311;
    }

    public function setP311($p311) {
        $this->p311 = $p311;
    }

    public function getP312() {
        return $this->p312;
    }

    public function setP312($p312) {
        $this->p312 = $p312;
    }

    public function getP411() {
        return $this->p411;
    }

    public function setP411($p411) {
        $this->p411 = $p411;
    }

    public function getP412() {
        return $this->p412;
    }

    public function setP412($p412) {
        $this->p412 = $p412;
    }

    public function getP511() {
        return $this->p511;
    }

    public function setP511($p511) {
        $this->p511 = $p511;
    }

    public function getP512() {
        return $this->p512;
    }

    public function setP512($p512) {
        $this->p512 = $p512;
    }

    public function getP313() {
        return $this->p313;
    }

    public function setP313($p313) {
        $this->p313 = $p313;
    }
#----------------fin----add--------------

    public function ListaAlumnoSeccion($seccion) {
    $cone=new Conection();$cone->CONECT();
    $listado=mysql_query('SELECT ase.nroorden, ae.paterno, ae.materno, ae.nombres,ase.idalumnoseccion
                         FROM Alumno_Seccion ase
                         INNER JOIN Alumno ae ON ase.idalumno = ae.codigo
                         WHERE ase.idseccion =\''.$seccion.'\'
                         order by ase.nroorden');
    $cone->CLOSE();unset ($cone);return $listado;}

    public function contaralumno($seccion) {
    $cone=new Conection();$cone->CONECT();
    $listado=mysql_query('SELECT COUNT(*) FROM Alumno_Seccion WHERE idseccion ='.$seccion);
    $cone->CLOSE();unset ($cone);return $listado;}

    public function GRABAR() {
        try {
            $this->CONECT();
            mysql_query("Call Sp_1alumnoregistro(
                '".$this->alumnoregistro."','".$this->registro."','".$this->alumnoseccion."','".$this->situacion."','".$this->promedio1."',
                '".$this->promedio2."','".$this->promedio3."','".$this->promedio4."','".$this->promedio5."','$this->pb',
                '".$this->p11."','".$this->p12."','".$this->p13."','".$this->p14."','".$this->p15."',
                '".$this->p16."','".$this->p17."','".$this->p18."','".$this->p19."','".$this->p110."',
                '".$this->p21."','".$this->p22."','".$this->p23."','".$this->p24."','".$this->p25."',
                '".$this->p26."','".$this->p27."','".$this->p28."','".$this->p29."','".$this->p210."',
                '".$this->p31."','".$this->p32."','".$this->p33."','".$this->p34."','".$this->p35."',
                '".$this->p36."','".$this->p37."','".$this->p38."','".$this->p39."','".$this->p310."',
                '".$this->p41."','".$this->p42."','".$this->p43."','".$this->p44."','".$this->p45."',
                '".$this->p46."','".$this->p47."','".$this->p48."','".$this->p49."','".$this->p410."',
                '".$this->p51."','".$this->p52."','".$this->p53."','".$this->p54."','".$this->p55."',
                '".$this->p56."','".$this->p57."','".$this->p58."','".$this->p59."','".$this->p510."'
                )");
        } catch (Exception $exc) {
            echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
        }
   }


    public function GRABAR2() {
        try {
            $this->CONECT();
            mysql_query("Call Sp_2alumnoregistro(
                '".$this->alumnoregistro."','".$this->registro."','".$this->alumnoseccion."','".$this->situacion."','".$this->promedio1."',
                '".$this->promedio2."','".$this->promedio3."','".$this->promedio4."','".$this->promedio5."','$this->pb',
                '".$this->p11."','".$this->p12."','".$this->p13."','".$this->p14."','".$this->p15."',
                '".$this->p16."','".$this->p17."','".$this->p18."','".$this->p19."','".$this->p110."',
                '".$this->p111."','".$this->p112."','".$this->p113."',
                '".$this->p21."','".$this->p22."','".$this->p23."','".$this->p24."','".$this->p25."',
                '".$this->p26."','".$this->p27."','".$this->p28."','".$this->p29."','".$this->p210."',
                '".$this->p31."','".$this->p32."','".$this->p33."','".$this->p34."','".$this->p35."',
                '".$this->p36."','".$this->p37."','".$this->p38."','".$this->p39."','".$this->p310."',
                '".$this->p41."','".$this->p42."','".$this->p43."','".$this->p44."','".$this->p45."',
                '".$this->p46."','".$this->p47."','".$this->p48."','".$this->p49."','".$this->p410."',
                '".$this->p51."','".$this->p52."','".$this->p53."','".$this->p54."','".$this->p55."',
                '".$this->p56."','".$this->p57."','".$this->p58."','".$this->p59."','".$this->p510."'
                )");
        } catch (Exception $exc) {
            echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
        }
   }

    public function GRABAR3() {
        try {
            $this->CONECT();
            mysql_query('Call Sp_3alumnoregistro(
                \''.$this->alumnoregistro.'\',\''.$this->registro.'\',\''.$this->alumnoseccion.'\',\''.$this->situacion.'\',\''.$this->promedio1.'\',
                \''.$this->promedio2.'\',\''.$this->promedio3.'\',\''.$this->promedio4.'\',\''.$this->promedio5.'\',\''.$this->pb.'\',
                \''.$this->p11.'\',\''.$this->p12.'\',\''.$this->p13.'\',\''.$this->p14.'\',\''.$this->p15.'\',
                \''.$this->p16.'\',\''.$this->p17.'\',\''.$this->p18.'\',\''.$this->p19.'\',\''.$this->p110.'\',
                \''.$this->p111.'\',\''.$this->p112.'\',\''.$this->p113.'\',
                \''.$this->p21.'\',\''.$this->p22.'\',\''.$this->p23.'\',\''.$this->p24.'\',\''.$this->p25.'\',
                \''.$this->p26.'\',\''.$this->p27.'\',\''.$this->p28.'\',\''.$this->p29.'\',\''.$this->p210.'\',
                \''.$this->p211.'\',\''.$this->p212.'\',
                \''.$this->p31.'\',\''.$this->p32.'\',\''.$this->p33.'\',\''.$this->p34.'\',\''.$this->p35.'\',
                \''.$this->p36.'\',\''.$this->p37.'\',\''.$this->p38.'\',\''.$this->p39.'\',\''.$this->p310.'\',
                \''.$this->p311.'\',\''.$this->p312.'\',\''.$this->p313.'\',
                \''.$this->p41.'\',\''.$this->p42.'\',\''.$this->p43.'\',\''.$this->p44.'\',\''.$this->p45.'\',
                \''.$this->p46.'\',\''.$this->p47.'\',\''.$this->p48.'\',\''.$this->p49.'\',\''.$this->p410.'\',
                \''.$this->p411.'\',\''.$this->p412.'\',
                \''.$this->p51.'\',\''.$this->p52.'\',\''.$this->p53.'\',\''.$this->p54.'\',\''.$this->p55.'\',
                \''.$this->p56.'\',\''.$this->p57.'\',\''.$this->p58.'\',\''.$this->p59.'\',\''.$this->p510.'\',
                \''.$this->p511.'\',\''.$this->p512.'\')');
        } catch (Exception $exc) {
            echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
        }
   }

   public function LISTAR($alreg){
       $cone=new Conection();$cone->CONECT();
       $lista=  mysql_query('SELECT * FROM 1Alumno_Registro where idalumnoregistro=\''.$alreg.'\';');
       $cone->CLOSE();unset($cone);return $lista;}

   public function LISTAR2($alreg){
       $cone=new Conection();$cone->CONECT();
       $lista=  mysql_query('SELECT * FROM 2Alumno_Registro where idalumnoregistro=\''.$alreg.'\';');
       $cone->CLOSE();unset($cone);return $lista;}

   public function LISTAR3($alreg){
       $cone=new Conection();$cone->CONECT();
       $lista=  mysql_query('SELECT * FROM 3Alumno_Registro where idalumnoregistro=\''.$alreg.'\';');
       $cone->CLOSE();unset($cone);return $lista;}

   public function Nom_res_registr($registro) {
       $cone=new Conection();$cone->CONECT();
       $docente=  mysql_query('Select codigodocente from Registro where codigo='.$registro);
       $cone->CLOSE();unset($cone);return $docente;}

   public function docentevalor($codigo){
       $cone=new Conection();$cone->CONECT();
       $docente1=  mysql_query('Select paterno,materno,nombres from Docente where codigo='.$codigo);
       $cone->CLOSE();unset($cone);return $docente1;}

}
?>