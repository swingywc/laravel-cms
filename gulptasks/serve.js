var gulp = require('gulp'),
    connect = require('gulp-connect-php');

/* create a task to serve the app */
gulp.task('serve', function() {
  connect.server({
    base: './public'
  });
});