var gulp = require('gulp');

var cssmin = require('gulp-cssmin');

var sass = require('gulp-sass');

var autoprefixer = require('gulp-autoprefixer');


gulp.task('css', function()
{
    gulp.src('app/assets/sass/Main.scss')
        .pipe(sass())
        .pipe(autoprefixer('last 10 version'))
        .pipe(gulp.dest('public/css'))

    gulp.src('app/assets/sass/Admin.scss')
        .pipe(sass())
        .pipe(autoprefixer('last 10 version'))
        .pipe(gulp.dest('public/css'))
});


gulp.task('production', function()
{
    gulp.src('app/assets/sass/Main.scss')
        .pipe(sass())
        .pipe(cssmin())
        .pipe(autoprefixer('last 10 version'))
        .pipe(gulp.dest('public/css'))

    gulp.src('app/assets/sass/Admin.scss')
        .pipe(sass())
        .pipe(cssmin())
        .pipe(autoprefixer('last 10 version'))
        .pipe(gulp.dest('public/css'))

});


gulp.task('watch', function()
{
    gulp.watch('app/assets/sass/**/*.scss', ['css']);
});


gulp.task('default', ['watch']);
