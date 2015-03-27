var gulp = require('gulp');
var uglify = require('gulp-uglify');
var cssmin = require('gulp-cssmin');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

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

    gulp.src('app/assets/javascript/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('public/js'))
});

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

gulp.task('js', function() {
    gulp.src('app/assets/javascript/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('public/js'))
});


gulp.task('watch', function()
{
    gulp.watch('app/assets/sass/**/*.scss', ['css']);
    gulp.watch('app/assets/javascript/*.js', ['js']);
});


gulp.task('default', ['watch']);
