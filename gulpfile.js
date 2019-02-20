var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
        .sass('app.scss')
        .sass('admin.scss')
        .imagemin()
        .scripts([
            './node_modules/jquery/dist/jquery.min.js',
            './node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
            './resources/js/jquery.ba-throttle-debounce.min.js',
            './resources/js/app.js',
            './resources/js/analytics.js'

        ])
        .browserSync(
            {
                proxy: 'capitaladvisors.app'
            }
        );
});
