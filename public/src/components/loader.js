// JavaScript para mostrar el loader al enviar el formulario
document.getElementById('commentSection').addEventListener('submit', function() {
    // Mostrar el loader
    document.getElementById('loader').style.display = 'block';

    // Ocultar el loader después de 0.3 segundos (300 milisegundos)
    setTimeout(function() {
        document.getElementById('loader').style.display = 'none';
    }, 1500);
});