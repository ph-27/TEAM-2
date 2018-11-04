const mix = require('laravel-mix');

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

mix.babel([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/jquery-ui/ui/widgets/datepicker.js',
    'node_modules/jquery-ui/ui/i18n/datepicker-ja.js',
    'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'
], 'public/js/vendor.js')
.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copyDirectory('resources/images', 'public/images');
