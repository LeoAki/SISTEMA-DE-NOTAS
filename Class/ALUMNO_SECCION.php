<?php
/**
 * Description of ALUMNO_SECCION
 *
 * @author lncc01
 */
require_once 'Conection.php';
class ALUMNO_SECCION extends Conection{

    private $IDALUMNOSECCION;
    private $IDSECCION;
    private $NROORDEN;
    private $IDALUMNO;
    private $SITUACION;
    private $MSN1;
    private $MSN2;
    private $MSN3;
    private $MSN4;
    private $FJ1;
    private $FI1;
    private $T1;
    private $FJ2;
    private $FI2;
    private $T2;
    private $FJ3;
    private $FI3;
    private $T3;
    private $FJ4;
    private $FI4;
    private $T4;

    public function getIDALUMNOSECCION() {
        return $this->IDALUMNOSECCION;
    }

    public function setIDALUMNOSECCION($IDALUMNOSECCION) {
        $this->IDALUMNOSECCION = $IDALUMNOSECCION;
    }

    public function getIDSECCION() {
        return $this->IDSECCION;
    }

    public function setIDSECCION($IDSECCION) {
        $this->IDSECCION = $IDSECCION;
    }

    public function getNROORDEN() {
        return $this->NROORDEN;
    }

    public function setNROORDEN($NROORDEN) {
        $this->NROORDEN = $NROORDEN;
    }

    public function getIDALUMNO() {
        return $this->IDALUMNO;
    }

    public function setIDALUMNO($IDALUMNO) {
        $this->IDALUMNO = $IDALUMNO;
    }

    public function getSITUACION() {
        return $this->SITUACION;
    }

    public function setSITUACION($SITUACION) {
        $this->SITUACION = $SITUACION;
    }

    public function getMSN1() {
        return $this->MSN1;
    }

    public function setMSN1($MSN1) {
        $this->MSN1 = $MSN1;
    }

    public function getMSN2() {
        return $this->MSN2;
    }

    public function setMSN2($MSN2) {
        $this->MSN2 = $MSN2;
    }

    public function getMSN3() {
        return $this->MSN3;
    }

    public function setMSN3($MSN3) {
        $this->MSN3 = $MSN3;
    }

    public function getMSN4() {
        return $this->MSN4;
    }

    public function setMSN4($MSN4) {
        $this->MSN4 = $MSN4;
    }

    public function getFJ1() {
        return $this->FJ1;
    }

    public function setFJ1($FJ1) {
        $this->FJ1 = $FJ1;
    }

    public function getFI1() {
        return $this->FI1;
    }

    public function setFI1($FI1) {
        $this->FI1 = $FI1;
    }

    public function getT1() {
        return $this->T1;
    }

    public function setT1($T1) {
        $this->T1 = $T1;
    }

    public function getFJ2() {
        return $this->FJ2;
    }

    public function setFJ2($FJ2) {
        $this->FJ2 = $FJ2;
    }

    public function getFI2() {
        return $this->FI2;
    }

    public function setFI2($FI2) {
        $this->FI2 = $FI2;
    }

    public function getT2() {
        return $this->T2;
    }

    public function setT2($T2) {
        $this->T2 = $T2;
    }

    public function getFJ3() {
        return $this->FJ3;
    }

    public function setFJ3($FJ3) {
        $this->FJ3 = $FJ3;
    }

    public function getFI3() {
        return $this->FI3;
    }

    public function setFI3($FI3) {
        $this->FI3 = $FI3;
    }

    public function getT3() {
        return $this->T3;
    }

    public function setT3($T3) {
        $this->T3 = $T3;
    }

    public function getFJ4() {
        return $this->FJ4;
    }

    public function setFJ4($FJ4) {
        $this->FJ4 = $FJ4;
    }

    public function getFI4() {
        return $this->FI4;
    }

    public function setFI4($FI4) {
        $this->FI4 = $FI4;
    }

    public function getT4() {
        return $this->T4;
    }

    public function setT4($T4) {
        $this->T4 = $T4;
    }

    public function SetDATA($idalumnoseccion,$idseccion,$nroorden,$idalumno,$situacion,$msn1,$msn2,$msn3,$msn4,
                            $fj1,$fi1,$t1,$fj2,$fi2,$t2,$fj3,$fi3,$t3,$fj4,$fi4,$t4)
    {
        $this->IDALUMNOSECCION=$idalumnoseccion;
        $this->IDSECCION=$idseccion;
        $this->NROORDEN=$nroorden;
        $this->IDALUMNO=$idalumno;
        $this->SITUACION=$situacion;

        $this->MSN1=$msn1;
        $this->MSN2=$msn2;
        $this->MSN3=$msn3;
        $this->MSN4=$msn4;
        
        $this->FJ1=$fj1;
        $this->FI1=$fi1;
        $this->T1=$t1;

        $this->FJ2=$fj2;
        $this->FI2=$fi2;
        $this->T2=$t2;
        
        $this->FJ3=$fj3;
        $this->FI3=$fj3;
        $this->T3=$t3;

        $this->FJ4=$fj4;
        $this->FI4=$fi4;
        $this->T4=$t4;
    }

    public function UPDATE($codigoalumnoseccion){
        try {
            $this->CONECT();
            mysql_query('UPDATE Alumno_Seccion SET msn4=\''.$this->MSN4.'\' where idalumnoseccion=\''.$codigoalumnoseccion.'\'') or die (mysql_error());
            $this->CLOSE();
        } catch (Exception $exc) {
            echo 'Ups! Lo lamentamos ah ocurrido el siguiente error: '.$exc;
        }
   }
    public function UPDATEFIT($codigoalumnoseccion2){
            try {
                $this->CONECT();
                mysql_query("UPDATE Alumno_Seccion SET fj3='".$this->FJ3."', fi3='".$this->FI3."', t3='".$this->T3."'
                    where idalumnoseccion='".$codigoalumnoseccion2."'") or
                        die (mysql_error());
                $this->CLOSE();
            } catch (Exception $exc) {
                echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
            }
   }
   public function Listdetallealumsection($persona) {
       $cone= new Conection();
       $cone->CONECT();
       $detailals=mysql_query(" select al.idalumnoseccion,al.situacion,
                                    al.fj1,al.fi1,al.t1,
                                    al.fj2,al.fi2,al.t2,
                                    al.fj3,al.fi3,al.t3,
                                    al.fj4,al.fi4,al.t4
                                    from
                                    Alumno_Seccion al
                                    inner join Alumno au ON al.idalumno = au.codigo
                                    where au.idpersona='".$persona."';");
       $cone->CLOSE();
       return $detailals;
       
      }

}
?>