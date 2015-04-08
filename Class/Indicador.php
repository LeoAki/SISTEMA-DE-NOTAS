<?php

/**
 * Description of Indicador
 *
 * @author aquino
 */
require_once 'Conection.php';

class Indicador extends Conection {

    private $CODIGO;
    private $IDCOMPONENTE;
    private $NRO_CRITERIO;
    private $CRITERIO;
    private $PESO;

    public function getCODIGO() {
        return $this->CODIGO;
    }

    public function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    public function getIDCOMPONENTE() {
        return $this->IDCOMPONENTE;
    }

    public function setIDCOMPONENTE($IDCOMPONENTE) {
        $this->IDCOMPONENTE = $IDCOMPONENTE;
    }

    public function getNRO_CRITERIO() {
        return $this->NRO_CRITERIO;
    }

    public function setNRO_CRITERIO($NRO_CRITERIO) {
        $this->NRO_CRITERIO = $NRO_CRITERIO;
    }

    public function getCRITERIO() {
        return $this->CRITERIO;
    }

    public function setCRITERIO($CRITERIO) {
        $this->CRITERIO = $CRITERIO;
    }

    public function getPESO() {
        return $this->PESO;
    }

    public function setPESO($PESO) {
        $this->PESO = $PESO;
    }

    public function setDATA($codigo, $idcomponente, $nro_criterio, $criterio, $peso) {
        $this->CODIGO = $codigo;
        $this->IDCOMPONENTE = $idcomponente;
        $this->NRO_CRITERIO = $nro_criterio;
        $this->CRITERIO = $criterio;
        $this->PESO = $peso;
    }

    public function GRABAR() {
        try {
            $this->CONECT();
            mysql_query('Call Sp_Indicador("' . $this->CODIGO . '","' . $this->IDCOMPONENTE . '",
                                        "' . $this->NRO_CRITERIO . '","' . $this->CRITERIO . '",
                                        "' . $this->PESO . '");')
                    or die(mysql_error());
            $this->CLOSE();
        } catch (Exception $exc) {
            echo "Ups! Lo lamentamos ah ocurrido el siguiente error: " . $exc;
        }
    }

    public function LISTAR($componente) {
        $cone = new Conection();
        $cone->CONECT();
        $resultado = mysql_query('Select i.codigo, c.componente,i.criterio,i.nro_criterio from
                                Indicador i inner join Component c
                                on i.idcomponente=c.codigo where i.idcomponente=\'' . $componente . '\' order by i.nro_criterio;');
        $cone->CLOSE();
        unset($cone);
        return $resultado;
    }

    public function nombresalumnos($seccion) {
        $cone = new Conection();
        $cone->CONECT();
        $lista = mysql_query('Call  Listar_ALumnos_Seccion (\'' . $seccion . '\');');
        $cone->CLOSE();
        unset($cone);
        return $lista;
    }

    public function LISTGENERAL($compo) {
        $cone = new Conection();
        $cone->CONECT();
        $result = mysql_query('Select * from Indicador where idcomponente=\'' . $compo . '\'');
        $cone->CLOSE();
        return $result;
    }

    public function BUSCAR($codigocomponente) {
        $conectar = new Conection();
        $conectar->CONECT();
        $INDICADOR = new Indicador();
        $query = mysql_query('select * from Indicador where idcomponente=' . $codigocomponente);
        if ($query) {
            while ($row = mysql_fetch_array($query)) {
                $INDICADOR->setDATA($row[0], $row[1], $row[2], $row[3], $row[4]);
            }
        } else {
            echo 'NO SE ENCONTRO NINGUN REGISTRO';
        }
        $conectar->CLOSE();
        unset($conectar);
        return $INDICADOR;
    }

}

?>