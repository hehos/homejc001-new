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
    inject = require('gulp-inject-string'),
    replace = require('gulp-replace'), // 字符串替换插件
    // 以下两个插件是更新版本号的
    rev = require('gulp-rev'),
    revCollector = require('gulp-rev-collector');

var pkg = require('./package.json');

var o = {
    spritePrefix: '.myicon-',
    spriteName: 'sprite'
}
var cf = {
    src: {
        file: {
            scss: ['src/scss/**/*.scss', '!src/scss/widgets/**/*.scss'],
            css: 'src/css/**/*.css',
            commCss: 'src/css/*.css',
            pageCss: 'src/css/*/*.css',
            js: 'src/js/**/*.js',
            img: ['src/img/**/*', '!src/img/myicon/*.*'],
            myicons: 'src/img/myicon/*.png',
            spriteImg: 'src/img/' + o.spriteName +'.png',
            spriteScss: 'src/scss/_' + o.spriteName + '.scss',
            font: 'src/font/*',
            html: 'src/html/**/*',
            vendor: 'src/vendor/**/*',
            rev: 'src/rev/**/*.json'
        },
        dir: {
            root: 'src/',
            scss: 'src/scss/',
            css: 'src/css/',
            map: 'src/map/',
            js: 'src/js/',
            img: 'src/img/',
            html: 'src/html/',
            sprite: 'src/img/myicon/',
            font: 'src/font/'
        },
        rev: {
            root: 'src/rev/',
            css: 'src/rev/css/',
            font: 'src/rev/font/',
            img: 'src/rev/img/',
            js: 'src/rev/js/'
        }
    },
    dist: {
        file: {
            css: 'dist/css/**/*.css',
            html: 'dist/html/**/*'
        },
        dir: {
			root: 'dist',
            js: 'dist/js',
            css: 'dist/css',
            img: 'dist/img',
            font: 'dist/font',
            html: 'dist/html',
            vendor: 'dist/vendor'
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
    ]
};


// ==============================
// style
// 编译样式及获得css文件的版本号
gulp.task('sass', ['cleanCss'], function () {
    return sass(cf.src.file.scss, { sourcemap: true })
        .on('error', sass.logError)
        .pipe(rev())
        .pipe(autoprefixer({
            browsers: cf.autoprefixerBrowsers,
            cascade: false
        }))
        .pipe(sourcemaps.write())
        .pipe(sourcemaps.write('../map', {
            includeContent: false,
            sourceRoot: 'scss'
        }))
        .pipe(gulp.dest(cf.src.dir.css))

        .pipe(rev.manifest())
        .pipe(gulp.dest(cf.src.rev.css));
});

// 生成css文件内容的版本号 如：background: url('../img/one.jpg?v=28bd4f6d18');
gulp.task('versionCss', function () {
    return gulp.src([
        cf.src.file.rev,
        cf.src.file.css
    ])
        .pipe(revCollector())
        .pipe(gulp.dest(cf.src.dir.css));
});
// 压缩css及生成css的版本号
gulp.task('minifycss',  function () {
    return gulp.src(cf.src.file.css)
        .pipe(minifycss({compatibility: 'ie8'}))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(cf.dist.dir.css))
});


gulp.task('sprite', function () {
    // Generate our spritesheet
    var spriteData = gulp.src(cf.src.file.myicons).pipe(spritesmith({
        imgName: '../img/' + o.spriteName + '.png',
        cssName: o.spriteName + '.css',
        padding: 2,
        cssOpts: {
            cssSelector: function (sprite) {
                return o.spritePrefix + sprite.name;  // 自定义className前缀
            }
        }
    }));
    //  output path for the sprite
    spriteData.img.pipe(gulp.dest(cf.src.dir.img));
    // output path for the CSS
    spriteData.css.pipe(rename({
        prefix: "__",
        extname: ".scss"
    })).pipe(gulp.dest(cf.src.dir.scss));
});
gulp.task('font', ['cleanFont'], function () {
    return gulp.src(cf.src.file.font)
        .pipe(rev())
        .pipe(gulp.dest(cf.dist.dir.font))
        .pipe(rev.manifest())
        .pipe(gulp.dest(cf.src.rev.font));
});

gulp.task('style', function() {
    runSequence('sass', 'versionCss', 'minifycss');
});
gulp.task('', function() {
    runSequence('sass', 'versionCss', 'minifycss');
});

// ==============================
// js
gulp.task('js', ['cleanJs'], function () {
    return gulp.src(cf.src.file.js)
        .pipe(rev())
        .pipe(jshint())
        .pipe(uglify())
        .pipe(gulp.dest(cf.dist.dir.js))
        .pipe(rev.manifest())
        .pipe(gulp.dest(cf.src.rev.js));
});
gulp.task('versionJs', function () {
    return gulp.src([
        cf.src.file.rev,
        cf.src.file.js
    ])
        .pipe(revCollector())
        .pipe(gulp.dest(cf.src.dir.js));
});
// ==============================
// 图片
gulp.task('img', ['cleanImg'], function () {
    return gulp.src(cf.src.file.img)
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}]
        }))
        .pipe(rev())
        .pipe(gulp.dest(cf.dist.dir.img))
        .pipe(rev.manifest())
        .pipe(gulp.dest(cf.src.rev.img));
});

// ==============================
// html
gulp.task('html', ['cleanHtml'], function () {
    return gulp.src(cf.src.file.html)
        .pipe(replace('/src/', '/dist/'))
        .pipe(replace('.css', '.min.css'))
        .pipe(gulp.dest(cf.dist.dir.html));
});
// 生成html文件的版本号
gulp.task('versionHtml', function () {
    return gulp.src([
        cf.src.file.rev,
        cf.src.file.html
    ])
        .pipe(revCollector())
        .pipe(gulp.dest(cf.src.dir.html));
});

// vendor
gulp.task('vendor', ['cleanVendor'], function () {
    return gulp.src(cf.src.file.vendor)
        .pipe(gulp.dest(cf.dist.dir.vendor));
});


// ==============================
// 清理
gulp.task('clean', function() {
    return gulp.src([cf.dist.dir.root, cf.src.rev.root], {read: false})
        .pipe(clean());
});
gulp.task('cleanCss', function() {
    return gulp.src([cf.dist.dir.css, cf.src.dir.css, cf.src.dir.map], {read: false})
        .pipe(clean());
});
gulp.task('cleanFont', function() {
    return gulp.src([cf.dist.dir.font], {read: false})
        .pipe(clean());
});
//gulp.task('cleanSprite', function() {
//    return gulp.src([cf.src.file.spriteImg], {read: false})
//        .pipe(clean());
//});
gulp.task('cleanJs', function() {
    return gulp.src(cf.dist.dir.js, {read: false})
        .pipe(clean());
});
gulp.task('cleanImg', function() {
    return gulp.src(cf.dist.dir.img, {read: false})
        .pipe(clean());
});
gulp.task('cleanHtml', function() {
    return gulp.src(cf.dist.dir.html, {read: false})
        .pipe(clean());
});
gulp.task('cleanVendor', function() {
    return gulp.src(cf.dist.dir.vendor, {read: false})
        .pipe(clean());
});

// ==============================
// watch
gulp.task('watch', function() {
    // watch scss
    gulp.watch(cf.src.file.scss, ['style']);

    // watch css
    gulp.watch(cf.src.file.css, ['minifycss']);

    // watch font
    gulp.watch(cf.src.file.font, ['font']);

    // watch sprite
    gulp.watch(cf.src.file.myicons, ['sprite']);

    // watch img
    gulp.watch(cf.src.file.img, function() {
        runSequence('img', ['versionCss', 'versionHtml', 'versionJs']);
    });

    // watch js
    gulp.watch(cf.src.file.js, ['js']);

    // watch html
    gulp.watch(cf.src.file.html, ['html']);

    // watch vendor
    gulp.watch(cf.src.file.vendor, ['vendor']);
});


// 预设任务
gulp.task('default', ['clean'], function() {
    runSequence(['sprite', 'vendor'], ['img', 'font'], ['js', 'style'], 'html');
});



// ==================================
// test

gulp.task('push252', function() {
    return gulp.src(cf.dist.dir.root)
        .pipe(gulp.dest('/app'));
});

// html
//gulp.task('testHtml', function () {
//    return gulp.src(cf.src.file.html)
//
//        .pipe(inject.before('</head>', '<script src="http://localhost:35729/livereload.js"></script>'))
//        .pipe(gulp.dest(cf.dist.dir.html))
//        .pipe(livereload());
//});
//
//// 监听
//gulp.task('testWatch', function() {
//    // 启动服务器
//    livereload.listen();
//
//    gulp.watch('./html/*.html', ['html']);

//});
// ==================================