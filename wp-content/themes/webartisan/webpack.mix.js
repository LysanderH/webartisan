let mix = require('laravel-mix');

mix.js('./assets/js/bundle.js', './dist/js/theme.min.js')
    .sass('./assets/scss/style.scss', './style.css')
    .options({
        postCss: [
            require('autoprefixer')({
                browsers: ['last 13 versions'],
            })
        ]
    });

