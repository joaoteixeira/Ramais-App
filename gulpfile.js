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

elixir(function(mix) {
    mix.less('app.less');

    mix.scripts('app.js')
        .scripts(['vue.js'], 'public/js/components/vue.js', 'node_modules/vue/dist')
        .scripts(['vue-resource.js'], 'public/js/components/vue-resource.js', 'node_modules/vue-resource/dist');
});
