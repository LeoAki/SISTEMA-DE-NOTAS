<?php
/**
 * Description of Docente
 *
 * @author aquino
 */
require_once 'Conection.php';
class Docente extends Conection{
    
    private $CODIGO;
    private $PATERNO;
    private $MATERNO;
    private $NOMBRES;
    private $DNI;
    private $CODIGOPERSONA;
    private $TIPOPROFE;
    public function getCODIGO() {
        return $this->CODIGO;
    }

    public function setCODIGO($CODIGO) {
        $this->CODIGO = $CODIGO;
    }

    public function getPATERNO() {
        return $this->PATERNO;
    }

    public function setPATERNO($PATERNO) {
        $this->PATERNO = $PATERNO;
    }

    public function getMATERNO() {
        return $this->MATERNO;
    }

    public function setMATERNO($MATERNO) {
        $this->MATERNO = $MATERNO;
    }

    public function getNOMBRES() {
        return $this->NOMBRES;
    }

    public function setNOMBRES($NOMBRES) {
        $this->NOMBRES = $NOMBRES;
    }

    public function getDNI() {
        return $this->DNI;
    }

    public function setDNI($DNI) {
        $this->DNI = $DNI;
    }

    public function getCODIGOPERSONA() {
        return $this->CODIGOPERSONA;
    }

    public function setCODIGOPERSONA($CODIGOPERSONA) {
        $this->CODIGOPERSONA = $CODIGOPERSONA;
    }

    public function getTIPOPROFE() {
        return $this->TIPOPROFE;
    }

    public function setTIPOPROFE($TIPOPROFE) {
        $this->TIPOPROFE = $TIPOPROFE;
    }

    public function SetDATA($codigo,$paterno,$materno,$nombres,$dni,$codigopersona,$tipoprofe) {
        $this->CODIGO=$codigo;
        $this->PATERNO=$paterno;
        $this->MATERNO=$materno;
        $this->NOMBRES=$nombres;
        $this->DNI=$dni;
        $this->CODIGOPERSONA=$codigopersona;
        $this->TIPOPROFE=$tipoprofe;
    }

    public function BUSCAR($codigo) {
        $conectar=new Conection();
        $conectar->CONECT();
        $DOCENTE= new Docente();
        $query=  mysql_query("select * from Docente where codigo=".$codigo);
        if ($query) {
            while ($row = mysql_fetch_array($query)) {
                $DOCENTE->SetDATA($row[0], $row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
            }
        }  else {
            echo 'NO SE ENCONTRO NINGUN REGISTRO';            
        }
        $conectar->CLOSE();
        unset($conectar);
        return $DOCENTE;
    }
    
    public function GRABAR() {
        try {
            $this->CONECT();
            mysql_query("Call Sp_Docente('".$this->CODIGO."','".$this->PATERNO."',
                                        '".$this->MATERNO."','".$this->NOMBRES."',
                                        '".$this->DNI."','".$this->CODIGOPERSONA."',
                                        '".$this->TIPOPROFE."')") 
            or die(mysql_error());
            $this->CLOSE();
        } catch (Exception $exc) {
            echo "Ups! Lo lamentamos ah ocurrido el siguiente error: ".$exc;
        }
   }
   
   public function LISTAR() {
       $cone=new Conection();
       $cone->CONECT();
       $resultado=  mysql_query("Select d.codigo,d.paterno,d.materno,d.nombres,d.dni,tp.tipo from Docente d 
                                inner join TipoProfe tp on d.tipoprofe=tp.codigo; ");
       $cone->CLOSE();
       unset($cone);
       return $resultado;
   }   
   #Select d.codigo,d.paterno,d.materno,d.nombres,d.dni,tp.tipo from Docente d 
   #                             inner join TipoProfe tp on d.tipoprofe=d.codigo;   
   public function TipoProfe() {
       $cone=new Conection();
       $cone->CONECT();
       $profe=  mysql_query("Select * from TipoProfe;");
       $cone->CLOSE();
       unset($cone);
       return $profe;
   }
   
   public function RegistroDocente($dni) {
       $cone=new Conection();
       $cone->CONECT();
       $regi= mysql_query("SELECT r.codigo, 
                            sec.nomnivel, 
                            sec.grado, 
                            sec.nombreseccion, 
                            CONCAT( doc.paterno,  ' ', doc.materno,  ' ,', doc.nombres ) AS Docente, 
                            doc.dni, 
                            dasi.asinatura, 
                            dasi.abreviatura,
                            r.codigoasinatura,
                            r.codigoseccion
                            FROM Registro r
                            LEFT JOIN descripcionseccion sec ON r.codigoseccion = sec.codigo
                            LEFT JOIN Docente doc ON r.codigodocente = doc.codigo
                            LEFT JOIN descripcionsinature dasi ON r.codigoasinatura = dasi.codigo
                            WHERE doc.dni =  '".$dni."' order by r.codigo");
       $cone->CLOSE();
       unset($cone);
       return $regi;
   }


   public function DOCENTE_USUARIO($dnidelusuario) {
        $cone=new Conection();
        $cone->CONECT();
        $docentedatos=mysql_query("select * from Docente where dni='".$dnidelusuario."'");
        $cone->CLOSE();
        unset ($cone);
        return $docentedatos;
   }

   public function ALUMNOSDEMITUTORIA($codigodocente){
       $cone=new Conection();
       $cone->CONECT();
       $misalumnos=mysql_query("
       SELECT ase.idalumnoseccion, ase.nroorden, p.paterno, p.materno, p.nombres, ase.msn1, s.nombreseccion
	FROM Alumno_Seccion ase
	INNER JOIN Alumno ae ON ase.idalumno = ae.codigo
	INNER JOIN Persona p ON ae.idpersona = p.codigo
	INNER JOIN Seccion s ON ase.idseccion = s.codigo
	WHERE s.cod_tutor=".$codigodocente."  order by ase.nroorden;");
       $cone->CLOSE();
       unset ($cone);
       return $misalumnos;
   }
   public function NAMESECCIOMICARGO($codigodocente) {
       $cone=new Conection();
       $cone->CONECT();
       $misalumnos=mysql_query("select
           distinct s.grado,s.nombreseccion,s.nomnivel
           from Alumno_Seccion ase
           inner join Alumno ae
           on ase.idalumno=ae.codigo
           inner join Persona p on ae.idpersona=p.codigo
           inner join descripcionseccion s on ase.idseccion=s.codigo
           inner join Seccion sec on s.codigo=sec.codigo
           where  sec.cod_tutor=".$codigodocente."  order by ase.nroorden;");
       $cone->CLOSE();
       unset ($cone);
       return $misalumnos;
   }

   public function SECCIONAUXILIAR($dnidelauxiliar) {
        $cone=new Conection();
        $cone->CONECT();
        $seccauxi=mysql_query("select  s.codigo,
                            dsec.grado,
                            dsec.nombreseccion,
                            dsec.nomnivel,
                            dsec.TUTOR
                            from Seccion s
                            inner join Docente d on s.cod_auxiliar=d.codigo
                            inner join descripcionseccion dsec on s.codigo=dsec.codigo
                            where dni=".$dnidelauxiliar." order by s.codigo;");
        $cone->CLOSE();
        unset ($cone);
        return $seccauxi;
   }

   public function ALUMNOSDELAUXILIAR($sectionauxi){
       $cone=new Conection();
       $cone->CONECT();
       $misalumnos=mysql_query("select
           ase.idalumnoseccion,
           ase.nroorden,
           ae.paterno,
           ae.materno,
           ae.nombres,
           ase.fj1,ase.fi1,ase.t1,
           s.nombreseccion
           from Alumno_Seccion ase
           inner join Alumno ae
           on ase.idalumno=ae.codigo
           inner join Seccion s on ase.idseccion=s.codigo
           where  ase.idseccion=".$sectionauxi."  order by ase.nroorden;");
       $cone->CLOSE();
       unset ($cone);
       return $misalumnos;
   }

   public function ALUMNOSDELAUXILIARPORBIMESTRE($sectionauxi,$bimestre){
       $cone=new Conection();
       $cone->CONECT();
       $misalumnos=mysql_query("select
           ase.idalumnoseccion,
           ase.nroorden,
           ae.paterno,
           ae.materno,
           ae.nombres,
           ase.fj$bimestre,ase.fi$bimestre,ase.t$bimestre,
           s.nombreseccion
           from Alumno_Seccion ase
           inner join Alumno ae
           on ase.idalumno=ae.codigo
           inner join Persona p on ae.idpersona=p.codigo
           inner join Seccion s on ase.idseccion=s.codigo
           where  ase.idseccion=".$sectionauxi."  order by ase.nroorden;");
       $cone->CLOSE();
       unset ($cone);
       return $misalumnos;
   }

   public function ASISTENCIAGLOBAL($sectionauxi){
       $cone=new Conection();
       $cone->CONECT();
       $misalumnos=mysql_query("select
           ase.idalumnoseccion,
           ase.nroorden,
           ae.paterno,
           ae.materno,
           ae.nombres,
           ase.fj1,ase.fi1,ase.t1,
           ase.fj2,ase.fi2,ase.t2,
           ase.fj3,ase.fi3,ase.t3,
           ase.fj4,ase.fi4,ase.t4,
           s.nombreseccion
           from Alumno_Seccion ase
           inner join Alumno ae
           on ase.idalumno=ae.codigo
           inner join Seccion s on ase.idseccion=s.codigo
           where  ase.idseccion=".$sectionauxi."  order by ase.nroorden;");
       $cone->CLOSE();
       unset ($cone);
       return $misalumnos;
   }

   public function Datosdemiaulacargo($dniprofe) {
        $cone=new Conection();
        $cone->CONECT();
        $datosmiaula=mysql_query("select dse.codigo,
            dse.nomnivel,
            dse.grado,
            dse.nombreseccion,
            d.codigo,
            d.paterno,
            d.materno,
            d.nombres,
            d.dni
            from descripcionseccion dse
            inner join Seccion s
            on dse.codigo=s.codigo
            inner join Docente d
            on s.cod_tutor=d.codigo
            where d.dni=$dniprofe;");
        $cone->CLOSE();
        unset ($cone);
        return $datosmiaula;
   }

   public function NOTASCONSOLIDADOTUTORIA($codigoalumnoseccion){
       $cone=new Conection();
       $cone->CONECT();
       $notasalumnosregistro=mysql_query("
           select ar.idregistro,
               asin.asinatura,
               asin.abreviatura,
               ar.1pb 
               from 1Alumno_Registro ar
               inner join Registro r
               on ar.idregistro=r.codigo
               inner join Asinatura asin
               on asin.codigo= r.codigoasinatura
               where idalumnoseccion=$codigoalumnoseccion
           order by ar.idregistro;");
       $cone->CLOSE();
       unset ($cone);
       return $notasalumnosregistro;
   }


   public function NOTASCONSOLIDADOTUTORIAINiCIAL($codigoalumnoseccion){
       $cone=new Conection();
       $cone->CONECT();
       $notasalumnosregistro=mysql_query("
           select ar.idregistro,
               asin.asinatura,
               asin.abreviatura,
               ar.pb,
               ar.promedio1,
               ar.promedio2,
               ar.promedio3,
               ar.promedio4,
               ar.promedio5
               from Alumno_Registroinicial ar
               inner join Registro r
               on ar.idregistro=r.codigo
               inner join Asinatura asin
               on asin.codigo= r.codigoasinatura
               where idalumnoseccion=$codigoalumnoseccion
           order by ar.idregistro;");
       $cone->CLOSE();
       unset ($cone);
       return $notasalumnosregistro;
   }
   
   public function NOTASSECUNDARIAANUAL($codealum) {
       $cone=new Conection();
       $cone->CONECT();
       $notasanualse=  mysql_query("select ar.idregistro,
        asin.asinatura,
        asin.abreviatura,
        ( (rega.p1+rega.p2+rega.p3+ar.pb)/4) as Promedio
        from Alumno_Registro ar
        inner join Registro r
        on ar.idregistro=r.codigo
        inner join Asinatura asin
        on asin.codigo= r.codigoasinatura      
        inner join RegistroAnual rega 
        on ar.idalumnoregistro=rega.idalumnoregistro          
        where ar.idalumnoseccion=$codealum 
        order by ar.idregistro;");
       $cone->CLOSE();
       unset($cone);
       return $notasanualse;
   }

   public function NOTASSECUNDARIAIV($codealum) {
       $cone=new Conection();
       $cone->CONECT();
       $notasanualse=  mysql_query("select ar.idregistro,
        asin.asinatura,
        asin.abreviatura,
        ar.1pb as Promedio
        from 1Alumno_Registro ar
        inner join Registro r
        on ar.idregistro=r.codigo
        inner join Asinatura asin
        on asin.codigo= r.codigoasinatura
        where ar.idalumnoseccion=$codealum 
        order by ar.idregistro;");
       $cone->CLOSE();
       unset($cone);
       return $notasanualse;
   }

}
?>