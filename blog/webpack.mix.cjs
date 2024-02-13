const mix = require('laravel-mix');
mix.js('resource/js/app.js','public/js')
    .sass('resources/sass/app.scss','public/css')
    .browserSync({
        proxy:'192.168.72.48:8000',
        port:3000
    });
