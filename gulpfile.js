var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css'); 
var minifyjs = require('gulp-js-minify');
gulp.task('default', function () {
    return gulp.src('style.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('dist'));
});
 gulp.task('default', function () {
    return gulp.src('dist/style.css')
        .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('dist'));
});
gulp.task('default', function(){
  return gulp.src('js/main.js')
    .pipe(minifyjs())
    .pipe(gulp.dest('dist'));
});