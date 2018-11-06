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

const SCSS_PATH = 'resources/sass/';
const FRONTEND_PATH = 'public/css';

mix.js('resources/js/app.js', 'public/js')
  .js('resources/js/main.js', 'public/js')
  .js('resources/js/map-custom.js', 'public/js')
  .js('resources/js/slick-custom.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .sass(SCSS_PATH + 'main.scss', FRONTEND_PATH)
  .sass(SCSS_PATH + 'util.scss', FRONTEND_PATH)
  // .sass(SCSS_PATH + 'bootstrap-grid.scss', FRONTEND_PATH)
  // .sass(SCSS_PATH + 'bootstrap.scss', FRONTEND_PATH)
  // .sass(SCSS_PATH + 'custom.scss', FRONTEND_PATH)
  // .sass(SCSS_PATH + 'daterangepicker.scss', FRONTEND_PATH)
  // .sass(SCSS_PATH + 'hamburgers.scss', FRONTEND_PATH)
  // .sass(SCSS_PATH + 'lightbox.scss', FRONTEND_PATH)
  // .sass(SCSS_PATH + 'main.scss', FRONTEND_PATH)
  // .sass(SCSS_PATH + 'select2.scss', FRONTEND_PATH)
  // .sass(SCSS_PATH + 'slick/slick-theme.scss', FRONTEND_PATH)
  // .sass(SCSS_PATH + 'slick/slick.scss', FRONTEND_PATH)
  // .sass(SCSS_PATH + 'util.scss', FRONTEND_PATH)
  .copyDirectory('resources/fonts', 'public/fonts')
  .copyDirectory('resources/vendor', 'public/vendor')
  .copyDirectory('resources/images', 'public/images');
