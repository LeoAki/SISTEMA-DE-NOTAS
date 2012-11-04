<?php
/**
 * Description of Docente
 *
 * @author aquino
 */
require_once 'Conection.php';
class Docente extends Conection{
    
    private $CODIGO;
    private $PATERNO;
    private $MATERNO;
    private $NOMBRES;
    private $DNI;
    private $CODIGOPERSONA;
    private $TIPOPROFE;
    public function getCODIGO() {
        return $this->CODIGO;
    }

    public function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    public function getPATERNO() {
        return $this->PATERNO;
    }

    public function setPATERNO($PATERNO) {
        $this->PATERNO = $PATERNO;
    }

    public function getMATERNO() {
        return $this->MATERNO;
    }

    public function setMATERNO($MATERNO) {
        $this->MATERNO = $MATERNO;
    }

    public function getNOMBRES() {
        return $this->NOMBRES;
    }

    public function setNOMBRES($NOMBRES) {
        $this->NOMBRES = $NOMBRES;
    }

    public function getDNI() {
        return $this->DNI;
    }

    public function setDNI($DNI) {
        $this->DNI = $DNI;
    }

    public function getCODIGOPERSONA() {
        return $this->CODIGOPERSONA;
    }

    public function setCODIGOPERSONA($CODIGOPERSONA) {
        $this->CODIGOPERSONA = $CODIGOPERSONA;
    }

    public function getTIPOPROFE() {
        return $this->TIPOPROFE;
    }

    public function setTIPOPROFE($TIPOPROFE) {
        $this->TIPOPROFE = $TIPOPROFE;
    }

    public function SetDATA($codigo,$paterno,$materno,$nombres,$dni,$codigopersona,$tipoprofe) {
        $this->CODIGO=$codigo;
        $this->PATERNO=$paterno;
        $this->MATERNO=$materno;
        $this->NOMBRES=$nombres;
        $this->DNI=$dni;
        $this->CODIGOPERSONA=$codigopersona;
        $this->TIPOPROFE=$tipoprofe;
    }

    public function BUSCAR($codigo) {
        $conectar=new Conection();
        $conectar->CONECT();
        $DOCENTE= new Docente();
        $query=  mysql_query("select * from Docente where codigo=".$codigo);
        if ($query) {
            while ($row = mysql_fetch_array($query)) {
                $DOCENTE->SetDATA($row[0], $row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
            }
        }  else {
            echo 'NO SE ENCONTRO NINGUN REGISTRO';            
        }
        $conectar->CLOSE();
        unset($conectar);
        return $DOCENTE;
    }
    
    public function GRABAR() {
        try {
            $this->CONECT();
            mysql_query("Call Sp_Docente('".$this->CODIGO."','".$this->PATERNO."',
                                        '".$this->MATERNO."','".$this->NOMBRES."',
                                        '".$this->DNI."','".$this->CODIGOPERSONA."',
                                        '".$this->TIPOPROFE."')") 
            or die(mysql_error());
            $this->CLOSE();
        } catch (Exception $exc) {
            echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
        }
   }
   
   public function LISTAR() {
       $cone=new Conection();
       $cone->CONECT();
       $resultado=  mysql_query("Select d.codigo,d.paterno,d.materno,d.nombres,d.dni,tp.tipo from Docente d 
                                inner join TipoProfe tp on d.tipoprofe=tp.codigo; ");
       $cone->CLOSE();
       unset($cone);
       return $resultado;
   }   
   #Select d.codigo,d.paterno,d.materno,d.nombres,d.dni,tp.tipo from Docente d 
   #                             inner join TipoProfe tp on d.tipoprofe=d.codigo;   
   public function TipoProfe() {
       $cone=new Conection();
       $cone->CONECT();
       $profe=  mysql_query("Select * from TipoProfe;");
       $cone->CLOSE();
       unset($cone);
       return $profe;
   }
   
}
?>
