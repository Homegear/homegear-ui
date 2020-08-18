const { gulp, src, dest, watch, series } = require('gulp');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const minify = require('gulp-minify');
const cleanCss = require('gulp-clean-css');
const del = require('del');
const exec = require('child_process').exec;
 
function deployjs() {
    return src('admin/master/**/*.js')
        //.pipe(babel())
        //.pipe(uglify())
        //.pipe(minify())
        .pipe(concat('script.js'))
        .pipe(dest('dist/gulp/'));
}

function babeljs() {
    return src('dist/gulp/script.js')
        .pipe(babel({ 'presets': ['@babel/preset-env'] }))
        .pipe(rename({ extname: '.min.js' }))
        .pipe(dest('dist/gulp/'));
}

function vendorjs() {
    return src('admin/assets/masters/**/*.js')
        //.pipe(babel())
        //.pipe(uglify())
        //.pipe(minify())
        .pipe(concat('vendor.min.js'))
        .pipe(dest('dist/gulp/'));
}

function vendorcss() {
    return src('admin/assets/masters/**/*.css')
        .pipe(cleanCss())
        .pipe(minify())
        .pipe(concat('vendor.min.css'))
        .pipe(dest('dist/gulp/'));
}
  
function deploycss() {
    return src('admin/master/**/*.css')
        .pipe(cleanCss())
        .pipe(minify())
        .pipe(concat('style.min.css'))
        .pipe(dest('dist/gulp/'));
}

async function delDist() {
    const deletedPaths = await del(['dist/gulp/']);
    console.log('Deleted files and directories:\n', deletedPaths.join('\n'));
}
  
async function execC() {
    exec('php admin/admin.php generateExtensions', function (err, stdout, stderr) {
        console.log(stdout);
        console.log(stderr);
        console.log(err);
      });
      await Promise.resolve('good');
}

async function execBabel() {
      exec('npx babel dist/script.js --out-file dist/script.min.js', function (err, stdout, stderr) {
        console.log(stdout);
        console.log(stderr);
        console.log(err);
      });
      await Promise.resolve('good');
}

function startWatchers() {
  //watch('admin/master/**/*.css', deploycss);
  //watch('admin/master/**/*.js', series(deployjs, babeljs));
  watch('*.php', series(execC));
  watch('admin/*.php', series(execC));
  watch('admin/master/**/*.css', series(execC));
  watch('admin/master/**/*.js', series(execC, execBabel));
}

exports.watcher = startWatchers;
exports.builddev = series(execC, execBabel);
exports.buildprod = series(execC, execBabel);
exports.vendor = series(vendorjs, vendorcss);
exports.default = series(delDist, deployjs, deploycss, vendorjs, vendorcss, babeljs)