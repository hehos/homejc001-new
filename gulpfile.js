var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    minifycss = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    spritesmith = require('gulp.spritesmith'),
    //csso = require('gulp-csso'),
    //merge = require('merge-stream'),
//pngquant = require('imagemin-pngquant'),  // 使用这个有问题
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    clean = require('gulp-clean'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    runSequence = require('run-sequence'),
    inject = require('gulp-inject-string');


var pkg = require('./package.json');
var cf = {
    src: {
        file: {
            scss: ['src/scss/**/*.scss'],
            commCss: 'src/css/*.css',
            pageCss: 'src/css/*/*.css',
            js: 'src/js/**/*.js',
            img: ['src/img/**/*', '!src/img/myicon/*.*'],
            sprite: 'src/img/myicon/*.png',
            font: 'src/font/*',
            html: 'src/html/**/*'
        },
        dir: { 
            scss: 'src/scss/',
            css: 'src/css/',
            js: 'src/js/',
            img: 'src/img/',
            sprite: 'src/img/myicon/',
            font: 'src/font/',
        }
    },
    dist: {
        file: {
            css: 'dist/css/**/*.css'
        },
        dir: {
			root: 'dist',
            js: 'dist/js',
            css: 'dist/css',
            img: 'dist/img',
            font: 'dist/font',
            html: 'dist/html'
        }
    },
    autoprefixerBrowsers: [
        'Android 2.3',
        'Android >= 4',
        'Chrome >= 20',
        'Firefox >= 24',
        'Explorer >= 8',
        'iOS >= 6',
        'Opera >= 12',
        'Safari >= 6'
    ],
    spritePrefix: '.myicon-'
};


// ==============================
// style
gulp.task('sass', ['cleanCss'], function () {
    return sass(cf.src.file.scss, { sourcemap: true })
        .on('error', sass.logError)
        .pipe(autoprefixer({
            browsers: cf.autoprefixerBrowsers,
            cascade: false
        }))
        .pipe(sourcemaps.write())
        .pipe(sourcemaps.write('map', {
            includeContent: false,
            sourceRoot: 'scss'
        }))
        .pipe(gulp.dest(cf.src.dir.css))

        //.pipe(livereload());
});
gulp.task('commCss', function () {
    return gulp.src(cf.src.file.commCss)
        .pipe(concat('comm.css'))

        .pipe(minifycss({compatibility: 'ie8'}))
        .pipe(rename({
            suffix: '.min',
            extname: '.css'
        }))
        .pipe(gulp.dest(cf.dist.dir.css));
});
gulp.task('pageCss', function () {
    return gulp.src(cf.src.file.pageCss)
        .pipe(minifycss({compatibility: 'ie8'}))
        .pipe(rename({
            suffix: '.min',
            extname: '.css'
        }))
        .pipe(gulp.dest(cf.dist.dir.css));
});
gulp.task('font', function () {
    return gulp.src(cf.src.file.font)
        .pipe(gulp.dest(cf.dist.dir.font));
});
gulp.task('sprite', function () {
    // Generate our spritesheet
    var spriteData = gulp.src(cf.src.file.sprite).pipe(spritesmith({
        imgName: '../img/sprite.png',
        cssName: 'sprite.css',
        cssOpts: {
            cssSelector: function (sprite) {
                return cf.spritePrefix + sprite.name;  // 自定义className前缀
            }
        }
    }));
    //  output path for the sprite
    spriteData.img.pipe(gulp.dest(cf.src.dir.img));
    // output path for the CSS
    spriteData.css.pipe(gulp.dest(cf.src.dir.css));
});

gulp.task('style', function() {
    runSequence('sass', 'sprite', ['commCss', 'pageCss', 'font']);
});

// ==============================
// js
gulp.task('js', ['cleanJs'], function () {
    return gulp.src(cf.src.file.js)
        .pipe(jshint())
        .pipe(uglify())
        .pipe(gulp.dest(cf.dist.dir.js));
});

// ==============================
// 图片
gulp.task('img', ['cleanImg'], function () {
    return gulp.src(cf.src.file.img)
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}]
        }))
        .pipe(gulp.dest(cf.dist.dir.img));
});

// ==============================
// html
gulp.task('html', function () {
    return gulp.src(cf.src.file.html)
        .pipe(gulp.dest(cf.dist.dir.html));
});

// ==============================
// 清理
gulp.task('clean', ['cleanCss'], function() {
    return gulp.src(cf.dist.dir.root, {read: false})
        .pipe(clean());
});
gulp.task('cleanCss', function() {
    return gulp.src([cf.dist.dir.css, cf.src.dir.css], {read: false})
        .pipe(clean());
});
gulp.task('cleanJs', function() {
    return gulp.src(cf.dist.dir.js, {read: false})
        .pipe(clean());
});
gulp.task('cleanImg', function() {
    return gulp.src(cf.dist.dir.img, {read: false})
        .pipe(clean());
});

// ==============================
// watch
gulp.task('watch', function() {
    // watch scss
    gulp.watch(cf.src.file.scss, ['sass']);

    // watch css
    // commCss
    gulp.watch(cf.src.file.commCss, ['commCss']);
    //// pageCss
    gulp.watch(cf.src.file.pageCss, ['pageCss']);

    // watch font
    gulp.watch(cf.src.file.font, ['font']);

    // watch sprite
    gulp.watch(cf.src.file.sprite, ['sprite']);

    // watch img
    gulp.watch(cf.src.file.img, ['img']);

    // watch js
    gulp.watch(cf.src.file.js, ['js']);

    // watch html
    gulp.watch(cf.src.file.html, ['html']);
});


// 预设任务
gulp.task('default', ['clean'], function() {
    gulp.start(['style', 'img', 'js', 'html']);
});


// ==================================
// test
// html
gulp.task('testHtml', function () {
    return gulp.src(cf.src.file.html)

        .pipe(inject.before('</head>', '<script src="http://localhost:35729/livereload.js"></script>'))
        .pipe(gulp.dest(cf.dist.dir.html))
        .pipe(livereload());
});

// 监听
gulp.task('testWatch', function() {
    // 启动服务器
    livereload.listen();

    gulp.watch('./html/*.html', ['html']);

});
// ==================================