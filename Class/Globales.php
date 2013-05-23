<?php
/**
 * Description of Global
 *
 * @author aquino
 */
require_once 'Conection.php';
class Globales extends Conection{

    public $ANOESCOLAR;
    public $BIMESTRE;
    
    public function getANOESCOLAR() {
        return $this->ANOESCOLAR;
    }

    public function setANOESCOLAR($ANOESCOLAR) {
        $this->ANOESCOLAR = $ANOESCOLAR;
    }

    public function getBIMESTRE() {
        return $this->BIMESTRE;
    }

    public function setBIMESTRE($BIMESTRE) {
        $this->BIMESTRE = $BIMESTRE;
    }

    public function SETDATA($ano,$bim) {
        $this->ANOESCOLAR=$ano;
        $this->BIMESTRE=$bim;
    }
    
    public function ACTUALIZAR($anoescolar,$bimestre) {
        $cone= new Conection();
        $cone->CONECT();
        $actualizacion=  mysql_query("Update LNCCNOTAS.Globales set anoescolar='".$anoescolar."',
            bimestre='".$bimestre."';");
        $cone->CLOSE();
        unset($cone);
        return $actualizacion;
    }
    public function LISTAR() {
        $cone=new Conection;
        $cone->CONECT();
        $listado=  mysql_query("select * from LNCCNOTAS.Globales;");
        $cone->CLOSE();
        unset($cone);
        return $listado;
    }
    
    public function SEARCH($anoacademico) {
        $cone=new Conection();
        $cone->CONECT();
        $globalclas=new Globales();
        $resultadodebusqueda=  mysql_query("elect * from LNCCNOTA.Globale where 
            anoecolar='".$anoacademico."';");
        if($resultadodebusqueda){
            while ($row = mysql_fetch_array($resultadodebusqueda,MYSQL_NUM)) {
                $globalclas->SETDATA($row[0], $row[1]);
            }
        }  else {
            echo "NO E ENCONTRO NINGUN REGISTRO";
        }
        $cone->CLOSE();
        unset($cone);
        return $globalclas;
        
    }
}
?>
