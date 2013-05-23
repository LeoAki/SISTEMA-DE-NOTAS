/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function objetoAjax(){
        var xmlhttp=false;
        try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
                try {
                   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                        xmlhttp = false;
                }
        }

        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
                xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
}
function Mostraralumnosseccion(datos){
        divResultado = document.getElementById('alumlist');
        ajax=objetoAjax();
        ajax.open("GET", "listalumnos.php?seccionalumno="+datos);
        ajax.onreadystatechange=function() {
               if (ajax.readyState==4) {
                       divResultado.innerHTML = ajax.responseText
               }else{
                   document.getElementById('alumlist').innerHTML='Cargando...';
               }
        }
        ajax.send(null)
}
function MostrarComponen(sinatur,seccx,idpersonast){
        divResultadoo = document.getElementById('divcompo');
        ajax=objetoAjax();
        ajax.open("GET", "listcom.php?idsinau="+sinatur+"&idsecc="+seccx+"&idpersonast="+idpersonast);
        ajax.onreadystatechange=function(){
            if (ajax.readyState==4) {
                       divResultadoo.innerHTML = ajax.responseText
               }else{
                   document.getElementById('divcompo').innerHTML='Cargando...';
               }
        }
        ajax.send(null);
}