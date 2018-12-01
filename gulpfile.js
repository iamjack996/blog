const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    const baseCss = [
        './node_modules/bootstrap/dist/css/bootstrap.css',
    ];

    mix.scripts([
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/bootstrap/dist/js/bootstrap.min.js'
    ], 'public/js/baseJs.js');

    // template base page

    mix.styles(baseCss.concat([
        './node_modules/startbootstrap-1-col-portfolio/css/1-col-portfolio.css'
    ]), 'public/css/template.css');

});
