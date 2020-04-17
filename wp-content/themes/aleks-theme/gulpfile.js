'use strict';

let gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync').create();

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'))
        .pipe(browserSync.stream({match: '**/*.css'}));
});

gulp.task('watch', function () {

    browserSync.init({
        proxy: "localhost/e-commerce-site/",
    });

    gulp.watch('./sass/**/*.scss', gulp.series('sass'));
    gulp.watch('./**/*.*').on('change', browserSync.reload);
});