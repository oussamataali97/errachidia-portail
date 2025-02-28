let gulp = require('gulp'),
  rename = require('gulp-rename'),
  sass = require('gulp-sass')(require('sass')),
  sourcemaps = require('gulp-sourcemaps'),
  cleanCss = require('gulp-clean-css'),
  // postcss = require('gulp-postcss'),
  browserSync = require('browser-sync').create();

const paths = {
  scss: {
    src: './scss/style.scss',
    watch: './scss/**/*.scss',
    bootstrap: './node_modules/bootstrap/scss/**/*.scss',
    dest: './css',
  },
  print: {
    src: './scss/print.scss',
    dest: './css',
    watch: './scss/print.scss'
  },
  entityprint: {
    src: './scss/entity-print.scss',
    dest: './css',
    watch: './scss/entity-print.scss'
  },
  js: {
    bootstrap: './node_modules/bootstrap/dist/js/bootstrap.min.js',
    bootstrapMap: './node_modules/bootstrap/dist/js/bootstrap.min.js.map',
    popper: './node_modules/@popperjs/core/dist/umd/popper.min.js',
    popperMap: './node_modules/@popperjs/core/dist/umd/popper.min.js.map',
    bssk: './js/bssk.js',
    dest: './js'
  }
}

// Compile sass into CSS & auto-inject into browsers
function styles() {
  return gulp.src([paths.scss.src])
    .pipe(sourcemaps.init())
    .pipe(sass({}).on('error', sass.logError))
    .pipe(cleanCss(
      {
        format: {
          breaks: { // controls where to insert breaks
            afterAtRule: true, // controls if a line break comes after an at-rule; e.g. `@charset`; defaults to `false`
            afterBlockBegins: true, // controls if a line break comes after a block begins; e.g. `@media`; defaults to `false`
            afterBlockEnds: true, // controls if a line break comes after a block ends, defaults to `false`
            afterComment: true, // controls if a line break comes after a comment; defaults to `false`
            afterProperty: true, // controls if a line break comes after a property; defaults to `false`
            afterRuleBegins: true, // controls if a line break comes after a rule begins; defaults to `false`
            afterRuleEnds: true, // controls if a line break comes after a rule ends; defaults to `false`
            beforeBlockEnds: true, // controls if a line break comes before a block ends; defaults to `false`
            betweenSelectors: true // controls if a line break comes between selectors; defaults to `false`
          },
          breakWith: '\n', // controls the new line character, can be `'\r\n'` or `'\n'` (aliased as `'windows'` and `'unix'` or `'crlf'` and `'lf'`); defaults to system one, so former on Windows and latter on Unix
          indentBy: 2, // controls number of characters to indent with; defaults to `0`
          indentWith: 'space', // controls a character to indent with, can be `'space'` or `'tab'`; defaults to `'space'`
          spaces: { // controls where to insert spaces
            aroundSelectorRelation: true, // controls if spaces come around selector relations; e.g. `div > a`; defaults to `false`
            beforeBlockBegins: true, // controls if a space comes before a block begins; e.g. `.block {`; defaults to `false`
            beforeValue: true // controls if a space comes before a value; e.g. `width: 1rem`; defaults to `false`
          },
          wrapAt: false, // controls maximum line length; defaults to `false`
          semicolonAfterLastProperty: true // controls removing trailing semicolons in rule; defaults to `false` - means remove
        }
      }
    ))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.scss.dest))
    .pipe(cleanCss())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(paths.scss.dest))
    .pipe(browserSync.stream())
}

// Compile sass into CSS & auto-inject into browsers
function entityprint() {
  return gulp.src([paths.entityprint.src])
    .pipe(sourcemaps.init())
    .pipe(sass({}).on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.entityprint.dest))
    .pipe(cleanCss())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(paths.entityprint.dest))
    .pipe(browserSync.stream())
}


// Compile sass into CSS & auto-inject into browsers
function print() {
  return gulp.src([paths.print.src])
    .pipe(sourcemaps.init())
    .pipe(sass({}).on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.print.dest))
    .pipe(cleanCss())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(paths.print.dest))
    .pipe(browserSync.stream())
}
// Move the javascript files into our js folder
function js() {
  return gulp.src([paths.js.bootstrap, paths.js.bootstrapMap, paths.js.popper, paths.js.popperMap])
    .pipe(gulp.dest(paths.js.dest))
    .pipe(browserSync.stream())
}

// Static Server + watching scss/html files
function serve() {
  browserSync.init({
    proxy: 'http://127.0.0.1',
  })

  gulp.watch([paths.scss.watch], styles).on('change', browserSync.reload)
  gulp.watch([paths.entityprint.watch], entityprint).on('change', browserSync.reload);
  gulp.watch([paths.print.watch], print).on('change', browserSync.reload);

}

const build = gulp.series(styles, print, entityprint, gulp.parallel(js, serve))

exports.styles = styles
exports.entityprint = entityprint
exports.js = js
exports.print = print
exports.serve = serve

exports.default = build
