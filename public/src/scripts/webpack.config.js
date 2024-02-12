const path = require('path');

module.exports = {
    mode: 'development',
    entry: './public/src/scripts/script.js', // Archivo de entrada para webpack
    output: {
        filename: 'bundle.js', // Archivo de salida generado por webpack
        path: path.resolve(__dirname, 'public/build'), // Directorio de salida para los archivos compilados
    },
    module: {
        rules: [
            {
                test: /\.css$/, // Regla para archivos CSS
                use: ['style-loader', 'css-loader'], // Cargadores a utilizar para los archivos CSS
            },
        ],
    },
};