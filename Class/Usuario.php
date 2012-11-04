<?php
/**
 * Description of Usuario
 *
 * @author aquino
 */
require_once 'Conection.php';
class Usuario extends Conection{
    
    private $CODIGO;
    private $USUARIO;
    private $CONTRASENA;
    private $IDPERFIL;
    private $ESTADO;
    private $IDPERSONA;
    private $NIVEL;
    private $INSCRIPCION;
    private $ULTIMASESION;
    
    public function getCODIGO() {
        return $this->CODIGO;
    }

    public function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    public function getUSUARIO() {
        return $this->USUARIO;
    }

    public function setUSUARIO($USUARIO) {
        $this->USUARIO = $USUARIO;
    }

    public function getCONTRASENA() {
        return $this->CONTRASENA;
    }

    public function setCONTRASENA($CONTRASENA) {
        $this->CONTRASENA = $CONTRASENA;
    }

    public function getIDPERFIL() {
        return $this->IDPERFIL;
    }

    public function setIDPERFIL($IDPERFIL) {
        $this->IDPERFIL = $IDPERFIL;
    }

    public function getESTADO() {
        return $this->ESTADO;
    }

    public function setESTADO($ESTADO) {
        $this->ESTADO = $ESTADO;
    }

    public function getIDPERSONA() {
        return $this->IDPERSONA;
    }

    public function setIDPERSONA($IDPERSONA) {
        $this->IDPERSONA = $IDPERSONA;
    }

    public function getNIVEL() {
        return $this->NIVEL;
    }

    public function setNIVEL($NIVEL) {
        $this->NIVEL = $NIVEL;
    }

    public function getINSCRIPCION() {
        return $this->INSCRIPCION;
    }

    public function setINSCRIPCION($INSCRIPCION) {
        $this->INSCRIPCION = $INSCRIPCION;
    }

    public function getULTIMASESION() {
        return $this->ULTIMASESION;
    }

    public function setULTIMASESION($ULTIMASESION) {
        $this->ULTIMASESION = $ULTIMASESION;
    }

    public function setDATA($codigo,$usuario,$contrasena,$idperfil,$estado,$idpersona,$nivel,$inscripcion,$ultimasesion) {
        $this->CODIGO=$codigo;
        $this->USUARIO=$usuario;
        $this->CONTRASENA=$contrasena;
        $this->IDPERFIL=$idperfil;
        $this->ESTADO=$estado;
        $this->IDPERSONA=$idpersona;
        $this->NIVEL=$nivel;
        $this->INSCRIPCION=$inscripcion;
        $this->ULTIMASESION=$ultimasesion;
    }
    
        /*Function to Save a new User*/
    public function SAVE(){
        try{
            $this->CONECT();
            mysql_query("Call Sp_Usuario('".$this->CODIGO."','".$this->USUARIO."','".$this->CONTRASENA."',
                                         '".$this->IDPERFIL."','".$this->ESTADO."','".$this->IDPERSONA."',
                                         '".$this->NIVEL."','".$this->INSCRIPCION."','".$this->ULTIMASESION."')"
                       )
                    or die(mysql_error());
            $this->CLOSE();
        }catch(Exception $exception){
            echo 'Ups!, lo sentimos ocurrio el siguiente error: '.$exception;
        }
    }
    
    
    ##funcion que valida al usuario y contrasena
        public function Validar($usuario,$password) {
        $value=0;
        try {
            $this->CONECT();
            $resulset=mysql_query("SELECT * from LNCCNOTAS.Usuario
                Where usuario='" . $usuario . "' and contrasena='" . $password . "';");
            if($resulset){
                $value=mysql_num_rows($resulset);
                if($value > 0){
                    while ($row = mysql_fetch_array($resulset)) {
                        $this->CODIGO=$row[0];
                        $this->USUARIO=$row[1];
                        $this->CONTRASENA=$row[2];
                        $this->IDPERFIL=$row[3];
                        $this->ESTADO=$row[4];
                        $this->IDPERSONA=$row[5];
                        $this->NIVEL=$row[6];
                        $this->INSCRIPCION=$row[7];
                        $this->ULTIMASESION=$row[8];
                    }
                    unset ($resulset);
                }
            }
            unset ($resulset);
        } catch (Exception $exc) {
            echo "Ups!, lo sentimos ocurrio el siguiente error: " . $exc;
        }
        $this->CLOSE();
        return $value;
    }
    
    public function QUIENES($dni) {
        $coneccion= new Conection();
        $coneccion->CONECT();
        $consulta=  mysql_query("Select * from Persona where dni='".$dni."';");
        unset($coneccion);
        return $consulta;
    }
    
}

?>
