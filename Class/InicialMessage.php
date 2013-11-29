<?php
/**
 * Description of InicialMessage
 *
 * @author lncc01
 */
class InicialMessage extends Conection{
    private $CODE;
    private $CODEALSEC;
    private $MESSAGEPC;
    private $MESSAGENEURO;
    private $MESSAGEEF;

    public function getCODE() {
        return $this->CODE;
    }

    public function setCODE($CODE) {
        $this->CODE = $CODE;
    }

    public function getCODEALSEC() {
        return $this->CODEALSEC;
    }

    public function setCODEALSEC($CODEALSEC) {
        $this->CODEALSEC = $CODEALSEC;
    }

    public function getMESSAGEPC() {
        return $this->MESSAGEPC;
    }

    public function setMESSAGEPC($MESSAGEPC) {
        $this->MESSAGEPC = $MESSAGEPC;
    }

    public function getMESSAGENEURO() {
        return $this->MESSAGENEURO;
    }

    public function setMESSAGENEURO($MESSAGENEURO) {
        $this->MESSAGENEURO = $MESSAGENEURO;
    }

    public function getMESSAGEEF() {
        return $this->MESSAGEEF;
    }

    public function setMESSAGEEF($MESSAGEEF) {
        $this->MESSAGEEF = $MESSAGEEF;
    }

    public function ALUMNOSDEMITUTORIA($codigodocente,$area){
       $view='';
       switch ($area):
       case 1:$view='asep.message_pc';break;
       case 2:$view='asep.message_neuro';break;
       case 3:$view='asep.message_edufi';break;
       default :$view='';
       endswitch;
       $cone=new Conection();
       $cone->CONECT();
       $misalumnos=mysql_query('
       SELECT ase.idalumnoseccion, ase.nroorden, p.paterno, p.materno, p.nombres,
              '.$view.'
	FROM Alumno_Seccion ase
        INNER JOIN InicialMessage asep
            ON ase.idalumnoseccion=asep.code
	INNER JOIN Alumno ae
            ON ase.idalumno = ae.codigo
	INNER JOIN Persona p
            ON ae.idpersona = p.codigo
	INNER JOIN Seccion s
            ON ase.idseccion = s.codigo
	WHERE s.cod_tutor='.$codigodocente.'  order by ase.nroorden;');
       $cone->CLOSE();
       unset ($cone);
       return $misalumnos;
   }

public function GRABAR() {
 try {
    $this->CONECT();
    mysql_query('Call Sp_inicialmessage(\''.$this->CODE.'\',\''.$this->CODEALSEC.'\',
        \''.$this->MESSAGEPC.'\',\''.$this->MESSAGENEURO.'\',\''.$this->MESSAGEEF.'\');')
    or die(mysql_error());
    $this->CLOSE();
 } catch (Exception $exc) {
      echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
 }
}

public function GRABAR_PC() {
 try {
    $this->CONECT();
    mysql_query('Call Sp_inicialmessage_pc(\''.$this->CODE.'\',\''.$this->CODEALSEC.'\',
        \''.$this->MESSAGEPC.'\');')
    or die(mysql_error());
    $this->CLOSE();
 } catch (Exception $exc) {
      echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
 }
}

public function GRABAR_NEURO() {
 try {
    $this->CONECT();
    mysql_query('Call Sp_inicialmessage_neuro(\''.$this->CODE.'\',\''.$this->CODEALSEC.'\',
        \''.$this->MESSAGENEURO.'\');')
    or die(mysql_error());
    $this->CLOSE();
 } catch (Exception $exc) {
      echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
 }
}

public function GRABAR_EDUFI() {
 try {
    $this->CONECT();
    mysql_query('Call Sp_inicialmessage_edufi(\''.$this->CODE.'\',\''.$this->CODEALSEC.'\',
        \''.$this->MESSAGEEF.'\');')
    or die(mysql_error());
    $this->CLOSE();
 } catch (Exception $exc) {
      echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
 }
}


}
?>
