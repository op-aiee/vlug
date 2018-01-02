let mix = require('laravel-mix');

mix.disableNotifications();

mix.  js('resources/assets/js/scripts.js',   'public/js')
   .sass('resources/assets/sass/style.scss', 'public/css');

mix.version();
