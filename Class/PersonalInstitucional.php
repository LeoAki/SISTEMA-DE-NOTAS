<?php
/**
 * Description of PersonalInstitucional
 *
 * @author aquino
 */
require_once 'Conection.php';

class PersonalInstitucional extends Conection{
    
    private $CODIGO;
    private $PATERNO;
    private $MATERNO;
    private $NOMBRES;
    private $DNI;
    private $SEXO;
    private $CARGO;
    private $INGRESO;
    private $NACIMIENTO;
    private $CORREO;
    private $DIRECCION;
    private $TELEFONO;
    private $CELULAR;
    
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

    public function getSEXO() {
        return $this->SEXO;
    }

    public function setSEXO($SEXO) {
        $this->SEXO = $SEXO;
    }

    public function getCARGO() {
        return $this->CARGO;
    }

    public function setCARGO($CARGO) {
        $this->CARGO = $CARGO;
    }

    public function getINGRESO() {
        return $this->INGRESO;
    }

    public function setINGRESO($INGRESO) {
        $this->INGRESO = $INGRESO;
    }

    public function getNACIMIENTO() {
        return $this->NACIMIENTO;
    }

    public function setNACIMIENTO($NACIMIENTO) {
        $this->NACIMIENTO = $NACIMIENTO;
    }

    public function getCORREO() {
        return $this->CORREO;
    }

    public function setCORREO($CORREO) {
        $this->CORREO = $CORREO;
    }

    public function getDIRECCION() {
        return $this->DIRECCION;
    }

    public function setDIRECCION($DIRECCION) {
        $this->DIRECCION = $DIRECCION;
    }

    public function getTELEFONO() {
        return $this->TELEFONO;
    }

    public function setTELEFONO($TELEFONO) {
        $this->TELEFONO = $TELEFONO;
    }

    public function getCELULAR() {
        return $this->CELULAR;
    }

    public function setCELULAR($CELULAR) {
        $this->CELULAR = $CELULAR;
    }

    public function LISTADOBASICO() {
        $conectar= new Conection;
        $conectar->CONECT();
        $query=  mysql_query("select codigo,
                                concat(paterno,' ',materno,'  ,', nombres) as personal,
                                dni from Personal_Institucional;");
        $conectar->CLOSE();
        unset($conectar);
        return $query;
    }
}

?>
