<?php
require_once 'Conection.php';
class Niveles extends Conection{
    
    function Aulasnivel($nivel,$grado) {
        $this->CONECT();
        $queryniveles=  $this->CONSULT("
            Select 
            uno.codigo,
            dos.grado,
            dos.nombreseccion,
            dos.TUTOR,
            dos.AUXILIAR,
            uno.cod_tutor,
            uno.cod_auxiliar,
            uno.ano_escolar
            from Seccion uno
            inner join descripcionseccion dos
            on uno.codigo=dos.codigo
            where uno.cod_nivel=$nivel
            and uno.cod_grado=$grado
            order by uno.codigo;");
        $this->CLOSE();
        return $queryniveles;
    }
    
   public function mensajes_al($codigodocente){
       $cone=new Conection();
       $cone->CONECT();
       $misalumnos=mysql_query("
       SELECT ase.idalumnoseccion, ase.nroorden, p.paterno, p.materno, p.nombres, 
              asep.1pf1,asep.1pf2,asep.1pf3,asep.1pf4,asep.1pf5,asep.1pf6,asep.1pf7,asep.1pf8,
              asep.2pf1,asep.2pf2,asep.2pf3,asep.2pf4,asep.2pf5,asep.2pf6,asep.2pf7,asep.2pf8,
              asep.3pf1,asep.3pf2,asep.3pf3,asep.3pf4,asep.3pf5,asep.3pf6,asep.3pf7,asep.3pf8,
              asep.4pf1,asep.4pf2,asep.4pf3,asep.4pf4,asep.4pf5,asep.4pf6,asep.4pf7,asep.4pf8,asep.3pf9,asep.4pf9
	FROM Alumno_Seccion ase
        INNER JOIN Alumno_Seccion_Pf asep ON ase.idalumnoseccion=asep.codigo
	INNER JOIN Alumno ae ON ase.idalumno = ae.codigo
	INNER JOIN Persona p ON ae.idpersona = p.codigo
	INNER JOIN Seccion s ON ase.idseccion = s.codigo
	WHERE s.cod_tutor=".$codigodocente."  order by ase.nroorden;");
       $cone->CLOSE();
       unset ($cone);
       return $misalumnos;
    }
    
   public function mensajesalumnos($codigodocente){
       $cone=new Conection();
       $cone->CONECT();
       $misalumnos=mysql_query("
       SELECT 
       ase.idalumnoseccion, 
       ase.nroorden, 
       p.paterno, 
       p.materno, 
       p.nombres, 
       ase.msn1, 
       ase.msn2, 
       s.nombreseccion,
       ase.msn3,
       ase.msn4
	FROM Alumno_Seccion ase
	INNER JOIN Alumno ae ON ase.idalumno = ae.codigo
	INNER JOIN Persona p ON ae.idpersona = p.codigo
	INNER JOIN Seccion s ON ase.idseccion = s.codigo
	WHERE s.cod_tutor=".$codigodocente."  order by ase.nroorden;");
       $cone->CLOSE();
       unset ($cone);
       return $misalumnos;
   }
    
    
}

?>
