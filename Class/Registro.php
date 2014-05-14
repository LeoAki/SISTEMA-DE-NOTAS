<?php
/**
 * Description of Registro
 *
 * @author aquino
 */
require_once 'Conection.php';
class Registro extends Conection{
    
    private $CODIGO;
    private $CODIGOSECCION;
    private $CODIGODOCENTE;
    private $CODIGOASINATURA;
    
    public function getCODIGO() {
        return $this->CODIGO;
    }

    public function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    public function getCODIGOSECCION() {
        return $this->CODIGOSECCION;
    }

    public function setCODIGOSECCION($CODIGOSECCION) {
        $this->CODIGOSECCION = $CODIGOSECCION;
    }

    public function getCODIGODOCENTE() {
        return $this->CODIGODOCENTE;
    }

    public function setCODIGODOCENTE($CODIGODOCENTE) {
        $this->CODIGODOCENTE = $CODIGODOCENTE;
    }

    public function getCODIGOASINATURA() {
        return $this->CODIGOASINATURA;
    }

    public function setCODIGOASINATURA($CODIGOASINATURA) {
        $this->CODIGOASINATURA = $CODIGOASINATURA;
    }

    function setDATA($codigo,$codigoseccion,$codigodocente,$codigoasinatura) {
        $this->CODIGO=$codigo;
        $this->CODIGOSECCION=$codigoseccion;
        $this->CODIGODOCENTE=$codigodocente;
        $this->CODIGOASINATURA=$codigoasinatura;
    }
    
    function GRABAR() {
        try {
            $this->CONECT();
            mysql_query("Call Sp_Registro ('".$this->CODIGO."','".$this->CODIGOSECCION."',
                                           '".$this->CODIGODOCENTE."','".$this->CODIGOASINATURA."')") 
                                            or die(mysql_error());
            $this->CLOSE();
            } catch (Exception $exc) {
                    echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
                }
    }
    
    function Listar() {
        $cone=new Conection();
        $cone->CONECT();
        $query=  mysql_query("Select * from Registro");
        $cone->CLOSE();
        unset($cone);
        return $query;
    }

    function Updateregistro1($param) {
        $conc=new Conection();
        $conc->CONECT();
        $query=mysql_query("
            update Registro set activo1=0
            where codigo=$param;
            ");
        $conc->CLOSE();
        return $query;
    }

    function Updateregistro($param) {
        $conc=new Conection();
        $conc->CONECT();
        $query=mysql_query("
            update Registro set activo2=3
            where codigo=$param;
            ");
        $conc->CLOSE();
        return $query;
    }
    function Updateregistro3($param) {
        $conc=new Conection();
        $conc->CONECT();
        $query=mysql_query("
            update Registro set activo3=3
            where codigo=$param;
            ");
        $conc->CLOSE();
        return $query;
    }    
    function Updateregistro4($param) {
        $conc=new Conection();
        $conc->CONECT();
        $query=mysql_query("
            update Registro set activo4=3
            where codigo=$param;
            ");
        $conc->CLOSE();
        return $query;
    }
    
}

?>
