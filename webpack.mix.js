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

mix.sass('resources/assets/sass/themes/default.scss', 'public/css/themes')
    .sass('resources/assets/sass/themes/light.scss', 'public/css/themes')
    .sass('resources/assets/sass/themes/dark.scss', 'public/css/themes')
    .sass('resources/assets/sass/zabuto_calendar.min.scss', 'public/css')
    .sass('resources/assets/sass/website/main.scss', 'public/css')
    .browserSync('http://localhost:8888');