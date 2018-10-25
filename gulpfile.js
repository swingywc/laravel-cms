'use strict';

var gulp       = require('gulp'),
    requireDir = require('require-dir');

requireDir('./gulptasks');

gulp.task('start', ['compile-assets', 'serve']);