function cargarComentarios() {
    // Hacer una petición AJAX para obtener los comentarios
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Actualizar el contenido de la sección de comentarios
            document.getElementById("commentsDisplay").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "../../ACTIONS/comentario_action.php", true);
    xhttp.send();
}

// Cargar los comentarios al cargar la página y cada 5 segundos
window.onload = cargarComentarios;
setInterval(cargarComentarios, 5000); // Actualizar cada 5 segundos
