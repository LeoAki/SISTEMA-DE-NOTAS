<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" type="image/ico" href="Css/images/favicon.ico"/>
        <script type="text/javascript" src="Js/jquery-1.7.2.min.js"></script>
<!----------------------------------BOOTSTRAP---------------------------------------------------->
        <link href="Css/bootstrap/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="Css/bootstrap/bootstrap.css" rel="stylesheet"/>
        <script type="text/javascript" src="Js/bootstrap/bootstrap.js"></script>
<!----------------------------------------------------------------------------------------------->        
        <title>LNCC ON LINE--ALUMNO</title>
    </head>
    <?php
    require_once 'Class/Alumno.php';
    ?>
    <body>
        <?php
        #variables locales
        $code=0;$code_seccion=0;$paterno="";$materno="";$nombres="";
        $nacionalidad="";
        ?>
        <center><h1><a>REGISTRO DEL EDUCANDO</a></h1></center>
        <center>
        <fieldset>
            <legend>DATOS DEL ESTUDIANTE</legend>
            <table>
                <tr>
                    <td><a>CODIGO DEL ALUMNO: </a><input type='text' id='txtcodigo' name='txtcodigo' placeholder='codigo' style="width: 38%"/></td>
                    <td><a>SECCION: </a><input type='text' id='txtseccion' name='txtseccion' placeholder='seccion'/>
<!--                        <input type="button" value="VER" id="bttseccion" class="danger"/>-->
                        <button class="btn btn-success">VER</button>
                    </td>
                    <td style="display: none;"><a>codigo_seccion: </a><input type='text' id='txtcodseccion' name='txtcodseccion'/></td>
                </tr>
                <tr>                    
                    <td ><a>PATERNO : </a><input type='text' id='txtpaterno' name='txtpaterno' placeholder='paterno' /></td>
                    <td ><a>MATERNO : </a><input type='text' id='txtmaterno' name='txtmaterno' placeholder='materno' style="width: 56%"/></td>
                </tr>
                <tr>
                    <td><a>NOMBRES : </a><input type='text' id='txtname' name='txtname' placeholder='nombres'/> </td>
                    <td>
                        <a>FECHA NAC. : </a><input type='date' id='' name='' placeholder='' style="width: 40%;"/>
                        <button type="button" id="btndate" name="btndate" class="btn btn-danger">Fecha</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a>SEXO : </a>
                        <select id="txtsexo" name="txtsexo">
                            <option value="M">MASCULINO</option>
                            <option value="F">FEMENINO</option>
                        </select>
                    </td>
                    <td>
                        <a>COLEGIO PROCEDENTE:</a><input type="text" name="txtcoleprocedente" id="txtcoleprocedente" style="width: 40%"/>
                    </td>
                </tr>
                <tr>
                    <td><a>NACIONALIDAD : </a><input type='text' id='' name='' placeholder='nacionalidad' style="width: 50%"/> </td>
                    <td><a>DEPARTAMENTO NAC. :</a> 
                        <select>
                            <option value="">--ELEGIR---</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><a>PROVINCIA NAC.:</a>
                        <select>
                            <option value="">--ELEGIR---</option>
                        </select>
                    </td>
                    <td><a>DISTRITO NAC:</a>
                        <select>
                            <option value="">--ELEGIR---</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><a>LOCALIDAD DE NACIMIENTO:</a><input type="text" name="txtlocanac" id="txtlocanac" style="width: 69%"/></td>
                </tr>                
            </table>
        </fieldset>
            <fieldset>
                <legend>TIPO DE PARTO</legend>
                <table>
                    <tr>
                        <td><a>TIPO DE PARTO</a></td>
                        <td><a>DESCRIPCION</a></td>
                    </tr>
                    <tr>
                        <td>
                            <select name="txttypeparto">
                                <option value="NORMAL">NORMAL</option>
                                <option value="CESARIA">CESARIA</option>
                                <option value="COMPLICADO">COMPLICADO</option>
                            </select>
                        </td>
                        <td>
                            <textarea cols="1200" rows="3" name="txtdescripcionparto"></textarea>
                        </td>
                    </tr>
                </table>
            </fieldset>            
        <fieldset>
            <legend>DOMICILIO Y OTROS DATOS</legend>
            <table>
                <tr>
                    <td><a>DNI : </a><input type='text' id='' name='' placeholder='dni'/></td>
                    <td colspan="2">
                        <center>
                        <a>DEPARTAMENTO :</a>
                        <select>
                            <option value="">--ELEGIR---</option>
                        </select>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td><a>PROVINCIA :</a>
                        <select>
                            <option value="">--ELEGIR---</option>
                        </select>
                    </td>
                    <td><a>DISTRITO :</a>
                        <select>
                            <option value="">--ELEGIR---</option>
                        </select>
                    </td>
                    
                </tr>
                <tr>
                    <td><a>DOMICILIO : </a><input type='text' id='' name='' placeholder='domicilio' style=""/></td>
                    <td><a>AÑO DE RESIDENCIA : </a><input type='text' id='' name='' placeholder='EJ. 1992' style=""/></td>
                </tr>
                <tr>
                    <td><a>TELEFONO FIJO : </a><input type='text' id='' name='' placeholder='Telf. fijo' style="width: 40%"/></td>
                    <td><a>CELULAR : </a><input type='text' id='' name='' placeholder='Celular'/></td>
                </tr>
                <tr>
                    <td><a>RPM  :</a><input type='text' id='txtrpm' name='txtrpm' placeholder='RPM' style="width: 67%"/></td>
                    <td><a>RCP  :</a><input type='text' id='txtrpc' name='txtrpc' placeholder='RPC' style="width: 80%"/></td>
                </tr>
                <tr>
                    <td><a>EMAIL    :<input type="text" id="txtemail" name="txtemail" placeholder="EMAIL" style="width: 64%"/></a></td>
                    <td><a>RELIGION :</a>
                        <select name="txtreligion">
                            <option value="CAT&Oacute;LICO">CAT&Oacute;LICO</option>
                            <option value="TESTIGOS DE JEHOVA">TESTIGOS DE JEHOVA</option>
                            <option value="MORMON">MORMON</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><a>HERMANO  <input type="text" id="txtlugarhermano" name="txtlugarhermano" placeholder="Lugar que ocupa"/>    DE  <input type="text" id="txthermanos" name="txthermanos" placeholder="Cantidad de hermanos"/>    HERMANOS    </a></td>
                </tr>
            </table>
        </fieldset>
            <fieldset>
                <legend>BECADO</legend>
                <tr>
                    <td><a>BECADO<input type="checkbox" id="txtbecado" name="txtbecado"/></a></td>
                    <td><a>TIPO DE BECA</a>
                        <input type="txt" id="txttypebeca" name="txttypebeca" placeholder="Tipo de beca"/>
                        <input type="txt" id="txtresobeca" name="txtresobeca" placeholder="Resolucion de la beca"/>
                    </td>
                </tr>
            </fieldset>
            <fieldset>
                <legend>RECURSOS M&Eacute;DICOS</legend>
                <table>
                    <tr>
                        <td><a>ALERGIA AL POLVO:</a><input type="checkbox" name="apolvo" size="5px;"/></td>
                    </tr>                    
                    <tr>
                        <td><a>ALERGIA A LA HUMEDAD</a><input type="checkbox" name="ahumedad" size="5px;"/></td>
                    </tr>
                    <tr>
                        <td><a>ALERGIA AL MEDICAMENTO   :</a><input type="text" id="txtamed1" name="txtamed1"/></td>
                    </tr>
                    <tr>
                        <td><a>ALERGIA AL MEDICAMENTO   :</a><input type="text" id="txtamed2" name="txtamed2"/></td>
                    </tr>
                    <tr>
                        <td><a>ALERGIA AL MEDICAMENTO   :</a><input type="text" id="txtamed3" name="txtamed3"/></td>
                    </tr>   
                    <tr>
                        <td><a>ALERGIA AL MEDICAMENTO   :</a><input type="text" id="txtamed4" name="txtamed4"/></td>
                    </tr>
                    <tr>
                        <td><a>TIPO DE SANGRE</a>
                            <select name="typesangre">
                                <option value="RH +">RH +</option>
                                <option value="RH -">RH -</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select></td>
                    </tr>
                </table>
            </fieldset>
        </center>
    </body>
</html>