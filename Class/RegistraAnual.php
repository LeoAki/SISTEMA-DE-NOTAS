<?php
/**
 * Description of RegistraAnual
 *
 * @author aquino
 */
require_once 'Conection.php';
class RegistraAnual extends Conection{
    
    private $IDALUMNOREGISTRO;
    private $IDREGISTRO;
    private $IDALUMNOSECCION;
    private $P1;
    private $P2;
    private $P3;
    private $P4;
    private $ANUAL;
    private $EXONERADO;
    
    public function getIDALUMNOREGISTRO() {
        return $this->IDALUMNOREGISTRO;
    }

    public function setIDALUMNOREGISTRO($IDALUMNOREGISTRO) {
        $this->IDALUMNOREGISTRO = $IDALUMNOREGISTRO;
    }

    public function getIDREGISTRO() {
        return $this->IDREGISTRO;
    }

    public function setIDREGISTRO($IDREGISTRO) {
        $this->IDREGISTRO = $IDREGISTRO;
    }

    public function getIDALUMNOSECCION() {
        return $this->IDALUMNOSECCION;
    }

    public function setIDALUMNOSECCION($IDALUMNOSECCION) {
        $this->IDALUMNOSECCION = $IDALUMNOSECCION;
    }

    public function getP1() {
        return $this->P1;
    }

    public function setP1($P1) {
        $this->P1 = $P1;
    }

    public function getP2() {
        return $this->P2;
    }

    public function setP2($P2) {
        $this->P2 = $P2;
    }

    public function getP3() {
        return $this->P3;
    }

    public function setP3($P3) {
        $this->P3 = $P3;
    }

    public function getP4() {
        return $this->P4;
    }

    public function setP4($P4) {
        $this->P4 = $P4;
    }

    public function getANUAL() {
        return $this->ANUAL;
    }

    public function setANUAL($ANUAL) {
        $this->ANUAL = $ANUAL;
    }

    public function getEXONERADO() {
        return $this->EXONERADO;
    }

    public function setEXONERADO($EXONERADO) {
        $this->EXONERADO = $EXONERADO;
    }

    public function ListaAlumnoSeccion($seccion) {
    $cone=new Conection();
    $cone->CONECT();
    $listado=mysql_query("Select ase.nroorden,p.paterno,p.materno,p.nombres,ase.idalumnoseccion
                            from Alumno_Seccion ase
                            inner join Alumno_Excel ae on ase.idalumno=ae.idalumno
                            inner join Persona p on ae.idpersona=p.codigo
                            where ase.idseccion=".$seccion."
                            order by ase.nroorden");
    $cone->CLOSE();
    unset ($cone);
    return $listado;
    }    
    
}

?>
