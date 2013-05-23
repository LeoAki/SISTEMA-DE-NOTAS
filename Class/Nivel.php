<?php
/**
 * Description of Nivel
 *
 * @author aquino
 */
require_once 'Conection.php';

class Nivel extends Conection{
    
    private $NIVEL;
    private $NOMNIVEL;
    
    public function getNIVEL() {
        return $this->NIVEL;
    }

    public function setNIVEL($NIVEL) {
        $this->NIVEL = $NIVEL;
    }

    public function getNOMNIVEL() {
        return $this->NOMNIVEL;
    }

    public function setNOMNIVEL($NOMNIVEL) {
        $this->NOMNIVEL = $NOMNIVEL;
    }

    public function LISTAR_NIVELES() {
        $cone=new Conection();
        $cone->CONECT();
        $resultado=  mysql_query("SELECT * from LNCCNOTAS.Nivel");
        $cone->CLOSE();
        unset($cone);
        return $resultado;
    }
}

?>
