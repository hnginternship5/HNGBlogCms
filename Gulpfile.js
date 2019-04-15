const gulp = require('gulp');
const concat = require('gulp-concat');
const cleanCSS = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');

gulp.task('css', () =>
  gulp
    .src('assets/css/*.css')
    .pipe(sourcemaps.init())
    .pipe(cleanCSS())
    .pipe(autoprefixer({ browsers: ['last 2 versions'], cascade: false }))
    .pipe(concat('main.css'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('build'))
);
