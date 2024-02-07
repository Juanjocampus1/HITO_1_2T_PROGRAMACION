function cargarComentarios() {
    // Realizar una solicitud AJAX para obtener los comentarios actualizados
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "obtener_comentarios.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Actualizar la sección de comentarios con los nuevos datos
            document.getElementById("commentsDisplay").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

// Llamar a la función para cargar comentarios cuando se carga la página
window.onload = function() {
    cargarComentarios();
}
