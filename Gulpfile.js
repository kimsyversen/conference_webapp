var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var cssmin = require('gulp-cssmin');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var concatCss = require('gulp-concat-css');

gulp.task('js', function()
{
    var basePath = "public/components/vendor/";
    gulp.src(
        [
            basePath + "jquery/dist/jquery.min.js",
            basePath + "bootstrap/dist/js/bootstrap.min.js",
            basePath + "add-to-homescreen/src/addtohomescreen.min.js",
            basePath + "bootstrap3-dialog/src/js/bootstrap-dialog.js",
            basePath + "fastclick/lib/fastclick.js",
            "app/assets/javascript/src/conference.js"
        ])
        .pipe(concat('conference.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('public/js'))
});




gulp.task('css', function()
{
    gulp.src('app/assets/sass/Main.scss')
        .pipe(sass())
        .pipe(autoprefixer('last 10 version'))
        .pipe(gulp.dest('app/assets/css/'));

    var basePath = "public/components/vendor/";

    gulp.src([
        basePath + "bootstrap/dist/css/bootstrap.css",
        basePath + "animate-css/animate.css",
        basePath + "add-to-homescreen/style/addtohomescreen.css",
        basePath + "bootstrap3-dialog/src/css/bootstrap-dialog.css",
        basePath + "font-awesome/css/font-awesome.css",
        basePath + "lato-font/css/lato-font.css",
        "app/assets/css/Main.css"
    ])
        .pipe(concatCss("conference.min.css"))
        .pipe(cssmin())
        .pipe(gulp.dest('public/css'));

});


gulp.task('production', function()
{
    gulp.run('css');
    gulp.run('js');
});


gulp.task('watch', function() {
   gulp.watch('app/assets/sass/**/*.scss', ['css']);
   gulp.watch('app/assets/javascript/**/*.js', ['js']);
});

gulp.task('default', ['watch']);
