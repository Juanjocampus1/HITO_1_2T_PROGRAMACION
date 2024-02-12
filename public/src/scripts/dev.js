const { exec } = require('child_process');

// Comando para iniciar el servidor PHP
const phpServerCommand = 'php -S localhost:8000';

// Ejecutar el comando para iniciar el servidor PHP
const phpServer = exec(phpServerCommand);

// Manejar la salida del servidor PHP
phpServer.stdout.on('data', (data) => {
    console.log(`Servidor PHP: ${data}`);
});

phpServer.stderr.on('data', (data) => {
    console.error(`Error en el servidor PHP: ${data}`);
});

phpServer.on('close', (code) => {
    console.log(`Servidor PHP cerrado con código ${code}`);
});