<?php
/**
 * Description of Seccion
 *
 * @author aquino
 */
require_once 'Conection.php';

class Seccion extends Conection{
    //SECCION-------------------------------------------------------------------
    private $CODIGO;
    private $ANO_ESCOLAR;
    private $CODIGO_NIVEL;
    private $CODIGO_GRADO;
    private $NOMBRESECCION;
    private $CODIGOTUTOR;
    private $AUXILIAR;
    private $REGISTROASISTENCIA;
    private $PSICOLOGO;
    //GET AND SETTER SECCION
    
    public function getCODIGO() {
        return $this->CODIGO;
    }

    public function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    public function getANO_ESCOLAR() {
        return $this->ANO_ESCOLAR;
    }

    public function setANO_ESCOLAR($ANO_ESCOLAR) {
        $this->ANO_ESCOLAR = $ANO_ESCOLAR;
    }

    public function getCODIGO_NIVEL() {
        return $this->CODIGO_NIVEL;
    }

    public function setCODIGO_NIVEL($CODIGO_NIVEL) {
        $this->CODIGO_NIVEL = $CODIGO_NIVEL;
    }

    public function getCODIGO_GRADO() {
        return $this->CODIGO_GRADO;
    }

    public function setCODIGO_GRADO($CODIGO_GRADO) {
        $this->CODIGO_GRADO = $CODIGO_GRADO;
    }

    public function getNOMBRESECCION() {
        return $this->NOMBRESECCION;
    }

    public function setNOMBRESECCION($NOMBRESECCION) {
        $this->NOMBRESECCION = $NOMBRESECCION;
    }

    public function getCODIGOTUTOR() {
        return $this->CODIGOTUTOR;
    }

    public function setCODIGOTUTOR($CODIGOTUTOR) {
        $this->CODIGOTUTOR = $CODIGOTUTOR;
    }

    public function getAUXILIAR() {
        return $this->AUXILIAR;
    }

    public function setAUXILIAR($AUXILIAR) {
        $this->AUXILIAR = $AUXILIAR;
    }

    public function getREGISTROASISTENCIA() {
        return $this->REGISTROASISTENCIA;
    }

    public function setREGISTROASISTENCIA($REGISTROASISTENCIA) {
        $this->REGISTROASISTENCIA = $REGISTROASISTENCIA;
    }

    public function getPSICOLOGO() {
        return $this->PSICOLOGO;
    }

    public function setPSICOLOGO($PSICOLOGO) {
        $this->PSICOLOGO = $PSICOLOGO;
    }

        public function setDATA($codigo,$ano_escolar,$nivel,$grado,$nombreseccion,$tutor,$auxiliar,$asistencia,$psicologo) {
        $this->CODIGO=$codigo;
        $this->ANO_ESCOLAR=$ano_escolar;
        $this->CODIGO_NIVEL=$nivel;
        $this->CODIGO_GRADO=$grado;
        $this->NOMBRESECCION=$nombreseccion;
        $this->CODIGOTUTOR=$tutor;
        $this->AUXILIAR=$auxiliar;
        $this->REGISTROASISTENCIA=$asistencia;
        $this->PSICOLOGO=$psicologo;
    }
    
    public function BUSCAR($codigo) {
        $conectar=new Conection();
        $conectar->CONECT();
        $SECC=new Seccion();
        $query=  mysql_query("select * from Seccion where codigo=".$codigo);
        if ($query) {
            while ($row = mysql_fetch_array($query)) {
                $SECC->setDATA($row[0], $row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8]);
            }
        }  else {
            echo 'NO SE ENCONTRO NINGUN REGISTRO';            
        }
        $conectar->CLOSE();
        unset($conectar);
        return $SECC;
    }

    public function GRABAR() {
        try {
            $this->CONECT();
            mysql_query("Call Sp_Seccion('".$this->CODIGO."','".$this->ANO_ESCOLAR."',
                '".$this->CODIGO_NIVEL."','".$this->CODIGO_GRADO."','".$this->NOMBRESECCION."',
                '".$this->CODIGOTUTOR."','".$this->AUXILIAR."','".$this->REGISTROASISTENCIA."',
                '".$this->PSICOLOGO."')") or die(mysql_error());
            $this->CLOSE();
        } catch (Exception $exc) {
            echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
        }
   }
   
   public function LISTAR() {
       $cone=new Conection();
       $cone->CONECT();
       #concat(paterno,' ',materno,'  ,', nombres)
       $resultado=  mysql_query("select s.codigo,
                                s.ano_escolar,
                                n.nomnivel,
                                g.grado,
                                s.nombreseccion,
                                concat(p.paterno,' ',p.materno,'  ,', p.nombres) as TUTOR,
                                concat(au.paterno,' ',au.materno,'  ,', au.nombres) as AUXILIAR
                                from 
                                Seccion s 
                                inner join Nivel n on s.cod_nivel=nivel 
                                inner join Grado g on s.cod_grado=g.codigo 
                                inner join Personal_Institucional p on s.cod_tutor=p.codigo 
                                inner join Personal_Institucional au on s.cod_auxiliar=au.codigo;");
       $cone->CLOSE();
       unset($cone);
       return $resultado;
   }
   
   public function Listadetalladasecciones() {
       $conexion=new Conection();
       $conexion->CONECT();
       $query=  mysql_query("select codigo,nomnivel,concat(grado , ' ' , nombreseccion) as Seccion
           from descripcionseccion;");
       $conexion->CLOSE();
       unset($conexion);
       return $query;
   }

   public function ListarGradosDiferentes($nivel) {
        $conexion=new Conection();
        $conexion->CONECT();
        $query=mysql_query("Select distinct grado from descripcionseccion where nomnivel='".$nivel."';");
        $conexion->CLOSE();
        unset ($conexion);
        return $query;
   }
   public function LISTADO_CONDICION($query) {
       $cone=new Conection();
       $cone->CONECT();
       $resultado=  mysql_query($query);
       $cone->CLOSE();
       unset($cone);
       return $resultado;
   }
    //GRADO---------------------------------------------------------------------
    private $CODIGOGRADO1;
    private $GRADO;

    public function getCODIGOGRADO1() {
        return $this->CODIGOGRADO1;
    }

    public function setCODIGOGRADO1($CODIGOGRADO1) {
        $this->CODIGOGRADO1 = $CODIGOGRADO1;
    }

    public function getGRADO() {
        return $this->GRADO;
    }

    public function setGRADO($GRADO) {
        $this->GRADO = $GRADO;
    }

    public function LISTARGRADOS() {
        $cone=new Conection;
        $cone->CONECT();
        $resultado=  mysql_query("Select * from Grado;");
        $cone->CLOSE();
        unset($cone);
        return $resultado;
    }
    //NIVEL---------------------------------------------------------------------
    private $NIVEL;
    private $NOMNIVEL;
    
    public function getNIVEL() {
        return $this->NIVEL;
    }

    public function setNIVEL($NIVEL) {
        $this->NIVEL = $NIVEL;
    }

    public function getNOMNIVEL() {
        return $this->NOMNIVEL;
    }

    public function setNOMNIVEL($NOMNIVEL) {
        $this->NOMNIVEL = $NOMNIVEL;
    }
    public function LISTARNIVELES() {
        $cone=new Conection;
        $cone->CONECT();
        $resultado=  mysql_query("select * from Nivel;");
        $cone->CLOSE();
        unset($cone);
        return $resultado;
    }
}

?>