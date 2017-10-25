var gulp = require('gulp');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');

//uglify js
//var uglify = require('gulp-uglify');
var minifyjs = require('gulp-js-minify');

gulp.task('message',function(){
	return console.log('Gulp is runniong...');
});


//minify css
gulp.task('cssMinify', function () {
    gulp.src('resource/front_end/css/unminify/*.css')
        .pipe(cssmin())
        //.pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('resource/front_end/css'));
});

//uglify js
/*gulp.task('jsMinify', function () {
    gulp.src('resource/front_end/js*//*.js')
        .pipe(uglify())
        .pipe(gulp.dest('resource/front_end/js/pro'));
});*/

//gulp-js-minify
gulp.task('minify-js', function(){
    gulp.src('resource/front_end/js/unminify/*.js')
        .pipe(minifyjs())
        .pipe(gulp.dest('resource/front_end/js'));
});