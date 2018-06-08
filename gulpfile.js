// var gulp = require('gulp'),
//     sass = require('gulp-sass'),
//     browserSync = require('browser-sync').create(),
//     reload = browserSync.reload;



// // -- Start BrowserSync --//
// gulp.task('browser-sync', function() {
//     browserSync.init({
//         proxy: 'http://localhost/for-glory'
//     });
// });
// //-- Start SASS Complie --//
// gulp.task('sass', function() {
//     gulp.src('./sass/**/*.scss')
//         .pipe(sass().on('error', sass.logError))
//         .pipe(gulp.dest('./'))
//         .pipe(browserSync.stream())
// });

// gulp.task('watch', ['browser-sync', 'sass'], function() {
//     gulp.watch(gulp.src('./sass/**/*.scss'), ['sass']);
// })
// gulp.task('default', ['browser-sync', 'sass', 'watch'])


var gulp = require('gulp'),
    sass = require('gulp-sass');

gulp.task('sass', function() {
    gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./style.css'))
});

gulp.task('sass:watch', function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
});

gulp.task('default', ['sass'], function() {

});