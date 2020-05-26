const gulp = require('gulp');
const sass = require('gulp-sass');
const prefix = require('gulp-autoprefixer');

sass.compiler = require('node-sass');

gulp.task('scssCompiler', () => {
    return gulp.src('./client/scss/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(prefix({ overrideBrowserslist: ['> 0.2%'] }))
        .pipe(gulp.dest('./public/css/'));
});

gulp.task('scss:watch', () => {
    gulp.watch('./client/scss/**/*.scss', gulp.series('scssCompiler'));
});

gulp.task('scss', gulp.series('scssCompiler', 'scss:watch'));
gulp.task('default', gulp.series('scss'));
