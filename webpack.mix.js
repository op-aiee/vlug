let mix = require('laravel-mix');

mix.  js('resources/assets/js/scripts.js',   'public/js')
   .sass('resources/assets/sass/style.scss', 'public/css');

if (mix.inProduction()) {
    mix.version();
}
