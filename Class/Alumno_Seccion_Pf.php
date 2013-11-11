<?php
/**
 * Description of Alumno_Seccion_Pf
 *
 * @author lncc01
 */
require_once 'Conection.php';
class Alumno_Seccion_Pf extends Conection{
    private $CODIGO;
    private $CODIGOAS;
    private $UPF1;    private $UPF2;    private $UPF3;    private $UPF4;
    private $UPF5;    private $UPF6;    private $UPF7;    private $UPF8;
    private $DPF1;    private $DPF2;    private $DPF3;    private $DPF4;
    private $DPF5;    private $DPF6;    private $DPF7;    private $DPF8;
    private $TPF1;    private $TPF2;    private $TPF3;    private $TPF4;
    private $TPF5;    private $TPF6;    private $TPF7;    private $TPF8;
    private $CPF1;    private $CPF2;    private $CPF3;    private $CPF4;
    private $CPF5;    private $CPF6;    private $CPF7;    private $CPF8;

    private $TPF9;    private $CPF9;

    //new atributes ***********************************
    public function getTPF9() {
        return $this->TPF9;
    }

    public function setTPF9($TPF9) {
        $this->TPF9 = $TPF9;
    }

    public function getCPF9() {
        return $this->CPF9;
    }

    public function setCPF9($CPF9) {
        $this->CPF9 = $CPF9;
    }
    //end new atributes *******************************
    
    public function getCODIGO() {
        return $this->CODIGO;
    }

    public function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    public function getCODIGOAS() {
        return $this->CODIGOAS;
    }

    public function setCODIGOAS($CODIGOAS) {
        $this->CODIGOAS = $CODIGOAS;
    }

    public function getUPF1() {
        return $this->UPF1;
    }

    public function setUPF1($UPF1) {
        $this->UPF1 = $UPF1;
    }

    public function getUPF2() {
        return $this->UPF2;
    }

    public function setUPF2($UPF2) {
        $this->UPF2 = $UPF2;
    }

    public function getUPF3() {
        return $this->UPF3;
    }

    public function setUPF3($UPF3) {
        $this->UPF3 = $UPF3;
    }

    public function getUPF4() {
        return $this->UPF4;
    }

    public function setUPF4($UPF4) {
        $this->UPF4 = $UPF4;
    }

    public function getUPF5() {
        return $this->UPF5;
    }

    public function setUPF5($UPF5) {
        $this->UPF5 = $UPF5;
    }

    public function getUPF6() {
        return $this->UPF6;
    }

    public function setUPF6($UPF6) {
        $this->UPF6 = $UPF6;
    }

    public function getUPF7() {
        return $this->UPF7;
    }

    public function setUPF7($UPF7) {
        $this->UPF7 = $UPF7;
    }

    public function getUPF8() {
        return $this->UPF8;
    }

    public function setUPF8($UPF8) {
        $this->UPF8 = $UPF8;
    }

    public function getDPF1() {
        return $this->DPF1;
    }

    public function setDPF1($DPF1) {
        $this->DPF1 = $DPF1;
    }

    public function getDPF2() {
        return $this->DPF2;
    }

    public function setDPF2($DPF2) {
        $this->DPF2 = $DPF2;
    }

    public function getDPF3() {
        return $this->DPF3;
    }

    public function setDPF3($DPF3) {
        $this->DPF3 = $DPF3;
    }

    public function getDPF4() {
        return $this->DPF4;
    }

    public function setDPF4($DPF4) {
        $this->DPF4 = $DPF4;
    }

    public function getDPF5() {
        return $this->DPF5;
    }

    public function setDPF5($DPF5) {
        $this->DPF5 = $DPF5;
    }

    public function getDPF6() {
        return $this->DPF6;
    }

    public function setDPF6($DPF6) {
        $this->DPF6 = $DPF6;
    }

    public function getDPF7() {
        return $this->DPF7;
    }

    public function setDPF7($DPF7) {
        $this->DPF7 = $DPF7;
    }

    public function getDPF8() {
        return $this->DPF8;
    }

    public function setDPF8($DPF8) {
        $this->DPF8 = $DPF8;
    }

    public function getTPF1() {
        return $this->TPF1;
    }

    public function setTPF1($TPF1) {
        $this->TPF1 = $TPF1;
    }

    public function getTPF2() {
        return $this->TPF2;
    }

    public function setTPF2($TPF2) {
        $this->TPF2 = $TPF2;
    }

    public function getTPF3() {
        return $this->TPF3;
    }

    public function setTPF3($TPF3) {
        $this->TPF3 = $TPF3;
    }

    public function getTPF4() {
        return $this->TPF4;
    }

    public function setTPF4($TPF4) {
        $this->TPF4 = $TPF4;
    }

    public function getTPF5() {
        return $this->TPF5;
    }

    public function setTPF5($TPF5) {
        $this->TPF5 = $TPF5;
    }

    public function getTPF6() {
        return $this->TPF6;
    }

    public function setTPF6($TPF6) {
        $this->TPF6 = $TPF6;
    }

    public function getTPF7() {
        return $this->TPF7;
    }

    public function setTPF7($TPF7) {
        $this->TPF7 = $TPF7;
    }

    public function getTPF8() {
        return $this->TPF8;
    }

    public function setTPF8($TPF8) {
        $this->TPF8 = $TPF8;
    }

    public function getCPF1() {
        return $this->CPF1;
    }

    public function setCPF1($CPF1) {
        $this->CPF1 = $CPF1;
    }

    public function getCPF2() {
        return $this->CPF2;
    }

    public function setCPF2($CPF2) {
        $this->CPF2 = $CPF2;
    }

    public function getCPF3() {
        return $this->CPF3;
    }

    public function setCPF3($CPF3) {
        $this->CPF3 = $CPF3;
    }

    public function getCPF4() {
        return $this->CPF4;
    }

    public function setCPF4($CPF4) {
        $this->CPF4 = $CPF4;
    }

    public function getCPF5() {
        return $this->CPF5;
    }

    public function setCPF5($CPF5) {
        $this->CPF5 = $CPF5;
    }

    public function getCPF6() {
        return $this->CPF6;
    }

    public function setCPF6($CPF6) {
        $this->CPF6 = $CPF6;
    }

    public function getCPF7() {
        return $this->CPF7;
    }

    public function setCPF7($CPF7) {
        $this->CPF7 = $CPF7;
    }

    public function getCPF8() {
        return $this->CPF8;
    }

    public function setCPF8($CPF8) {
        $this->CPF8 = $CPF8;
    }

    public function GRABAR() {
        try {
        $this->CONECT();
        mysql_query('Call SP_Alumno_Seccion_Pf(\''.$this->CODIGO.'\',\''.$this->CODIGOAS.'\',\''.$this->UPF1.'\',\''.$this->UPF2.'\',\''.$this->UPF3.'\',
                                                      \''.$this->UPF4.'\',\''.$this->UPF5.'\',\''.$this->UPF6.'\',\''.$this->UPF7.'\',\''.$this->UPF8.'\',
                                                      \''.$this->DPF1.'\',\''.$this->DPF2.'\',\''.$this->DPF3.'\',\''.$this->DPF4.'\',\''.$this->DPF5.'\',
                                                      \''.$this->DPF6.'\',\''.$this->DPF7.'\',\''.$this->DPF8.'\',\''.$this->TPF1.'\',\''.$this->TPF2.'\',
                                                      \''.$this->TPF3.'\',\''.$this->TPF4.'\',\''.$this->TPF5.'\',\''.$this->TPF6.'\',\''.$this->TPF7.'\',
                                                      \''.$this->TPF8.'\',\''.$this->CPF1.'\',\''.$this->CPF2.'\',\''.$this->CPF3.'\',\''.$this->CPF4.'\',
                                                      \''.$this->CPF5.'\',\''.$this->CPF6.'\',\''.$this->CPF7.'\',\''.$this->CPF8.'\',
                                                      \''.$this->TPF9.'\',\''.$this->CPF9.'\');')or die(mysql_error());
        $this->CLOSE();
        } catch (Exception $exc) {
              echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
        }
    }
    
    public function LISTAR($letra) {
        $this->CONECT();
        $cadena=  mysql_query("
            
            ");
        $this->CLOSE();
        return $cadena;
    }
    
       public function ALUMNOSDEMITUTORIA($codigodocente){
       $cone=new Conection();
       $cone->CONECT();
       $misalumnos=mysql_query('
       SELECT ase.idalumnoseccion, ase.nroorden, p.paterno, p.materno, p.nombres, 
              asep.1pf1,asep.1pf2,asep.1pf3,asep.1pf4,asep.1pf5,asep.1pf6,asep.1pf7,asep.1pf8,
              asep.2pf1,asep.2pf2,asep.2pf3,asep.2pf4,asep.2pf5,asep.2pf6,asep.2pf7,asep.2pf8,
              asep.3pf1,asep.3pf2,asep.3pf3,asep.3pf4,asep.3pf5,asep.3pf6,asep.3pf7,asep.3pf8,
              asep.4pf1,asep.4pf2,asep.4pf3,asep.4pf4,asep.4pf5,asep.4pf6,asep.4pf7,asep.4pf8,
              asep.3pf9,asep.4pf9
	FROM Alumno_Seccion ase
        INNER JOIN Alumno_Seccion_Pf asep ON ase.idalumnoseccion=asep.codigo
	INNER JOIN Alumno ae ON ase.idalumno = ae.codigo
	INNER JOIN Persona p ON ae.idpersona = p.codigo
	INNER JOIN Seccion s ON ase.idseccion = s.codigo
	WHERE s.cod_tutor='.$codigodocente.'  order by ase.nroorden;');
       $cone->CLOSE();
       unset ($cone);
       return $misalumnos;
   }
    
    
}
?>
