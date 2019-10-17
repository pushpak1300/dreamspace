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

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');
mix.scripts([
   'public/assets/js/common-bundle-script.js',
   'public/assets/js/vendor/echarts.min.js',
   'https://cdn.jsdelivr.net/npm/sweetalert2@8',
   'public/assetsjs/es5/echart.options.min.js',
   'public/assets/js/script.js',
   'public/assets/js/vendor/jquery.smartWizard.min.js',
   'public/assets/js/sidebar.large.script.js',
   'public/assets/js/vendor/datatables.min.js',
   'public/assets/js/vendor/tagging.min.js',
   'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js',
], 'public/js/all.js');