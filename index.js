document.addEventListener("DOMContentLoaded", function(event) {
    console.log("DOM fully loaded and parsed");
});


document.querySelector("#block").addEventListener("click", (e) => { // obtiene al valor de los parametros 
    if (e.target.id === "button") { // asigna cada valor a una variable
        var codigo = $('#codigo').val();
        var seccion = $('#seccion').val();
        var nombre = $('#nombre').val();
        var tienda = $('#tienda').val();
        var precio = $('#precio').val();
        var cantidad = $('#cantidad').val();
        $.post("registrar_item.php", { // envia las variables al archivo php
            codigo: codigo,
            seccion: seccion,
            nombre: nombre,
            tienda: tienda,
            precio: precio,
            cantidad: cantidad
        }, function(data) { //modifica el DOM 
            $("#block").replaceWith(data);
        });
    }
});


function mostrar_items(archivo) { // request al servidor para manipular el  DOM 
    var ajaxrequest = new XMLHttpRequest();
    ajaxrequest.onreadystatechange = function() {
        if (ajaxrequest.readyState == 4 && ajaxrequest.status == 200) {
            document.getElementById('block').innerHTML = ajaxrequest.responseText;

        }
    }

    ajaxrequest.open('GET', archivo, true);
    ajaxrequest.send();
}



function ejecutarAJAX(archivo) { // modificar el DOM segun la opcion selecionada
    var ajaxrequest = new XMLHttpRequest();
    ajaxrequest.onreadystatechange = function() {
        if (ajaxrequest.readyState == 4 && ajaxrequest.status == 200) {
            document.getElementById('block').innerHTML = ajaxrequest.responseText;

        }
    }

    ajaxrequest.open('GET', archivo, true);
    ajaxrequest.send();
}


var resultado = document.getElementById('result');

function eliminarAJAX() { // request para enviar y modificar el DOM
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    var c = document.getElementById('codigo').value;
    var resultado = document.getElementById('result');
    var info = "codigo=" + c;

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            var mensaje = xmlhttp.responseText;
            resultado.innerHTML = mensaje;
        }
    }

    xmlhttp.open("POST", "eliminar_item.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(info);
}

document.addEventListener("DOMContentLoaded", function(event) {
    console.log("DOM fully loaded and parsed");
});