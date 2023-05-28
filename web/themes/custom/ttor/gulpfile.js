let gulp = require("gulp"),
  gulpsass = require("gulp-sass"),
  dartsass = require("sass"),
  sassglob = require("gulp-sass-glob"),
  sourcemaps = require("gulp-sourcemaps"),
  cleanCss = require("gulp-clean-css"),
  rename = require("gulp-rename"),
  postcss = require("gulp-postcss"),
  autoprefixer = require("autoprefixer");

const sass = gulpsass(dartsass);

const paths = {
  scss: {
    src: "./scss/style.scss",
    watch: "./scss/**/*.scss",
    bootstrap: "./node_modules/bootstrap/scss/bootstrap.scss",
    videojs: "./node_modules/video.js/dist/video-js.css",
    adminimal_custom: "./scss/adminimal-custom.scss",
    print_styling: "./scss/print-styling.scss",
    dest: "./css",
  },
  js: {
    bootstrap: "./node_modules/bootstrap/dist/js/bootstrap.min.js",
    jquery: "./node_modules/jquery/dist/jquery.min.js",
    popper: "./node_modules/popper.js/dist/umd/popper.min.js",
    poppermap: "./node_modules/popper.js/dist/umd/popper.min.js.map",
    videojs: "./node_modules/video.js/dist/video.min.js",
    barrio: "../../contrib/bootstrap_barrio/js/barrio.js",
    dest: "./js",
    global: "./js/global.js",
    toast: "./js/toast.js",
  },
};

// Compile sass into CSS & auto-inject into browsers
function styles() {
  return gulp
    .src([
      paths.scss.bootstrap,
      paths.scss.src,
      paths.scss.videojs,
      paths.scss.adminimal_custom,
      paths.scss.print_styling,
    ])
    .pipe(sassglob())
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss([autoprefixer()]))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.scss.dest))
    .pipe(cleanCss())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest(paths.scss.dest));
}

// Move the javascript files into our js folder
function js() {
  return gulp
    .src([
      paths.js.bootstrap,
      paths.js.jquery,
      paths.js.popper,
      paths.js.poppermap,
      paths.js.videojs,
      paths.js.barrio,
      paths.js.toast,
    ])
    .pipe(gulp.dest(paths.js.dest));
}

const build = gulp.series(styles, js);

exports.styles = styles;
exports.js = js;
exports.default = build;

gulp.task("watch", function () {
  return gulp.watch(
    [paths.scss.watch, paths.scss.bootstrap, paths.js.global],
    { interval: 1000, usePolling: true },
    gulp.series("build")
  );
});

gulp.task("build", function () {
  return new Promise(function (resolve, reject) {
    const buildJS = gulp
      .src([
        paths.js.bootstrap,
        paths.js.jquery,
        paths.js.popper,
        paths.js.poppermap,
        paths.js.videojs,
        paths.js.toast,
      ])
      .pipe(gulp.dest(paths.js.dest));
    const buildCSS = gulp
      .src([
        paths.scss.bootstrap,
        paths.scss.src,
        paths.scss.videojs,
        paths.scss.adminimal_custom,
        paths.scss.print_styling,
      ])
      .pipe(sassglob())
      .pipe(sourcemaps.init())
      .pipe(sass().on("error", sass.logError))
      .pipe(postcss([autoprefixer()]))
      .pipe(sourcemaps.write())
      .pipe(gulp.dest(paths.scss.dest))
      .pipe(cleanCss())
      .pipe(rename({ suffix: ".min" }))
      .pipe(gulp.dest(paths.scss.dest));

    exports.styles = buildCSS;
    exports.js = buildJS;
    resolve();
  });
});
