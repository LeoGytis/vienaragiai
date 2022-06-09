let mix = require('laravel-mix');

mix.js('src/js/app.js', 'public')
.sass('src/css/app.scss', 'public');


//npx mix 
//npx mix watch - ziuri ir padaro mix uzsaugius failus