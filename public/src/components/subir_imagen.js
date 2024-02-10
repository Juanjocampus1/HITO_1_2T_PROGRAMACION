const subirArchivo = document.getElementById('subirArchivo');
const fileInput = document.getElementById('fileInput');

subirArchivo.addEventListener('click', () => {
    fileInput.click();
});

fileInput.addEventListener('change', () => {
    const archivo = fileInput.files[0];

    const formData = new FormData();
    formData.append('archivo', archivo);

    fetch('../../../ACTIONS/almacenar_comentario_action.php', {
        method: 'POST',
        body: formData
    })
        .then(response => {
            console.log('Archivo subido con éxito');
        })
        .catch(error => {
            console.error('Error al subir el archivo:', error);
        });
});
