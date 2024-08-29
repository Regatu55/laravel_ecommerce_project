const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'custom-public/js')
   .sass('resources/sass/app.scss', 'custom-public/css');
   //     [
   //    require('postcss-import'),
   //    require('tailwindcss'),
   //    require('autoprefixer'),
   // ]);
