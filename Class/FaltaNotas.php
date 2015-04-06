<?php

/**
 * Description of FaltaNotas
 *
 * @author Aquino
 */
require_once 'Conection.php';

class FaltaNotas extends Conection {

    public function fn_i($nivel) {
        $signo;
        ($nivel === 1) ? $signo = '<' : $signo = '>';
        $cone = new Conection();
        $cone->CONECT();
        $query = mysql_query('SELECT * FROM  fn_ibimestre
                            WHERE  idseccion ' . $signo . ' 300');
        $cone->CLOSE();
        unset($cone);
        return $query;
    }

    public function fn_ii($nivel) {
        $signo;
        ($nivel === 1) ? $signo = '<' : $signo = '>';
        $cone = new Conection();
        $cone->CONECT();
        $query = mysql_query('SELECT * FROM  fn_iibimestre
                            WHERE  idseccion ' . $signo . ' 300');
        $cone->CLOSE();
        unset($cone);
        return $query;
    }
    
    public function fn_iii($nivel) {
        $signo;
        ($nivel === 1) ? $signo = '<' : $signo = '>';
        $cone = new Conection();
        $cone->CONECT();
        $query = mysql_query('SELECT * FROM  fn_iiibimestre
                            WHERE  idseccion ' . $signo . ' 300');
        $cone->CLOSE();
        unset($cone);
        return $query;
    }
    
    public function fn_iv($nivel) {
        $signo;
        ($nivel === 1) ? $signo = '<' : $signo = '>';
        $cone = new Conection();
        $cone->CONECT();
        $query = mysql_query('SELECT * FROM  fn_ivbimestre
                            WHERE  idseccion ' . $signo . ' 300');
        $cone->CLOSE();
        unset($cone);
        return $query;
    }

}

?>