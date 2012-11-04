<?php
/**
 * Description of AreaCurricular
 *
 * @author aquino
 */
require_once 'Conection.php';
class AreaCurricular extends Conection{
    
    private $CODIGO;
    private $NOMAREA;
    private $AREA_ESCOLAR="2012";
    private $CODIGONIVEL;
    private $POSICIONACTA;
    
    public function getCODIGO() {
        return $this->CODIGO;
    }

    public function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    public function getNOMAREA() {
        return $this->NOMAREA;
    }

    public function setNOMAREA($NOMAREA) {
        $this->NOMAREA = $NOMAREA;
    }

    public function getAREA_ESCOLAR() {
        return $this->AREA_ESCOLAR;
    }

    public function setAREA_ESCOLAR($AREA_ESCOLAR) {
        $this->AREA_ESCOLAR = $AREA_ESCOLAR;
    }

    public function getCODIGONIVEL() {
        return $this->CODIGONIVEL;
    }

    public function setCODIGONIVEL($CODIGONIVEL) {
        $this->CODIGONIVEL = $CODIGONIVEL;
    }

    public function getPOSICIONACTA() {
        return $this->POSICIONACTA;
    }

    public function setPOSICIONACTA($POSICIONACTA) {
        $this->POSICIONACTA = $POSICIONACTA;
    }

    public function LISTAR_AREAS_CURRICULARES() {
        $cone= new Conection;
        $cone->CONECT();
        $resulset=  mysql_query("select a.codigo, 
            c.curso, n.nomnivel, a.posicion_acta 
            from Area_Curricular a 
            inner join Curso c on a.nomarea=c.codigo 
            inner join Nivel n on a.codigonivel=n.nivel where a.ano_escolar='2012' order by codigo;");
        $cone->CLOSE();
        unset($cone);
        return $resulset;
    }
    
    public function LISTAR_AREAS_INICIAL() {
        $cone=new Conection();
        $cone->CONECT();
        $ressulset=  mysql_query("select c.curso, n.nomnivel from Area_Curricular a 
            inner join Curso c on a.nomarea=c.codigo 
            inner join Nivel n on a.codigonivel=n.nivel
            where n.nomnivel='INICIAL';");
        $cone->CLOSE();
        unset($cone);
        return $ressulset;
    }
    
    public function LISTAR_AREAS_PRIMARIA() {
        $cone=new Conection();
        $cone->CONECT();
        $resulset=  mysql_query("select c.curso, n.nomnivel from Area_Curricular a 
            inner join Curso c on a.nomarea=c.codigo 
            inner join Nivel n on a.codigonivel=n.nivel
            where n.nomnivel='PRIMARIA';");
        $cone->CLOSE();
        unset($cone);
        return $resulset;
    }
    
    public function LISTAR_AREAS_SECUNDARIA() {
        $cone=new Conection();
        $cone->CONECT();
        $resulset=  mysql_query("select c.curso, n.nomnivel from Area_Curricular a 
            inner join Curso c on a.nomarea=c.codigo 
            inner join Nivel n on a.codigonivel=n.nivel
            where n.nomnivel='SECUNDARIA';");
        $cone->CLOSE();
        unset($cone);
        return $resulset;
    }
}

?>
