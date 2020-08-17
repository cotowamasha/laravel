const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .extract(['vue'])
    .sass('resources/sass/main.sass', 'public/css');
