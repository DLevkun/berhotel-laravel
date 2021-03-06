const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.js('resources/js/app.js', 'public/js');

mix.styles([
        'resources/css/app.css',
        'public/css/vendor/videojs.css'
    ], 'public/css/all.css');

mix.styles([
        'resources/css/tourinfocss.css',
        'public/css/vendor/videojs.css'
    ], 'public/css/all.css');

mix.styles([
        'resources/css/tourcontainercss.css',
        'public/css/vendor/videojs.css'
    ], 'public/css/all.css');

mix.styles([
        'resources/css/roominfocss.css',
        'public/css/vendor/videojs.css'
    ], 'public/css/all.css');
