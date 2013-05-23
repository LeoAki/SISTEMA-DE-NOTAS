<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validador
 *
 * @author leoaki
 */
class Validador {


    private static $arr = array("insert","into","look","update","delete","drop","from","www","file","<",">","body","where");
    public static function esValido($val){
        foreach (Validador::$arr as $att){
            if(preg_match("/".$att."/i", $val))
                return false;
        }
        return true;
    }

    public static function formatearFecha($fechapura){
        list($anio,$mes,$dia,)=explode("-",$fechapura);
        return $dia."/".$mes."/".$anio;
    }

    public static function validarEmail ($mail) {
      $error = true;
      if (! empty ($mail)) {
        if (! preg_match('/^([a-z0-9._]+)@([a-z0-9.-]+).([a-z]{2,5})$/', strtolower ($mail))) {
          $error = false;
        }
      }
      else {
        $error = false;
      }
      return $error;
    }
}
?>
