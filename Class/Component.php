<?php
/**
 * Description of Component
 *
 * @author aquino
 */
require_once 'Conection.php';
class Component extends Conection{
    
    private $CODIGO;
    private $SINATURE;
    private $BIMESTRE;
    private $NROCOMPONENT;
    private $COMPONENTE;
    private $TOTAL_CRITERIO;
    
    public function getCODIGO() {
        return $this->CODIGO;
    }

    public function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    public function getSINATURE() {
        return $this->SINATURE;
    }

    public function setSINATURE($SINATURE) {
        $this->SINATURE = $SINATURE;
    }

    public function getBIMESTRE() {
        return $this->BIMESTRE;
    }

    public function setBIMESTRE($BIMESTRE) {
        $this->BIMESTRE = $BIMESTRE;
    }

    public function getNROCOMPONENT() {
        return $this->NROCOMPONENT;
    }

    public function setNROCOMPONENT($NROCOMPONENT) {
        $this->NROCOMPONENT = $NROCOMPONENT;
    }

    public function getCOMPONENTE() {
        return $this->COMPONENTE;
    }

    public function setCOMPONENTE($COMPONENTE) {
        $this->COMPONENTE = $COMPONENTE;
    }

    public function getTOTAL_CRITERIO() {
        return $this->TOTAL_CRITERIO;
    }

    public function setTOTAL_CRITERIO($TOTAL_CRITERIO) {
        $this->TOTAL_CRITERIO = $TOTAL_CRITERIO;
    }

    public function LISTAR($asinatura) {
    $cone=new Conection();
    $cone->CONECT();
    $resultado=  mysql_query("select c.codigo,c.nrocomponent,asi.asinatura,c.componente from Component c 
                             inner join Asinatura asi on c.sinature=asi.codigo 
                             where c.sinature='".$asinatura."' and bimestre=4;");
    $cone->CLOSE();
    unset($cone);
    return $resultado;
   }
   
   public function ListarDatosAsignatura($jiji) {
       $cone=new Conection();
       $cone->CONECT();
       $resultado=  mysql_query("Select grado,nomnivel,asinatura from descripcionsinature where codigo='".$jiji."';");
       $cone->CLOSE();
       unset($cone);
       return $resultado;
   }


}

?>
