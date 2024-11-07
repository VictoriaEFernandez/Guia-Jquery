<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous">
    </script>
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <p id = 'parrafo_uno'>Este es el primer parrafo</p>
    <p id = 'parrafo_dos'>Este es el segundo parrafo</p>
    <h2>Tabla con dos filas</h2>
    <br><br>
<!--Tercer Ejercicio-->
    <table border="1">
        <tr id="fila1">
            <td>Fila 1, columna 1</td>
            <td>Fila 1, columna 2</td>
        </tr>
        <tr id="fila2">
            <td>Fila 2, columna 1</td>
            <td>Fila 2, columna 2</td>
        </tr>
    </table>
    <br><br>
    <hr>
<!--Cuarto Ejercicio-->
    <h2>Lista de Elementos</h2>
    <ul>
        <li>Elemento 1</li>
        <li>Elemento 2</li>
        <li>Elemento 3</li>
        <li>Elemento 4</li>
    </ul>
    <br><br>
    <hr>
<!--Quinto Ejercicio-->
<h2>Primera Tabla</h2>
    <table id="tabla1" border="1">
        <tr>
            <td>Fila 1, Tabla 1 - Columna 1</td>
            <td>Fila 1, Tabla 1 - Columna 2</td>
        </tr>
        <tr>
            <td>Fila 2, Tabla 1 - Columna 1</td>
            <td>Fila 2, Tabla 1 - Columna 2</td>
        </tr>
        <tr>
            <td>Fila 3, Tabla 1 - Columna 1</td>
            <td>Fila 3, Tabla 1 - Columna 2</td>
        </tr>
    </table>

    <h2>Segunda Tabla</h2>
    <table id="tabla2" border="1">
        <tr>
            <td>Fila 1, Tabla 2 - Columna 1</td>
            <td>Fila 1, Tabla 2 - Columna 2</td>
        </tr>
        <tr>
            <td>Fila 2, Tabla 2 - Columna 1</td>
            <td>Fila 2, Tabla 2 - Columna 2</td>
        </tr>
        <tr>
            <td>Fila 3, Tabla 2 - Columna 1</td>
            <td>Fila 3, Tabla 2 - Columna 2</td>
        </tr>
    </table>
</table>
<br><br>
<hr>
<!--Sexto Ejercicio-->
    <h1>Últimas Noticias</h1>

    <div class="noticia">
        <h2>Título de la Noticia 1</h2>
        <p class="noticia-descripcion">Descripción de la noticia 1. Aquí se da información relevante sobre el tema tratado.</p>
    </div>

    <div class="noticia">
        <h2>Título de la Noticia 2</h2>
        <p class="noticia-descripcion">Descripción de la noticia 2. Más detalles y contexto sobre esta noticia específica.</p>
    </div>

    <div class="noticia">
        <h2>Título de la Noticia 3</h2>
        <p class="noticia-descripcion">Descripción de la noticia 3. Un resumen de los puntos más importantes.</p>
    </div>

    <div>
        <button id="boton-aumentar">Aumentar tamaño de fuente</button>
        <button id="boton-disminuir">Disminuir tamaño de fuente</button>
        <button id="boton-resetear">Restablecer tamaño de fuente</button>
    </div>
    <br><br>
    <hr>
<!--Septimo Ejercicio-->
    <!-- Título -->
    <h2>Ejercicio - Modificar la primera tabla</h2>

    <!-- Primera tabla (se modificará con el botón) -->
    <h3>Primera Tabla</h3>
    <table id="tabla1">
        <tr>
            <td>Fila 1, Columna 1</td>
            <td>Fila 1, Columna 2</td>
            <td>Fila 1, Columna 3</td>
        </tr>
        <tr>
            <td>Fila 2, Columna 1</td>
            <td>Fila 2, Columna 2</td>
            <td>Fila 2, Columna 3</td>
        </tr>
        <tr>
            <td>Fila 3, Columna 1</td>
            <td>Fila 3, Columna 2</td>
            <td>Fila 3, Columna 3</td>
        </tr>
    </table>
    <!-- Segunda tabla (esta permanece intacta) -->
    <h3>Segunda Tabla</h3>
    <table id="tabla2">
        <tr>
            <td>Fila 1, Columna 1</td>
            <td>Fila 1, Columna 2</td>
            <td>Fila 1, Columna 3</td>
        </tr>
        <tr>
            <td>Fila 2, Columna 1</td>
            <td>Fila 2, Columna 2</td>
            <td>Fila 2, Columna 3</td>
        </tr>
        <tr>
            <td>Fila 3, Columna 1</td>
            <td>Fila 3, Columna 2</td>
            <td>Fila 3, Columna 3</td>
        </tr>
    </table>
    <!-- Botón para modificar la primera tabla -->
    <button id="modificar-tabla1">Cambiar contenido de la primera tabla</button>
    <br><br>
    <hr>
<!--Ejercicio 8-->
    <h2>Ejercicio - Cambiar Hipervínculo</h2>

    <!-- Hipervínculo inicial con cadena vacía -->
    <a id="miHipervinculo" href="">Texto del Hipervínculo</a>

    <!-- Botones para cambiar el hipervínculo -->
    <div>
        <button id="boton1">Ir a Google</button>
        <button id="boton2">Ir a Wikipedia</button>
        <button id="boton3">Ir a OpenAI</button>
    </div>
    <br><br>
    <hr>
<!--Ejercicio 9--> 
<h1>Ejercicio con Tabla</h1>

<table id="tabla-custom">
    <thead>
        <tr>
            <th>Encabezado A</th>
            <th>Encabezado B</th>
            <th>Encabezado C</th>
        </tr>
    </thead>
    <tbody>
        <tr id="fila-a">
            <td>Fila A, Columna 1</td>
            <td>Fila A, Columna 2</td>
            <td>Fila A, Columna 3</td>
        </tr>
        <tr id="fila-b">
            <td>Fila B, Columna 1</td>
            <td>Fila B, Columna 2</td>
            <td>Fila B, Columna 3</td>
        </tr>
    </tbody>
</table>
<button id="boton-asociar">Asociar Clase</button>
<button id="boton-desasociar">Desasociar Clase</button>
<hr>
<!--Ejercicio 10-->
    <h1>Administracion de eventos con Jquery</h1>
    <p><strong>Este texto es importante.</strong> Algunas palabras tienen <strong>énfasis</strong>.</p>
    <button id="ocultar-texto">Ocultar texto en negrita</button>
    <br>
    <hr>
<!--Ejercicio 11: Eventos MouseOver y mouseout-->
    <h1>Eventos mouseover y mouseout</h1>
    <table id="tabla-mouseover">
        <tr>
            <td>Columna 1, Fila 1</td>
            <td>Columna 2, Fila 1</td>
        </tr>
        <tr>
            <td>Columna 1, Fila 2</td>
            <td>Columna 2, Fila 2</td>
        </tr>
    </table>
    <br>
    <hr>
<!--Ejercicio 12: Evento Hover-->
    <h1>Evento hover</h1>
        
        <table id="tabla-hover">
            <tr>
                <td>Columna 1, Fila 1</td>
                <td>Columna 2, Fila 1</td>
            </tr>
            <tr>
                <td>Columna 1, Fila 2</td>
                <td>Columna 2, Fila 2</td>
            </tr>
        </table>
    <br>
    <hr>
<!--Ejercicio 13: mousemove-->
    <h1>Evento mousemove</h1>
    <div id="div-movimiento" style="width:200px;height:200px;border:1px solid black;">
        Move el raton aquí
    </div>
    <p>Coordenadas: <span id="coordenadas"></span></p>
    <br>
    <hr>
<!--Ejercicio 14: Eventos mousedown y mouseup -->
    <h1>Cambiar color de botones con mousedown y mousedown </h1>
    <button id="boton-verde">Botón Verde</button>
    <button id="boton-azul">Botón Azul</button>
    <br><hr>
<!--Ejercico 15> Evento dbclick -->
    <h1>Redimendionar Div: Evento dbclick</h1>
    <div id="mi-div"></div>
    <br><hr>
<!--Ejercicio 16: Evento Focus-->
    <h1>Evento Focus</h1>
    <input type="text" id="input-text" placeholder="Escribe algo...">
<!--Ejercicio 17-->
    <h1>Formulario con evento Blur</h1>
    <form >
        <label for="campo-datos">Ingrese Algo: </label>
        <input type="text" id="campo-datos">
    </form>
</body>
</html>