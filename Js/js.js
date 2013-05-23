document.write("<script type='text/javascript' src='jquery-1.7.2.min.js'></script>");
window.onload=function(){
    if(document.title=="MANTENIMIENTO AREA"){
        document.getElementById('txtarea').focus();
    }
    $("#popover").popover({animation:"true",placement:'bottom',trigger:'hover'});
    $('#tula').tooltip({title:"INICIO",placement:'right'});
    $('#perfil').tooltip({title:"MI PERFIL :D",placement:'right'});
        $('#dpersonales').tooltip({title:"MIS DATOS PERSONALES",placement:'top'});
        $('#cpassword').tooltip({title:"ACTUALIZA TU CONTRASE&Ntilde;A",placement:'top'});
    $('#consult').tooltip({title:"CONSULTAR",placement:'right'});
    $('#consulalumno').tooltip({title:"CONSULTA DEL ALUMNO",placement:'right'});
        $('#asistencia').tooltip({title:"VER MI ASISTENCIA",placement:'left'});
        $('#bdnalumn').tooltip({title:"VER MI BOLETA DE NOTAS",placement:'left'});
        $('#msnprofalumn').tooltip({title:"TU PROFE TE DEJO UN MENSAJE",placement:'left'});
        $('#nxsinature').tooltip({title:"VER MIS NOTAS POR CURSO",placement:'left'});
    $('#tutoria').tooltip({title:"TUTORIA A CARGO",placement:'right'});
    $('#administrator').tooltip({title:"ADMINISTRACI&Oacute;N",placement:'right'});
    $('#soport').tooltip({title:"SOPORTE",placement:'right'});
    $('#regis').tooltip({title:"MEN&Uacute; DE REGISTRO",placement:'right'});
       $('#Registra_Notas').tooltip({title:"REGISTRA LAS NOTAS DE TUS ALUMNOS",placement:'left'});
       $('#tasistencia').tooltip({title:"REGISTRAR ASISTENCIA",placement:'left'});
       $('#tmensaje').tooltip({title:"DIRIGITE A TUS ALUMNOS",placement:'left'});
       $('#acriterios').tooltip({title:"DEFINIR CRITERIOS DE EVALUACI&Oacute;N",placement:'left'});
    $('#csesion').tooltip({title:"Bye que te vaya bien :D",placement:'left'});
}

function Abrir_ventana (pagina) {
    window.open(pagina,'','width=720,height=480,menubar=no,scrollbars=yes,toolbar=no,location=no,directories=no,resizable=no,top=0,left=0');
}

function justNumbers(e)
{
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum == 8) || (keynum == 46))
    return true;
    return /\d/.test(String.fromCharCode(keynum));
}
function imprSelec(muestra)
    {
        var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
    }
$(document).ready(function(){

    /*Event click button btnsave(value="GRABAR")*/
    $('#btnsave').click(function(evento){

    });
    /*Ocult or view List*/
    $(document).ready(function(){
        $('#btnlist').click(function (evento){
            $('#divlist').css("display","block");
            $('#btnocult').css("display","block");
            $('#btnlist').css("display","none");
        });
        $('#btnocult').click(function (evento){
            $('#divlist').css("display","none");
            $('#btnlist').css("display","block");
            $('#btnocult').css("display","none");
        });
    });
})
