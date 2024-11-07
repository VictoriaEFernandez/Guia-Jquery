let x = $(document);
x.ready(inicializarEventos)
function inicializarEventos(){
    //Capturar el P1
    let p = $("#parrafo_uno");
    p.click(obtenerParrafo)
    // Capturar la fila 1
    let fila1 = $("#fila1");
    fila1.click(presionFila1);

    // Capturar la fila 2
    let fila2 = $("#fila2");
    fila2.click(presionFila2);
    //Ocultar elemento
    let elemento = $("li");
    elemento.click(ocultarElemento);
    //Capturar las filas de la primer tabla
    let filasTabla1 = $("#tabla1 tr")
    filasTabla1.click(cambiarColorFila);
    //Capturar las filas de la primer tabla
    let filasTabla2 = $("#tabla2 tr")
    filasTabla2.click(cambiarColorFila);
    //Ejercicio 6
    let botonAumentar = $("#boton-aumentar");
    let botonDisminuir = $("#boton-disminuir");
    let botonResetear = $("#boton-resetear");
    
    //Ejercicio 7
    // Asignar funciones a los botones
    botonAumentar.click(cambiarTamanoFuente);
    botonDisminuir.click(cambiarTamanoFuente);
    botonResetear.click(resetearTamanoFuente);
    // Evento para el botón que cambia el contenido de la primera tabla
    let botonModificar = $("#modificar-tabla1");
    botonModificar.click(cambiarContenidoTabla1);

    //Ejercicio 8
    // Asignar eventos a los botones
    $("#boton1").click(function() {
        cambiarHipervinculo("https://www.google.com", "Ir a Google");
    });

    $("#boton2").click(function() {
        cambiarHipervinculo("https://www.wikipedia.org", "Ir a Wikipedia");
    });

    $("#boton3").click(function() {
        cambiarHipervinculo("https://www.openai.com", "Ir a OpenAI");
    });
    //Ejercicio 9
    // Capturar el botón de asociar clase
    let botonAsociar = $("#boton-asociar");
    botonAsociar.click(asociarClases);

    // Capturar el botón de desasociar clase
    let botonDesasociar = $("#boton-desasociar");
    botonDesasociar.click(desasociarClases);

    //Ejercicio 10
    $("#ocultar-texto").click(function() {
        $("strong").hide();
    });

    //Ejercicio 11
    $("#tabla-mouseover td").mouseover(function() {
        $(this).css("background-color", "yellow");
    });

    $("#tabla-mouseover td").mouseout(function() {
        $(this).css("background-color", "");
    });
    //Ejercicio 12
    $("#tabla-hover td").hover(
        function() {
            $(this).css("background-color", "pink");
        },
        function() {
            $(this).css("background-color", "");
        }
    );
    //Ejericio 13
    $("#div-movimiento").mousemove(function(event) {
        var x = event.pageX;
        var y = event.pageY;
        $("#coordenadas").text("X: " + x + ", Y: " + y);
    });
    // Al salir del div, muestra un mensaje indicando que el ratón está fuera
    $("#div-movimiento").mouseout(function() {
        $("#coordenadas").text("El cursor está fuera del div.");
    });    
    //Ejerccio 14
    manejarBotonVerde();
    manejarBotonAzul();
    //Ejercicio 15
    manejarDobleClick();
    //Ejercici0 16
    manejarFocus();
    //Ejercicio 17
    configurarBlur();
}
function obtenerParrafo(){
    alert("Este es el parrafo 1");
}
function presionFila1() {
    let fila1 = $("#fila1");
    fila1.css("background-color", "pink"); // Cambiar el color de fondo a rosa
}

function presionFila2() {
    let fila2 = $("#fila2");
    fila2.css("background-color", "lightgreen"); // Cambiar el color de fondo a verde
}
function ocultarElemento(){
    $(this).hide();
}
function cambiarColorFila(){
    //Cambia rl color de fondo de la fila clickeada
    $(this).css("background-color", "pink"); 
}

function cambiarTamanoFuente() {
    let tamanoActual = parseInt($(".noticia-descripcion").css("font-size")); // Obtener tamaño actual de la fuente
    let nuevoTamano;

    if ($(this).is("#boton-aumentar")) {
        nuevoTamano = tamanoActual + 2; // Aumentar tamaño
    } else if ($(this).is("#boton-disminuir")) {
        nuevoTamano = Math.max(tamanoActual - 2, 10); // Disminuir tamaño, no menos de 10px
    }

    $(".noticia-descripcion").css("font-size", nuevoTamano + "px"); // Cambiar el tamaño de la fuente
}

function resetearTamanoFuente() {
    $(".noticia-descripcion").css("font-size", "16px"); // Tamaño por defecto
}
//Ejercicio 7
function cambiarContenidoTabla1() {
    // Seleccionar todas las celdas (td) de la primera tabla y cambiar su contenido
    $("#tabla1 td").text("-");
}
//Ejecicio 8
function cambiarHipervinculo(nuevoHref, nuevoTexto) {
    // Cambiar el href y el texto del hipervínculo
    $("#miHipervinculo").attr("href", nuevoHref).text(nuevoTexto);
}
//Ejercicio 9
function asociarClases() {
    // Asocia las clases a los elementos thead y tbody
    $("#tabla-custom thead").addClass("estilo-thead");
    $("#tabla-custom tbody").addClass("estilo-tbody");
}

function desasociarClases() {
    // Desasocia las clases de los elementos thead y tbody
    $("#tabla-custom thead").removeClass("estilo-thead");
    $("#tabla-custom tbody").removeClass("estilo-tbody");
}
//Ejercicio 14
function manejarBotonVerde() {
    // Cambiar color de fondo al hacer mousedown
    $("#boton-verde").mousedown(function() {
        $(this).css("background-color", "green");
    });

    // Retornar al color original al soltar el botón
    $("#boton-verde").mouseup(function() {
        $(this).css("background-color", "rgb(175, 72, 72)");
    });
}

function manejarBotonAzul() {
    // Cambiar color de fondo al hacer mousedown en el botón azul
    $("#boton-azul").mousedown(function() {
        $(this).css("background-color", "blue");
    });

    // Retornar al color original al soltar el botón azul
    $("#boton-azul").mouseup(function() {
        $(this).css("background-color", "rgb(175, 72, 72)");
    });
}
//Ejercicio 15
function manejarDobleClick() {
    let div = $("#mi-div");
    let tamañoOriginal = { width: "800px", height: "70px" };
    let tamañoNuevo = { width: "250px", height: "250px" };
    let colorOriginal = "lightblue";
    let colorNuevo = "rgb(248, 9, 110)";

    // Doble clic para redimensionar el div y cambiar el color
    div.dblclick(function() {
        if ($(this).css("width") === tamañoOriginal.width) {
            $(this).css(tamañoNuevo);
            $(this).css("background-color", colorNuevo);
        } else {
            $(this).css(tamañoOriginal);
            $(this).css("background-color", colorOriginal);
        }
    });
}
//Ejercicio 16
function manejarFocus() {
    $("#input-text").focus(function() {
        $(this).css("color", "red");
    }).blur(function() {
        if ($(this).val().length === 0) {
            alert("No ingresó datos");
        }
    });
}
//Ejercicio 17: Efecto Blur
function configurarBlur() {
    $("#campo-datos").blur(function() {
        let cadena = $(this).val();
        if (cadena.length === 0) {
            alert("No ingresó datos");
        }
    });
}