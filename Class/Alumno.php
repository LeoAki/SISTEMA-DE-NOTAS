<?php
/**
 * Description of Alumno
 *
 * @author aquino
 */
require_once 'Conection.php';
class Alumno extends Conection{
    private $CODIGO;
    private $SECCION;
    private $PATERNO;
    private $MATERNO;
    private $NOMBRES;
    private $NACIONALIDAD;
    private $SEXO;
    private $DNI;
    private $FECHAINSCRIPCION;
    private $MATRICULANTE;
    //Datos del nacimiento
    private $FECHA_NACIMIENTO;
    private $DEPARTAMENTO_NAC;
    private $PROVINCIA_NAC;
    private $DISTRITO_NAC;
    private $LOCALIDAD_NAC;
    private $TIPODEPARTO;
    private $DESCRIPCION_PARTO;
    //Ubigeo
    private $DEPARTAMENTO;
    private $PROVINCIA;
    private $DISTRITO;
    private $DOMICILIO;
    private $ANO_RESIDENCIA;
    //Contacto
    private $CELULAR;
    private $FIJO;
    private $RPM;
    private $RCP;
    private $EMAIL;
    //Observaciones
    private $RELIGION;
    private $ALERGICOMEDICAMENTO1;
    private $ALERGICOMEDICAMENTO2;
    private $ALERGICOMEDICAMENTO3;
    private $ALERGICOMEDICAMENTO4;
    private $ALERGIAPOLVO_ACAROS;
    private $ALERGIA_HUMEDAD_HONGOS;
    private $TIPODESANGRE;
    private $BECADO;
    private $TIPO_BECA;
    private $RESOLUCIONBECA;
    private $CANT_HERMANOS;
    private $LUGAR_HERMANOS;
    //Procedencia
    private $COLEGIOPROCEDENTE;

    public function getCODIGO() {
        return $this->CODIGO;
    }

    public function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    public function getSECCION() {
        return $this->SECCION;
    }

    public function setSECCION($SECCION) {
        $this->SECCION = $SECCION;
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

    public function getFECHA_NACIMIENTO() {
        return $this->FECHA_NACIMIENTO;
    }

    public function setFECHA_NACIMIENTO($FECHA_NACIMIENTO) {
        $this->FECHA_NACIMIENTO = $FECHA_NACIMIENTO;
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

    public function getALERGIAPOLVO_ACAROS() {
        return $this->ALERGIAPOLVO_ACAROS;
    }

    public function setALERGIAPOLVO_ACAROS($ALERGIAPOLVO_ACAROS) {
        $this->ALERGIAPOLVO_ACAROS = $ALERGIAPOLVO_ACAROS;
    }

    public function getALERGIA_HUMEDAD_HONGOS() {
        return $this->ALERGIA_HUMEDAD_HONGOS;
    }

    public function setALERGIA_HUMEDAD_HONGOS($ALERGIA_HUMEDAD_HONGOS) {
        $this->ALERGIA_HUMEDAD_HONGOS = $ALERGIA_HUMEDAD_HONGOS;
    }

    public function getTIPODESANGRE() {
        return $this->TIPODESANGRE;
    }

    public function setTIPODESANGRE($TIPODESANGRE) {
        $this->TIPODESANGRE = $TIPODESANGRE;
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

    public function getRESOLUCIONBECA() {
        return $this->RESOLUCIONBECA;
    }

    public function setRESOLUCIONBECA($RESOLUCIONBECA) {
        $this->RESOLUCIONBECA = $RESOLUCIONBECA;
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

    public function setDATA($codigo,$cod_seccion,$paterno,$materno,$nombres,$nacionalidad,$sexo,$dni,
       $fechainscripcion,$matriculante,$fechanacimiento,$departamento_nac,$provincia_nac,$distrito_nac,
       $localidad_nac,$tipodeparto,$descripcion_parto,$departamento,$provincia,$distrito,$domicilio,
       $ano_residencia,$celular,$fijo,$rpm,$rpc,$email,$religion,$am1,$am2,$am3,$am4,$apolvoacaro,
       $ahumedadhongo,$tipo_sangre,$becado,$tipo_beca,$resolucion_beca,$cant_hermanos,$lugar_hermanos,
       $colegioprocedente) {
        $this->CODIGO=$codigo;
        $this->SECCION=$cod_seccion;
        $this->PATERNO=$paterno;
        $this->MATERNO=$materno;
        $this->NOMBRES=$nombres;
        $this->NACIONALIDAD=$nacionalidad;
        $this->SEXO=$sexo;
        $this->DNI=$dni;
        $this->FECHAINSCRIPCION=$fechainscripcion;
        $this->MATRICULANTE=$matriculante;
        $this->FECHA_NACIMIENTO=$fechanacimiento;
        $this->DEPARTAMENTO_NAC=$departamento_nac;
        $this->PROVINCIA_NAC=$provincia_nac;
        $this->DISTRITO_NAC=$distrito_nac;
        $this->LOCALIDAD_NAC=$localidad_nac;
        $this->TIPODEPARTO=$tipodeparto;
        $this->DESCRIPCION_PARTO=$descripcion_parto;
        $this->DEPARTAMENTO=$departamento;
        $this->PROVINCIA=$provincia;
        $this->DISTRITO=$distrito;
        $this->DOMICILIO=$domicilio;
        $this->ANO_RESIDENCIA=$ano_residencia;
        $this->CELULAR=$celular;
        $this->FIJO=$fijo;
        $this->RPM=$rpm;
        $this->RCP=$rpc;
        $this->EMAIL=$email;
        $this->RELIGION=$religion;
        $this->ALERGICOMEDICAMENTO1=$am1;
        $this->ALERGICOMEDICAMENTO2=$am2;
        $this->ALERGICOMEDICAMENTO3=$am3;
        $this->ALERGICOMEDICAMENTO4=$am4;
        $this->ALERGIAPOLVO_ACAROS=$apolvoacaro;
        $this->ALERGIA_HUMEDAD_HONGOS=$ahumedadhongo;
        $this->TIPODESANGRE=$tipo_sangre;
        $this->BECADO=$becado;
        $this->TIPO_BECA=$tipo_beca;
        $this->RESOLUCIONBECA=$resolucion_beca;
        $this->CANT_HERMANOS=$cant_hermanos;
        $this->LUGAR_HERMANOS=$lugar_hermanos;
        $this->COLEGIOPROCEDENTE=$colegioprocedente;
    }

    public function BUSCAR($codigo){
        $conectar=new Conection();
        $conectar->CONECT();
        $ALUMNO=new Alumno();
        $query=  mysql_query("select * from Alumno where codigo=".$codigo);
        if($query){
            while ($row = mysql_fetch_array($query)) {
                $ALUMNO->setDATA($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],
                        $row[10],$row[11],$row[12],$row[13],$row[14],$row[15],$row[16],$row[17],$row[18],$row[19],
                        $row[20],$row[21],$row[22],$row[23],$row[24],$row[25],$row[26],$row[27],$row[28],$row[29],
                        $row[30],$row[31],$row[32],$row[33],$row[34],$row[35],$row[36],$row[37],$row[38],$row[39],
                        $row[40]);
            }
        }else {
            echo 'NO SE ENCONTRO NINGUN REGISTRO';            
        }
        $conectar->CLOSE();
        unset($conectar);
        return $ALUMNO;
    }
    
    public function GRABAR() {
        try {
            $this->CONECT();
            mysql_query("Call Sp_alumno('".$this->CODIGO."','".$this->SECCION."','".$this->PATERNO."','".$this->MATERNO."','".$this->NOMBRES."',
                                        '".$this->NACIONALIDAD."','".$this->SEXO."','".$this->DNI."','".$this->FECHAINSCRIPCION."','".$this->MATRICULANTE."',
                                        '".$this->FECHA_NACIMIENTO."','".$this->DEPARTAMENTO_NAC."','".$this->PROVINCIA_NAC."','".$this->DISTRITO_NAC."','".$this->LOCALIDAD_NAC."',
                                        '".$this->TIPODEPARTO."','".$this->DESCRIPCION_PARTO."','".$this->DEPARTAMENTO."','".$this->PROVINCIA."','".$this->DISTRITO."',
                                        '".$this->DOMICILIO."','".$this->ANO_RESIDENCIA."','".$this->CELULAR."','".$this->FIJO."','".$this->RPM."',
                                        '".$this->RCP."','".$this->EMAIL."','".$this->RELIGION."','".$this->ALERGICOMEDICAMENTO1."','".$this->ALERGICOMEDICAMENTO2."',
                                        '".$this->ALERGICOMEDICAMENTO3."','".$this->ALERGICOMEDICAMENTO4."','".$this->ALERGIAPOLVO_ACAROS."','".$this->ALERGIA_HUMEDAD_HONGOS."','".$this->TIPODESANGRE."',
                                        '".$this->BECADO."','".$this->TIPO_BECA."','".$this->RESOLUCIONBECA."','".$this->CANT_HERMANOS."','".$this->LUGAR_HERMANOS."',
                                        '".$this->COLEGIOPROCEDENTE."')") or die(mysql_error());
            $this->CLOSE();
        } catch (Exception $exc) {
            echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
        }
    }
    
    public function LISTAR() {
        $cone=new Conection();
        $cone->CONECT();
        $query=  mysql_query("select
                            a.codigo,
                            a.cod_seccion,
                            s.nomnivel,
                            concat(s.grado , ' ' , s.nombreseccion) as Seccion,
                            a.paterno,
                            a.materno,
                            a.nombres,
                            a.dni,
                            a.domicilio,
                            concat(a.celular , ' ' , a.fijo)as TELEFONO,
                            a.email,
                            a.colegioprocedente
                            from Alumno a
                            inner join
                            descripcionseccion s
                            on a.cod_seccion=s.codigo;");
        $cone->CLOSE();
        unset($cone);
        return $query;
    }
        
}
?>
