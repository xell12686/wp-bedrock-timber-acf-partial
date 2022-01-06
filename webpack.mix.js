// webpack.mix.js

let mix = require('laravel-mix');

require('laravel-mix-copy-watched');

mix.options({
    processCssUrls: false,
    postCss: [
        require("postcss-import"),
        require('postcss-nested'),
        require('autoprefixer'),
        require('tailwindcss')
    ]
});

let productionSourceMaps = false;
mix.sourceMaps(productionSourceMaps, 'source-map');

mix.setPublicPath('web/app/themes/muratechnology/assets/dist');
mix.version();

mix.sass('web/app/themes/muratechnology/assets/src/scss/main.scss', 'web/app/themes/muratechnology/assets/dist/css');

mix.js('web/app/themes/muratechnology/assets/src/js/main.js', 'web/app/themes/muratechnology/assets/dist/js/main.js');

// Images
mix.copyWatched(
    'web/app/themes/muratechnology/assets/src/img/**/*.{jpg,jpeg,png,gif,svg}',
    'web/app/themes/muratechnology/assets/dist/img',
    { base: 'web/app/themes/muratechnology/assets/src/img' }
);
mix.copyWatched(
    'web/app/themes/muratechnology/assets/src/stock/**/*.{jpg,jpeg,png,gif}',
    'web/app/themes/muratechnology/assets/dist/stock',
    { base: 'web/app/themes/muratechnology/assets/src/stock' }
);

// Fonts
mix.copyWatched(
    'web/app/themes/muratechnology/assets/src/fonts/**/*.{woff,woff2,otf}',
    'web/app/themes/muratechnology/assets/dist/fonts',
    { base: 'web/app/themes/muratechnology/assets/src/fonts' }
);

