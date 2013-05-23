<?php
/**
 * Description of Alumn
 *
 * @author aquino
 */
require_once 'Conection.php';
class Alumn extends Conection{
    private $CODIGO;
    private $IDPERSONA;
    private $COD_SECCION;
    private $PATERNO;
    private $MATERNO;
    private $NOMBRES;
    private $NACIONALIDAD;
    private $SEXO;
    private $DNI;
    private $FECHAINSCRIPCION;
    private $MATRICULANTE;
    private $FECHANACIMIENTO;
    private $DEPARTAMENTO_NAC;
    private $PROVINCIA_NAC;
    private $DISTRITO_NAC;
    private $LOCALIDAD_NAC;
    private $TIPODEPARTO;
    private $DESCRIPCION_PARTO;
    private $DEPARTAMENTO;
    private $PROVINCIA;
    private $DISTRITO;
    private $DOMICILIO;
    private $ANO_RESIDENCIA;
    private $CELULAR;
    private $FIJO;
    private $RPM;
    private $RCP;
    private $EMAIL;
    private $RELIGION;
    private $ALERGICOMEDICAMENTO1;
    private $ALERGICOMEDICAMENTO2;
    private $ALERGICOMEDICAMENTO3;
    private $ALERGICOMEDICAMENTO4;
    private $ALERGIA_POLVO_ACARO;
    private $HUMEDAD_HONGOS;
    private $TIPO_SANGRE;
    private $BECADO;
    private $TIPO_BECA;
    private $RESOLUCION_BECA;
    private $CANT_HERMANOS;
    private $LUGAR_HERMANOS;
    private $COLEGIOPROCEDENTE;
    
    public function getCODIGO() {
        return $this->CODIGO;
    }

    public function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    public function getIDPERSONA() {
        return $this->IDPERSONA;
    }

    public function setIDPERSONA($IDPERSONA) {
        $this->IDPERSONA = $IDPERSONA;
    }

    public function getCOD_SECCION() {
        return $this->COD_SECCION;
    }

    public function setCOD_SECCION($COD_SECCION) {
        $this->COD_SECCION = $COD_SECCION;
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

    public function getNACIONALIDAD() {
        return $this->NACIONALIDAD;
    }

    public function setNACIONALIDAD($NACIONALIDAD) {
        $this->NACIONALIDAD = $NACIONALIDAD;
    }

    public function getSEXO() {
        return $this->SEXO;
    }

    public function setSEXO($SEXO) {
        $this->SEXO = $SEXO;
    }

    public function getDNI() {
        return $this->DNI;
    }

    public function setDNI($DNI) {
        $this->DNI = $DNI;
    }

    public function getFECHAINSCRIPCION() {
        return $this->FECHAINSCRIPCION;
    }

    public function setFECHAINSCRIPCION($FECHAINSCRIPCION) {
        $this->FECHAINSCRIPCION = $FECHAINSCRIPCION;
    }

    public function getMATRICULANTE() {
        return $this->MATRICULANTE;
    }

    public function setMATRICULANTE($MATRICULANTE) {
        $this->MATRICULANTE = $MATRICULANTE;
    }

    public function getFECHANACIMIENTO() {
        return $this->FECHANACIMIENTO;
    }

    public function setFECHANACIMIENTO($FECHANACIMIENTO) {
        $this->FECHANACIMIENTO = $FECHANACIMIENTO;
    }

    public function getDEPARTAMENTO_NAC() {
        return $this->DEPARTAMENTO_NAC;
    }

    public function setDEPARTAMENTO_NAC($DEPARTAMENTO_NAC) {
        $this->DEPARTAMENTO_NAC = $DEPARTAMENTO_NAC;
    }

    public function getPROVINCIA_NAC() {
        return $this->PROVINCIA_NAC;
    }

    public function setPROVINCIA_NAC($PROVINCIA_NAC) {
        $this->PROVINCIA_NAC = $PROVINCIA_NAC;
    }

    public function getDISTRITO_NAC() {
        return $this->DISTRITO_NAC;
    }

    public function setDISTRITO_NAC($DISTRITO_NAC) {
        $this->DISTRITO_NAC = $DISTRITO_NAC;
    }

    public function getLOCALIDAD_NAC() {
        return $this->LOCALIDAD_NAC;
    }

    public function setLOCALIDAD_NAC($LOCALIDAD_NAC) {
        $this->LOCALIDAD_NAC = $LOCALIDAD_NAC;
    }

    public function getTIPODEPARTO() {
        return $this->TIPODEPARTO;
    }

    public function setTIPODEPARTO($TIPODEPARTO) {
        $this->TIPODEPARTO = $TIPODEPARTO;
    }

    public function getDESCRIPCION_PARTO() {
        return $this->DESCRIPCION_PARTO;
    }

    public function setDESCRIPCION_PARTO($DESCRIPCION_PARTO) {
        $this->DESCRIPCION_PARTO = $DESCRIPCION_PARTO;
    }

    public function getDEPARTAMENTO() {
        return $this->DEPARTAMENTO;
    }

    public function setDEPARTAMENTO($DEPARTAMENTO) {
        $this->DEPARTAMENTO = $DEPARTAMENTO;
    }

    public function getPROVINCIA() {
        return $this->PROVINCIA;
    }

    public function setPROVINCIA($PROVINCIA) {
        $this->PROVINCIA = $PROVINCIA;
    }

    public function getDISTRITO() {
        return $this->DISTRITO;
    }

    public function setDISTRITO($DISTRITO) {
        $this->DISTRITO = $DISTRITO;
    }

    public function getDOMICILIO() {
        return $this->DOMICILIO;
    }

    public function setDOMICILIO($DOMICILIO) {
        $this->DOMICILIO = $DOMICILIO;
    }

    public function getANO_RESIDENCIA() {
        return $this->ANO_RESIDENCIA;
    }

    public function setANO_RESIDENCIA($ANO_RESIDENCIA) {
        $this->ANO_RESIDENCIA = $ANO_RESIDENCIA;
    }

    public function getCELULAR() {
        return $this->CELULAR;
    }

    public function setCELULAR($CELULAR) {
        $this->CELULAR = $CELULAR;
    }

    public function getFIJO() {
        return $this->FIJO;
    }

    public function setFIJO($FIJO) {
        $this->FIJO = $FIJO;
    }

    public function getRPM() {
        return $this->RPM;
    }

    public function setRPM($RPM) {
        $this->RPM = $RPM;
    }

    public function getRCP() {
        return $this->RCP;
    }

    public function setRCP($RCP) {
        $this->RCP = $RCP;
    }

    public function getEMAIL() {
        return $this->EMAIL;
    }

    public function setEMAIL($EMAIL) {
        $this->EMAIL = $EMAIL;
    }

    public function getRELIGION() {
        return $this->RELIGION;
    }

    public function setRELIGION($RELIGION) {
        $this->RELIGION = $RELIGION;
    }

    public function getALERGICOMEDICAMENTO1() {
        return $this->ALERGICOMEDICAMENTO1;
    }

    public function setALERGICOMEDICAMENTO1($ALERGICOMEDICAMENTO1) {
        $this->ALERGICOMEDICAMENTO1 = $ALERGICOMEDICAMENTO1;
    }

    public function getALERGICOMEDICAMENTO2() {
        return $this->ALERGICOMEDICAMENTO2;
    }

    public function setALERGICOMEDICAMENTO2($ALERGICOMEDICAMENTO2) {
        $this->ALERGICOMEDICAMENTO2 = $ALERGICOMEDICAMENTO2;
    }

    public function getALERGICOMEDICAMENTO3() {
        return $this->ALERGICOMEDICAMENTO3;
    }

    public function setALERGICOMEDICAMENTO3($ALERGICOMEDICAMENTO3) {
        $this->ALERGICOMEDICAMENTO3 = $ALERGICOMEDICAMENTO3;
    }

    public function getALERGICOMEDICAMENTO4() {
        return $this->ALERGICOMEDICAMENTO4;
    }

    public function setALERGICOMEDICAMENTO4($ALERGICOMEDICAMENTO4) {
        $this->ALERGICOMEDICAMENTO4 = $ALERGICOMEDICAMENTO4;
    }

    public function getALERGIA_POLVO_ACARO() {
        return $this->ALERGIA_POLVO_ACARO;
    }

    public function setALERGIA_POLVO_ACARO($ALERGIA_POLVO_ACARO) {
        $this->ALERGIA_POLVO_ACARO = $ALERGIA_POLVO_ACARO;
    }

    public function getHUMEDAD_HONGOS() {
        return $this->HUMEDAD_HONGOS;
    }

    public function setHUMEDAD_HONGOS($HUMEDAD_HONGOS) {
        $this->HUMEDAD_HONGOS = $HUMEDAD_HONGOS;
    }

    public function getTIPO_SANGRE() {
        return $this->TIPO_SANGRE;
    }

    public function setTIPO_SANGRE($TIPO_SANGRE) {
        $this->TIPO_SANGRE = $TIPO_SANGRE;
    }

    public function getBECADO() {
        return $this->BECADO;
    }

    public function setBECADO($BECADO) {
        $this->BECADO = $BECADO;
    }

    public function getTIPO_BECA() {
        return $this->TIPO_BECA;
    }

    public function setTIPO_BECA($TIPO_BECA) {
        $this->TIPO_BECA = $TIPO_BECA;
    }

    public function getRESOLUCION_BECA() {
        return $this->RESOLUCION_BECA;
    }

    public function setRESOLUCION_BECA($RESOLUCION_BECA) {
        $this->RESOLUCION_BECA = $RESOLUCION_BECA;
    }

    public function getCANT_HERMANOS() {
        return $this->CANT_HERMANOS;
    }

    public function setCANT_HERMANOS($CANT_HERMANOS) {
        $this->CANT_HERMANOS = $CANT_HERMANOS;
    }

    public function getLUGAR_HERMANOS() {
        return $this->LUGAR_HERMANOS;
    }

    public function setLUGAR_HERMANOS($LUGAR_HERMANOS) {
        $this->LUGAR_HERMANOS = $LUGAR_HERMANOS;
    }

    public function getCOLEGIOPROCEDENTE() {
        return $this->COLEGIOPROCEDENTE;
    }

    public function setCOLEGIOPROCEDENTE($COLEGIOPROCEDENTE) {
        $this->COLEGIOPROCEDENTE = $COLEGIOPROCEDENTE;
    }

public function InfoAlumno($codepersona) {
    $this->CONECT();
        $query=  mysql_query("
            select pe.codigo,al.paterno,al.materno,al.nombres,al.sexo,dse.codigo,dse.nomnivel,dse.grado,dse.nombreseccion,dse.TUTOR,dse.AUXILIAR
            from Persona pe
            inner join Alumno al on pe.codigo=al.idpersona
            inner join descripcionseccion dse on al.cod_seccion=dse.codigo 
            where pe.codigo=".$codepersona);
     $this->CLOSE();
        return $query;
    }
    
public function UserAlumSeccion($idperson) {
    $this->CONECT();
    $queryuser= mysql_query("
        select al.codigo as CodeAlumno,alse.idalumnoseccion
        from Alumno al
        inner join Alumno_Seccion alse on al.codigo=alse.idalumno
        where al.idpersona=".$idperson);
    $this->CLOSE();
    return $queryuser;
    }
    
}

?>
