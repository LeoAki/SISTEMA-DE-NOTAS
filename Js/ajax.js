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

function objetoAjax2(){
        var xmlhttp=true;
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

function Mostrarconsolidado(datos,nivel,grado){
        divResultado = document.getElementById('divconsolidado');
        ajax=objetoAjax();
        ajax.open("GET","consolidadoajax.php?codigoseccion="+datos+"&niveldelaula="+nivel+"&gradodelaula="+grado);
        ajax.onreadystatechange=function() {
               if (ajax.readyState==4) {
                       divResultado.innerHTML = ajax.responseText
               }else{
                   document.getElementById('divconsolidado').innerHTML='Cargando...';
               }
        }
        ajax.send(null)
}

function ajax_4(uno,dos,tres,cuatro,cinco){
        divResultadoo = document.getElementById('modelo');
        ajax=objetoAjax();
        ajax.open("GET", "demoindicador.php?acriterio="+uno+"&acodigo="+dos+"&acomponente="+tres+"&anumero="+cuatro+"&apeso="+cinco);
        ajax.onreadystatechange=function(){
            if (ajax.readyState==4) {
                       divResultadoo.innerHTML = ajax.responseText
               }else{
                   document.getElementById('modelo').innerHTML='Cargando...';
               }
        }
        ajax.send(null);
}
function MostrarComponen2(sinatur,seccx,idpersonast){
        divResultadoo = document.getElementById('divcompo2');
        ajax=objetoAjax2();
        ajax.open("GET", "liscom2.php?idsinau="+sinatur+"&idsecc="+seccx+"&idpersonast="+idpersonast);
        ajax.onreadystatechange=function(){
            if (ajax.readyState==4) {
                       divResultadoo.innerHTML = ajax.responseText
               }else{
                   document.getElementById('divcompo2').innerHTML='Cargando...';
               }
        }
        ajax.send(null);
}
function ajaxdelet(code,divas){
        divResultadoo = document.getElementById(divas);
        ajax=objetoAjax();
        ajax.open("GET", "procesa1.php?codigo="+code);
        ajax.onreadystatechange=function(){
            if (ajax.readyState==4) {
                       divResultadoo.innerHTML = ajax.responseText
               }else{
                   document.getElementById(divas).innerHTML='Espere un momento porfavor';
               }
        }
        ajax.send(null);
}
function Mostrarconsolidadoiibimestre(datos,nivel,grado){
        divResultado = document.getElementById('diviibimestre');
        ajax=objetoAjax();
        ajax.open("GET","consolidadoajax2.php?codigoseccion="+datos+"&niveldelaula="+nivel+"&gradodelaula="+grado);
        ajax.onreadystatechange=function() {
               if (ajax.readyState==4) {
                       divResultado.innerHTML = ajax.responseText
               }else{
                   document.getElementById('diviibimestre').innerHTML='Guarde paciencia, un momento porfavor';
               }
        }
        ajax.send(null)
}
function Aulaspornivel(nivel,grado){
    divResultado= document.getElementById('divaulas');
    ajax=objetoAjax();
    ajax.open("GET","apn.php?nv="+nivel+"&gr="+grado);
    ajax.onreadystatechange=function() {
               if (ajax.readyState==4) {
                       divResultado.innerHTML = ajax.responseText
               }else{
                   document.getElementById('divaulas').innerHTML='CARGANDO';
               }
        }
        ajax.send(null)
}
function ajaxdelet3(code,divas){
        divResultadoo = document.getElementById(divas);
        ajax=objetoAjax();
        ajax.open("GET", "procesa13.php?codigo="+code);
        ajax.onreadystatechange=function(){
            if (ajax.readyState==4) {
                       divResultadoo.innerHTML = ajax.responseText
               }else{
                   document.getElementById(divas).innerHTML='Espere un momento porfavor';
               }
        }
        ajax.send(null);
}
function MostrarComponen3(sinatur,seccx,idpersonast){
        divResultadoo = document.getElementById('divcompo3');
        ajax=objetoAjax2();
        ajax.open("GET", "liscom3.php?idsinau="+sinatur+"&idsecc="+seccx+"&idpersonast="+idpersonast);
        ajax.onreadystatechange=function(){
            if (ajax.readyState==4) {
                       divResultadoo.innerHTML = ajax.responseText
               }else{
                   document.getElementById('divcompo3').innerHTML='Cargando...';
               }
        }
        ajax.send(null);
}
function MostrarComponen4(sinatur,seccx,idpersonast){
        divResultadoo = document.getElementById('divcompo4');
        ajax=objetoAjax();
        ajax.open("GET", "liscom4.php?idsinau="+sinatur+"&idsecc="+seccx+"&idpersonast="+idpersonast);
        ajax.onreadystatechange=function(){
            if (ajax.readyState==4) {
                       divResultadoo.innerHTML = ajax.responseText
               }else{
                   document.getElementById('divcompo4').innerHTML='Cargando...';
               }
        }
        ajax.send(null);
}
function ajaxdelet4(code,divas){
        divResultadoo = document.getElementById(divas);
        ajax=objetoAjax();
        ajax.open("GET", "procesa14.php?codigo="+code);
        ajax.onreadystatechange=function(){
            if (ajax.readyState==4) {
                       divResultadoo.innerHTML = ajax.responseText
               }else{
                   document.getElementById(divas).innerHTML='Espere un momento porfavor';
               }
        }
        ajax.send(null);
}