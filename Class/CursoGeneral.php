<?php
/**
 * Description of CursoGeneral
 *
 * @author lncc01
 */
require_once 'Conection.php';
class CursoGeneral extends Conection{

    private $CODE;
    private $CURSO;
    
    public function getCODE() {
        return $this->CODE;
    }

    public function setCODE($CODE) {
        $this->CODE = $CODE;
    }

    public function getCURSO() {
        return $this->CURSO;
    }

    public function setCURSO($CURSO) {
        $this->CURSO = $CURSO;
    }

    public function GRABAR() {
        try {
            $this->CONECT();
            mysql_query("Call Sp_Curso('".$this->CODE."','".$this->CURSO."')")
                    or die (mysql_error());
        } catch (Exception $exc) {
            echo "Ups! lo sentimos ah ocurrido el siguiente error: ".$exc;
        }
    }

    public function LISTAR() {
        $cone= new Conection();
        $cone->CONECT();
        $resultado=mysql_query("Select * from LNCCNOTAS.Curso");
        $cone->CLOSE();
        return $resultado;
    }

    public function SETData($codigo,$curso) {
        $this->CODE=$codigo;
        $this->CURSO=$curso;
    }

    public function SEARCH($codigo) {
        $coneccion= new Conection();
        $coneccion->CONECT();
        $CURSOGEN=new CursoGeneral();
        $resultado=mysql_query("Select * from LNCCNOTAS.Curso where codigo=".$codigo);
        if($resultado){
            while ($row = mysql_fetch_array($resultado,MYSQL_NUM)) {
                $CURSOGEN->SETData($row[0], $row[1]);
            }
        }else{
            echo 'NO SE ENCONTRO NINGUN REGISTRO';
        }
        $coneccion->CLOSE();
        unset ($coneccion);
        return $CURSOGEN;
    }
}
?>
