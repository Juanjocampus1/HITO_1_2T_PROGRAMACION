document.getElementById('commentButton').addEventListener('click', function() {
    document.getElementById('commentSection').classList.toggle('hidden');
});

document.getElementById('publishButton').addEventListener('click', function() {
    const commentInput = document.getElementById('commentInput');
    const comment = commentInput.value.trim();

    if (comment) {
        const commentsDisplay = document.getElementById('commentsDisplay');
        const newComment = document.createElement('div');
        newComment.classList.add('p-2', 'border', 'rounded', 'mb-2');
        newComment.textContent = comment;
        commentsDisplay.appendChild(newComment);
        commentInput.value = ''; // Limpiar el campo de entrada
    }
});

document.addEventListener('DOMContentLoaded', function() {
    // Obtiene una referencia al botón de comentar
    const commentButton = document.getElementById('commentButton');

    // Agrega un evento de clic al botón
    commentButton.addEventListener('click', function() {
        // Verifica si el usuario ha iniciado sesión usando la variable JavaScript
        if (!usuarioAutenticado) {
            // Si no ha iniciado sesión, redirige a login_singin_index.php
            window.location.href = 'login_singin_index.php';
        } else {
            // Si ha iniciado sesión, muestra la sección de comentarios
            document.getElementById('commentSection').classList.toggle('hidden');
        }
    });
});
