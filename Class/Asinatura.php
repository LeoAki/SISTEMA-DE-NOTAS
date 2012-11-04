<?php
/**
 * Description of Asinatura
 *
 * @author aquino
 */
require_once 'Conection.php';
class Asinatura extends Conection{
    
    private $CODIGO;
    private $CODIGOGRADO;
    private $CODIGONIVEL;
    private $CODIGOCURSO;
    private $ASINATURA;
    private $ABREVIATURA;
    private $HORASSEMANALES;
    private $NUMEROCAPACIDADES;
    
    public function getCODIGO() {
        return $this->CODIGO;
    }

    public function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    public function getCODIGOGRADO() {
        return $this->CODIGOGRADO;
    }

    public function setCODIGOGRADO($CODIGOGRADO) {
        $this->CODIGOGRADO = $CODIGOGRADO;
    }

    public function getCODIGONIVEL() {
        return $this->CODIGONIVEL;
    }

    public function setCODIGONIVEL($CODIGONIVEL) {
        $this->CODIGONIVEL = $CODIGONIVEL;
    }

    public function getCODIGOCURSO() {
        return $this->CODIGOCURSO;
    }

    public function setCODIGOCURSO($CODIGOCURSO) {
        $this->CODIGOCURSO = $CODIGOCURSO;
    }

    public function getASINATURA() {
        return $this->ASINATURA;
    }

    public function setASINATURA($ASINATURA) {
        $this->ASINATURA = $ASINATURA;
    }

    public function getABREVIATURA() {
        return $this->ABREVIATURA;
    }

    public function setABREVIATURA($ABREVIATURA) {
        $this->ABREVIATURA = $ABREVIATURA;
    }

    public function getHORASSEMANALES() {
        return $this->HORASSEMANALES;
    }

    public function setHORASSEMANALES($HORASSEMANALES) {
        $this->HORASSEMANALES = $HORASSEMANALES;
    }

    public function getNUMEROCAPACIDADES() {
        return $this->NUMEROCAPACIDADES;
    }

    public function setNUMEROCAPACIDADES($NUMEROCAPACIDADES) {
        $this->NUMEROCAPACIDADES = $NUMEROCAPACIDADES;
    }

    public function setDATA($codigo,$codigogrado,$codigonivel,$codigocurso,$asinatura,$abreviatura,$horassemanales,$numerocapacidades) {
        $this->CODIGO=$codigo;
        $this->CODIGOGRADO=$codigogrado;
        $this->CODIGONIVEL=$codigonivel;
        $this->CODIGOCURSO=$codigocurso;
        $this->ASINATURA=$asinatura;
        $this->ABREVIATURA=$abreviatura;
        $this->HORASSEMANALES=$horassemanales;
        $this->NUMEROCAPACIDADES=$numerocapacidades;
    }
    
    public function ListaDescriptiva() {
        $this->CONECT();
        $lista=  mysql_query("select * from descripcionsinature;");
        $this->CLOSE();
        return $lista;
    }
    
    public function ListaAreas() {
        $this->CONECT();
        $lista=  mysql_query("");
        $this->CLOSE();
        return $lista;
    }
    
}

?>
