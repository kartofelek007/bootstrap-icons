const gulp = require('gulp');
const sass = require('gulp-sass')(require("sass"));
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const rename = require('gulp-rename');
const browserSync = require('browser-sync');
const connect = require('gulp-connect-php');
const gulpEsBuild = require('gulp-esbuild');

const server = (cb) => {
    connect.server({
        base: './dist',
        stdio: 'ignore'
    }, function () {
        browserSync({
            proxy: '127.0.0.1:8000',
            host: '192.168.0.24',
            notify: false,
            ghostMode: {
                clicks: true,
                location: true,
                forms: true,
                scroll: false
            }
        });
    });
    cb();
};

const css = () => {
    return gulp.src('src/scss/style.scss')
        .pipe(sourcemaps.init())
        .pipe(
            sass({
                outputStyle: 'compressed'
            }).on('error', sass.logError)
        )
        .pipe(autoprefixer())
        .pipe(rename({
            suffix: '.min',
            basename: 'style'
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('dist/css'))
        .pipe(browserSync.stream());
};

const js = function () {
    return gulp.src('./src/js/app.js')
        .pipe(gulpEsBuild({
            outfile: 'bundle.min.js',
            bundle: true
        }))
        .pipe(gulp.dest('./dist/js'))
        .pipe(browserSync.stream());
};

const watch = () => {
    gulp.watch('src/scss/**/*.scss', { usePolling: true }, gulp.series(css));
    gulp.watch('src/js/**/*.js', { usePolling: true }, gulp.series(js));
    gulp.watch('dist/**/*.php').on('change', () => {
        browserSync.reload();
    });
};

exports.default = gulp.series(css, js, server, watch);
exports.css = css;
exports.watch = watch;
exports.js = js;
