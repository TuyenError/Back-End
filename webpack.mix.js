const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
mix.react('src\Components\Registerresources/js/components/Register.js', 'public/js/register.js');
