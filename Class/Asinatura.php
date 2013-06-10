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
    
    public function ListaDescriptiva($grado,$nomnivel) {
        $this->CONECT();
        $lista=  mysql_query("select * from descripcionsinature where grado='".$grado."' and nomnivel='".$nomnivel."';");
        $this->CLOSE();
        return $lista;
    }
    
    public function ListaAreas() {
        $this->CONECT();
        $lista=  mysql_query("");
        $this->CLOSE();
        return $lista;
    }
    
    public function describesinatu($idsection,$idsinau) {
        $this->CONECT();
        $queryds=  mysql_query("select r.codigo,dr.paterno,dr.materno,dr.nombres,dr.CODEASINA,dr.asinatura
                                from Registro r inner join describeregistro dr
                                on r.codigo=dr.codigo
                                where r.codigoseccion='".$idsection."' and r.codigoasinatura='".$idsinau."'");
        $this->CLOSE();
        return $queryds;
    }

    public function grados_niveles($nivel) {
        $this->CONECT();
        $queryini=mysql_query("
            Select distinct(grado) from descripcionseccion
            where nomnivel='$nivel';
        ");
        $this->CLOSE();
        return $queryini;
    }

    public function sectiondetails($nivel,$grado) {
        $this->CONECT();
        $querysections=mysql_query("
            select  ds.codigo, ds.nomnivel, ds.grado, ds.nombreseccion, ds.TUTOR, ds.AUXILIAR,sum(a.paterno)
            from descripcionseccion ds
            inner join Alumno a on ds.codigo=a.cod_seccion
            where nomnivel='$nivel' and grado='$grado';
            ");
        $this->CLOSE();
        return $querysections;
    }
    
}

?>
