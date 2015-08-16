var elixir = require('laravel-elixir');

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

elixir(function (mix) {
  mix.scripts("app.js");

  mix.scripts([
    "../vendor/vue/dist/vue.js",
    "../vendor/vue-resource/dist/vue-resource.js"
  ], "public/js/vendor.js");

  mix.styles("app.css");

  mix.styles([
    "../vendor/bootstrap/dist/css/bootstrap.css"
  ], "public/css/vendor.css");
});
