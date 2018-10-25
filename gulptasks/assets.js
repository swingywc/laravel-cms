var gulp   = require('gulp'),
    elixir = require('laravel-elixir');

require('laravel-elixir-jade');

elixir(function(mix) {
  mix.jade({
    baseDir: './resources',
    pretty: true,
    search: '**/*.jade'
  })
  .sass('app.sass', 'public/css/app.css')
  .scripts('app.js', 'public/js/app.js')
  .browserSync({proxy: 'localhost:8000'});
});

gulp.task('compile-assets', ['jade', 'sass', 'scripts']);