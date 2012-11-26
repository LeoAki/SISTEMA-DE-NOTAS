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
       $misalumnos=mysql_query("select ase.idalumnoseccion,
           ase.nroorden,p.paterno,p.materno,p.nombres,ase.msn4,s.nombreseccion
           from Alumno_Seccion ase
           inner join Alumno_Excel ae
           on ase.idalumno=ae.idalumno
           inner join Persona p on ae.idpersona=p.codigo
           inner join Seccion s on ase.idseccion=s.codigo
           where  s.cod_tutor=".$codigodocente."  order by ase.nroorden;");
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
           inner join Alumno_Excel ae
           on ase.idalumno=ae.idalumno
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
           p.paterno,
           p.materno,
           p.nombres,
           ase.fj4,ase.fi4,ase.t4,
           s.nombreseccion
           from Alumno_Seccion ase
           inner join Alumno_Excel ae
           on ase.idalumno=ae.idalumno
           inner join Persona p on ae.idpersona=p.codigo
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
           p.paterno,
           p.materno,
           p.nombres,
           ase.fj$bimestre,ase.fi$bimestre,ase.t$bimestre,
           s.nombreseccion
           from Alumno_Seccion ase
           inner join Alumno_Excel ae
           on ase.idalumno=ae.idalumno
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
           p.paterno,
           p.materno,
           p.nombres,
           ase.fj1,ase.fi1,ase.t1,
           ase.fj2,ase.fi2,ase.t2,
           ase.fj3,ase.fi3,ase.t3,
           ase.fj4,ase.fi4,ase.t4,
           s.nombreseccion
           from Alumno_Seccion ase
           inner join Alumno_Excel ae
           on ase.idalumno=ae.idalumno
           inner join Persona p on ae.idpersona=p.codigo
           inner join Seccion s on ase.idseccion=s.codigo
           where  ase.idseccion=".$sectionauxi."  order by ase.nroorden;");
       $cone->CLOSE();
       unset ($cone);
       return $misalumnos;
   }

}
?>
