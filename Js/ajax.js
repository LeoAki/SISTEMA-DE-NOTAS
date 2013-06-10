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

function Mostrarconsolidado(datos){
        divResultado = document.getElementById('divconsolidado');
        ajax=objetoAjax();
        ajax.open("GET","consolidadoajax.php?codigoseccion="+datos);
        ajax.onreadystatechange=function() {
               if (ajax.readyState==4) {
                       divResultado.innerHTML = ajax.responseText
               }else{
                   document.getElementById('divconsolidado').innerHTML='Cargando...';
               }
        }
        ajax.send(null)
}

function Indcompo(componente,numero){
    divResultado= document.getElementById('divindicador'+numero);
    ajax=objetoAjax();
    ajax.open("GET","regcriterioajax.php?compind="+componente+"&idnumero="+numero);
    ajax.onreadystatechange=function() {
               if (ajax.readyState==4) {
                       divResultado.innerHTML = ajax.responseText
               }else{
                   document.getElementById('divindicador'+numero).innerHTML='Cargando...';
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