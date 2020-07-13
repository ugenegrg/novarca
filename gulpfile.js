'use strict';

const {src, dest, watch, series, parallel} = require('gulp');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');

const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');

sass.compiler = require('node-sass');

function eeJs(cb) {
    return src('./jass/**/*.js')
        .pipe(sourcemaps.init())
        .pipe(rename({extname: '.min.js'}))
        .pipe(sourcemaps.write())
        .pipe(dest('./js'));
}

function eeCss(cb) {
    return src('./sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(postcss([autoprefixer(),cssnano()])) // PostCSS plugins
        .pipe(sourcemaps.write('maps'))
        .pipe(dest('./css'));
}

function defaultTask() {
    parallel(eeCss,eeJs);
    watch('./jass/**/*.js', eeJs);
    watch('./sass/**/*.scss', eeCss);
}

exports.default = defaultTask;