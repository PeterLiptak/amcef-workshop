let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.browserSync({
        files: ["**/*.css", "**/*.js", "**/*.php"],
        proxy: 'localhost:8000'
    })
    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/datatables.net-bs/css/dataTables.bootstrap.css'
    ], 'public/css/all.css')
    .scripts([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/datatables.net/js/jquery.dataTables.js',
        'node_modules/datatables.net-bs/js/dataTables.bootstrap.js' 
    ],'public/js/all.js')
    .autoload({
        jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"]
    })
    .copy(
        'node_modules/bootstrap/fonts/glyphicons-halflings-regular.woff2', 'public/fonts/glyphicons-halflings-regular.woff2'
    );
