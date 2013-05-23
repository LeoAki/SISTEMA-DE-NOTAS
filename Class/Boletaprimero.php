<?php
/**
 * Description of Boletaprimero
 *
 * @author lncc01
 */
require_once 'Conection.php';
class Boletaprimero extends Conection{
    private  $codigo;
    private  $ts;
    private  $qs;
    private  $ordenmeritogrado;
    private  $cod_alumno;
    private  $seccion;
    private  $orden;
    private  $alumno;
    private  $mate1;
    private  $comunica1;
    private  $arte1;
    private  $ps1;
    private  $efisica1;
    private  $cya1;
    private  $religion1;
    private  $ingles1;
    private  $cpu1;
    private  $promedio1;
    private  $puntaje1;
    private  $ordnmeritoaula1;
    private  $comport1;
    private  $observacion1;
    private  $mate2;
    private  $comunica2;
    private  $arte2;
    private  $ps2;
    private  $efisica2;
    private  $cya2;
    private  $religion2;
    private  $ingles2;
    private  $cpu2;
    private  $promedio2;
    private  $puntaje2;
    private  $ordnmeritoaula2;
    private  $comport2;
    private  $observacion2;
    private  $mate3;
    private  $comunica3;
    private  $arte3;
    private  $ps3;
    private  $efisica3;
    private  $cya3;
    private  $religion3;
    private  $ingles3;
    private  $cpu3;
    private  $promedio3;
    private  $puntaje3;
    private  $ordnmeritoaula3;
    private  $comport3;
    private  $observacion3;
    private  $mate4;
    private  $comunica4;
    private  $arte4;
    private  $ps4;
    private  $efisica4;
    private  $cya4;
    private  $religion4;
    private  $ingles4;
    private  $cpu4;
    private  $promedio4;
    private  $puntaje4;
    private  $ordnmeritoaula4;
    private  $comport4;
    private  $observacion4;
    private  $matefinal;
    private  $comunicafinal;
    private  $artefinal;
    private  $psfinal;
    private  $efisicafinal;
    private  $cyafinal;
    private  $religionfinal;
    private  $inglesfinal;
    private  $cpufinal;
    private  $promediofinal;
    private  $puntajefinal;
    private  $ordnmeritoaulafinal;
    private  $comportfinal;
    private  $observacionfinal;
    private  $areasdesaprobadas;
    private  $areasinnotas;
    private  $areas_exoneradas;
    private  $condicion;
    private  $mensaje;
    private  $asis1;
    private  $asis2;
    private  $asis3;
    private  $asis4;

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getTs() {
        return $this->ts;
    }

    public function setTs($ts) {
        $this->ts = $ts;
    }

    public function getQs() {
        return $this->qs;
    }

    public function setQs($qs) {
        $this->qs = $qs;
    }

    public function getOrdenmeritogrado() {
        return $this->ordenmeritogrado;
    }

    public function setOrdenmeritogrado($ordenmeritogrado) {
        $this->ordenmeritogrado = $ordenmeritogrado;
    }

    public function getCod_alumno() {
        return $this->cod_alumno;
    }

    public function setCod_alumno($cod_alumno) {
        $this->cod_alumno = $cod_alumno;
    }

    public function getSeccion() {
        return $this->seccion;
    }

    public function setSeccion($seccion) {
        $this->seccion = $seccion;
    }

    public function getOrden() {
        return $this->orden;
    }

    public function setOrden($orden) {
        $this->orden = $orden;
    }

    public function getAlumno() {
        return $this->alumno;
    }

    public function setAlumno($alumno) {
        $this->alumno = $alumno;
    }

    public function getMate1() {
        return $this->mate1;
    }

    public function setMate1($mate1) {
        $this->mate1 = $mate1;
    }

    public function getComunica1() {
        return $this->comunica1;
    }

    public function setComunica1($comunica1) {
        $this->comunica1 = $comunica1;
    }

    public function getArte1() {
        return $this->arte1;
    }

    public function setArte1($arte1) {
        $this->arte1 = $arte1;
    }

    public function getPs1() {
        return $this->ps1;
    }

    public function setPs1($ps1) {
        $this->ps1 = $ps1;
    }

    public function getEfisica1() {
        return $this->efisica1;
    }

    public function setEfisica1($efisica1) {
        $this->efisica1 = $efisica1;
    }

    public function getCya1() {
        return $this->cya1;
    }

    public function setCya1($cya1) {
        $this->cya1 = $cya1;
    }

    public function getReligion1() {
        return $this->religion1;
    }

    public function setReligion1($religion1) {
        $this->religion1 = $religion1;
    }

    public function getIngles1() {
        return $this->ingles1;
    }

    public function setIngles1($ingles1) {
        $this->ingles1 = $ingles1;
    }

    public function getCpu1() {
        return $this->cpu1;
    }

    public function setCpu1($cpu1) {
        $this->cpu1 = $cpu1;
    }

    public function getPromedio1() {
        return $this->promedio1;
    }

    public function setPromedio1($promedio1) {
        $this->promedio1 = $promedio1;
    }

    public function getPuntaje1() {
        return $this->puntaje1;
    }

    public function setPuntaje1($puntaje1) {
        $this->puntaje1 = $puntaje1;
    }

    public function getOrdnmeritoaula1() {
        return $this->ordnmeritoaula1;
    }

    public function setOrdnmeritoaula1($ordnmeritoaula1) {
        $this->ordnmeritoaula1 = $ordnmeritoaula1;
    }

    public function getComport1() {
        return $this->comport1;
    }

    public function setComport1($comport1) {
        $this->comport1 = $comport1;
    }

    public function getObservacion1() {
        return $this->observacion1;
    }

    public function setObservacion1($observacion1) {
        $this->observacion1 = $observacion1;
    }

    public function getMate2() {
        return $this->mate2;
    }

    public function setMate2($mate2) {
        $this->mate2 = $mate2;
    }

    public function getComunica2() {
        return $this->comunica2;
    }

    public function setComunica2($comunica2) {
        $this->comunica2 = $comunica2;
    }

    public function getArte2() {
        return $this->arte2;
    }

    public function setArte2($arte2) {
        $this->arte2 = $arte2;
    }

    public function getPs2() {
        return $this->ps2;
    }

    public function setPs2($ps2) {
        $this->ps2 = $ps2;
    }

    public function getEfisica2() {
        return $this->efisica2;
    }

    public function setEfisica2($efisica2) {
        $this->efisica2 = $efisica2;
    }

    public function getCya2() {
        return $this->cya2;
    }

    public function setCya2($cya2) {
        $this->cya2 = $cya2;
    }

    public function getReligion2() {
        return $this->religion2;
    }

    public function setReligion2($religion2) {
        $this->religion2 = $religion2;
    }

    public function getIngles2() {
        return $this->ingles2;
    }

    public function setIngles2($ingles2) {
        $this->ingles2 = $ingles2;
    }

    public function getCpu2() {
        return $this->cpu2;
    }

    public function setCpu2($cpu2) {
        $this->cpu2 = $cpu2;
    }

    public function getPromedio2() {
        return $this->promedio2;
    }

    public function setPromedio2($promedio2) {
        $this->promedio2 = $promedio2;
    }

    public function getPuntaje2() {
        return $this->puntaje2;
    }

    public function setPuntaje2($puntaje2) {
        $this->puntaje2 = $puntaje2;
    }

    public function getOrdnmeritoaula2() {
        return $this->ordnmeritoaula2;
    }

    public function setOrdnmeritoaula2($ordnmeritoaula2) {
        $this->ordnmeritoaula2 = $ordnmeritoaula2;
    }

    public function getComport2() {
        return $this->comport2;
    }

    public function setComport2($comport2) {
        $this->comport2 = $comport2;
    }

    public function getObservacion2() {
        return $this->observacion2;
    }

    public function setObservacion2($observacion2) {
        $this->observacion2 = $observacion2;
    }

    public function getMate3() {
        return $this->mate3;
    }

    public function setMate3($mate3) {
        $this->mate3 = $mate3;
    }

    public function getComunica3() {
        return $this->comunica3;
    }

    public function setComunica3($comunica3) {
        $this->comunica3 = $comunica3;
    }

    public function getArte3() {
        return $this->arte3;
    }

    public function setArte3($arte3) {
        $this->arte3 = $arte3;
    }

    public function getPs3() {
        return $this->ps3;
    }

    public function setPs3($ps3) {
        $this->ps3 = $ps3;
    }

    public function getEfisica3() {
        return $this->efisica3;
    }

    public function setEfisica3($efisica3) {
        $this->efisica3 = $efisica3;
    }

    public function getCya3() {
        return $this->cya3;
    }

    public function setCya3($cya3) {
        $this->cya3 = $cya3;
    }

    public function getReligion3() {
        return $this->religion3;
    }

    public function setReligion3($religion3) {
        $this->religion3 = $religion3;
    }

    public function getIngles3() {
        return $this->ingles3;
    }

    public function setIngles3($ingles3) {
        $this->ingles3 = $ingles3;
    }

    public function getCpu3() {
        return $this->cpu3;
    }

    public function setCpu3($cpu3) {
        $this->cpu3 = $cpu3;
    }

    public function getPromedio3() {
        return $this->promedio3;
    }

    public function setPromedio3($promedio3) {
        $this->promedio3 = $promedio3;
    }

    public function getPuntaje3() {
        return $this->puntaje3;
    }

    public function setPuntaje3($puntaje3) {
        $this->puntaje3 = $puntaje3;
    }

    public function getOrdnmeritoaula3() {
        return $this->ordnmeritoaula3;
    }

    public function setOrdnmeritoaula3($ordnmeritoaula3) {
        $this->ordnmeritoaula3 = $ordnmeritoaula3;
    }

    public function getComport3() {
        return $this->comport3;
    }

    public function setComport3($comport3) {
        $this->comport3 = $comport3;
    }

    public function getObservacion3() {
        return $this->observacion3;
    }

    public function setObservacion3($observacion3) {
        $this->observacion3 = $observacion3;
    }

    public function getMate4() {
        return $this->mate4;
    }

    public function setMate4($mate4) {
        $this->mate4 = $mate4;
    }

    public function getComunica4() {
        return $this->comunica4;
    }

    public function setComunica4($comunica4) {
        $this->comunica4 = $comunica4;
    }

    public function getArte4() {
        return $this->arte4;
    }

    public function setArte4($arte4) {
        $this->arte4 = $arte4;
    }

    public function getPs4() {
        return $this->ps4;
    }

    public function setPs4($ps4) {
        $this->ps4 = $ps4;
    }

    public function getEfisica4() {
        return $this->efisica4;
    }

    public function setEfisica4($efisica4) {
        $this->efisica4 = $efisica4;
    }

    public function getCya4() {
        return $this->cya4;
    }

    public function setCya4($cya4) {
        $this->cya4 = $cya4;
    }

    public function getReligion4() {
        return $this->religion4;
    }

    public function setReligion4($religion4) {
        $this->religion4 = $religion4;
    }

    public function getIngles4() {
        return $this->ingles4;
    }

    public function setIngles4($ingles4) {
        $this->ingles4 = $ingles4;
    }

    public function getCpu4() {
        return $this->cpu4;
    }

    public function setCpu4($cpu4) {
        $this->cpu4 = $cpu4;
    }

    public function getPromedio4() {
        return $this->promedio4;
    }

    public function setPromedio4($promedio4) {
        $this->promedio4 = $promedio4;
    }

    public function getPuntaje4() {
        return $this->puntaje4;
    }

    public function setPuntaje4($puntaje4) {
        $this->puntaje4 = $puntaje4;
    }

    public function getOrdnmeritoaula4() {
        return $this->ordnmeritoaula4;
    }

    public function setOrdnmeritoaula4($ordnmeritoaula4) {
        $this->ordnmeritoaula4 = $ordnmeritoaula4;
    }

    public function getComport4() {
        return $this->comport4;
    }

    public function setComport4($comport4) {
        $this->comport4 = $comport4;
    }

    public function getObservacion4() {
        return $this->observacion4;
    }

    public function setObservacion4($observacion4) {
        $this->observacion4 = $observacion4;
    }

    public function getMatefinal() {
        return $this->matefinal;
    }

    public function setMatefinal($matefinal) {
        $this->matefinal = $matefinal;
    }

    public function getComunicafinal() {
        return $this->comunicafinal;
    }

    public function setComunicafinal($comunicafinal) {
        $this->comunicafinal = $comunicafinal;
    }

    public function getArtefinal() {
        return $this->artefinal;
    }

    public function setArtefinal($artefinal) {
        $this->artefinal = $artefinal;
    }

    public function getPsfinal() {
        return $this->psfinal;
    }

    public function setPsfinal($psfinal) {
        $this->psfinal = $psfinal;
    }

    public function getEfisicafinal() {
        return $this->efisicafinal;
    }

    public function setEfisicafinal($efisicafinal) {
        $this->efisicafinal = $efisicafinal;
    }

    public function getCyafinal() {
        return $this->cyafinal;
    }

    public function setCyafinal($cyafinal) {
        $this->cyafinal = $cyafinal;
    }

    public function getReligionfinal() {
        return $this->religionfinal;
    }

    public function setReligionfinal($religionfinal) {
        $this->religionfinal = $religionfinal;
    }

    public function getInglesfinal() {
        return $this->inglesfinal;
    }

    public function setInglesfinal($inglesfinal) {
        $this->inglesfinal = $inglesfinal;
    }

    public function getCpufinal() {
        return $this->cpufinal;
    }

    public function setCpufinal($cpufinal) {
        $this->cpufinal = $cpufinal;
    }

    public function getPromediofinal() {
        return $this->promediofinal;
    }

    public function setPromediofinal($promediofinal) {
        $this->promediofinal = $promediofinal;
    }

    public function getPuntajefinal() {
        return $this->puntajefinal;
    }

    public function setPuntajefinal($puntajefinal) {
        $this->puntajefinal = $puntajefinal;
    }

    public function getOrdnmeritoaulafinal() {
        return $this->ordnmeritoaulafinal;
    }

    public function setOrdnmeritoaulafinal($ordnmeritoaulafinal) {
        $this->ordnmeritoaulafinal = $ordnmeritoaulafinal;
    }

    public function getComportfinal() {
        return $this->comportfinal;
    }

    public function setComportfinal($comportfinal) {
        $this->comportfinal = $comportfinal;
    }

    public function getObservacionfinal() {
        return $this->observacionfinal;
    }

    public function setObservacionfinal($observacionfinal) {
        $this->observacionfinal = $observacionfinal;
    }

    public function getAreasdesaprobadas() {
        return $this->areasdesaprobadas;
    }

    public function setAreasdesaprobadas($areasdesaprobadas) {
        $this->areasdesaprobadas = $areasdesaprobadas;
    }

    public function getAreasinnotas() {
        return $this->areasinnotas;
    }

    public function setAreasinnotas($areasinnotas) {
        $this->areasinnotas = $areasinnotas;
    }

    public function getAreas_exoneradas() {
        return $this->areas_exoneradas;
    }

    public function setAreas_exoneradas($areas_exoneradas) {
        $this->areas_exoneradas = $areas_exoneradas;
    }

    public function getCondicion() {
        return $this->condicion;
    }

    public function setCondicion($condicion) {
        $this->condicion = $condicion;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    public function getAsis1() {
        return $this->asis1;
    }

    public function setAsis1($asis1) {
        $this->asis1 = $asis1;
    }

    public function getAsis2() {
        return $this->asis2;
    }

    public function setAsis2($asis2) {
        $this->asis2 = $asis2;
    }

    public function getAsis3() {
        return $this->asis3;
    }

    public function setAsis3($asis3) {
        $this->asis3 = $asis3;
    }

    public function getAsis4() {
        return $this->asis4;
    }

    public function setAsis4($asis4) {
        $this->asis4 = $asis4;
    }

    public function LISTADOBASICO() {
        $cone=new Conection();
        $cone->CONECT();
        $resultado=mysql_query("select codigo,
            cod_alumno,
            alumno,
            seccion
            from Boletasprimero;");
        $cone->CLOSE();
        unset ($cone);
        return $resultado;
    }
}
?>
