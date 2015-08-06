process.env.DISABLE_NOTIFIER = true

var elixir = require('laravel-elixir');
var gulp = require('gulp');

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

gulp.task('copyfiles', function() {

    gulp.src('vendor/bower/jquery/dist/jquery.js')
        .pipe(gulp.dest('resources/assets/js/'));

    gulp.src('vendor/bower/bootstrap-sass/assets/stylesheets/**')
        .pipe(gulp.dest('resources/assets/sass/bootstrap'));

    gulp.src('vendor/bower/bootstrap-sass/assets/javascripts/bootstrap.min.js')
        .pipe(gulp.dest('resources/assets/js'));

    gulp.src('vendor/bower/bootstrap-sass/assets/fonts/**')
        .pipe(gulp.dest('public/assets/fonts'));

    gulp.src('vendor/bower/fontawesome/scss/**')
        .pipe(gulp.dest('resources/assets/sass/fontawesome'));

    gulp.src('vendor/bower/fontawesome/fonts/**')
        .pipe(gulp.dest('public/assets/fonts'));
    })


elixir(function(mix) {

    mix.scripts([
            'js/jquery.js',
            'js/bootstrap.min.js',
            'js/app.js'
        ],
        'public/assets/js/scripts.js',
        'resources/assets'
    );

    mix.sass('app.scss', 'public/assets/css/app.css');
});
