fis.set('project.ignore', [
    'node_modules/**',
    'output/**',
    '.sass-cache'
    'scss-src',
    '*.bak',
    'fis-conf.js',
    '.git/**',
    '.svn/**'
]);


//fis.config.set('modules.spriter', 'csssprites');
fis.match('*.html', {
    useMap: true
});
// 加 md5
fis.match('*.{js,css,png}', {
    useHash: true
});

// 启用 fis-spriter-csssprites 插件
fis.match('::package', {
    spriter: fis.plugin('csssprites')
})

// 对 CSS 进行图片合并
fis.match('*.css', {
    // 给匹配到的文件分配属性 `useSprite`
    useSprite: true
});

fis.match('*.scss', {
    rExt: '.css',
    parser: fis.plugin('node-sass', {
        // options...
    })
})

// 压缩
//fis.match('*.js', {
//    // fis-optimizer-uglify-js 插件进行压缩，已内置
//    optimizer: fis.plugin('uglify-js')
//});
//fis.match('*.css', {
//    // fis-optimizer-clean-css 插件进行压缩，已内置
//    optimizer: fis.plugin('clean-css')
//});
fis.match('*.png', {
    // fis-optimizer-png-compressor 插件进行压缩，已内置
    optimizer: fis.plugin('png-compressor')
});

fis.media('prod').match('*.js', {
    optimizer: fis.plugin('uglify-js')
});

// 所有image目录下的.png，.gif文件
//fis.match('/img/*/(*.{png,gif})', {
//    //发布到/static/pic/xxx目录下
//    release: '/static/pic/$1$2'
//});

// 改变访问路径
//所有image目录下的.png，.gif文件
fis.match('/img/**/(*.{jpg,png,gif})', {
    //发布到/static/pic/xxx目录下
    release: '/static/pic/$1$2$3',
    //访问url是/oo/static/baidu/xxx
    url: "<?=ui('/indexnew/img/$0')?>"
});

// 发布到远端机器
fis.media('qa').match('*', {
    deploy: fis.plugin('http-push', {
        receiver: 'http://homenew.9z.cn/tests/fis3/receiver.php',
        to: '/data/users/user_hehui/test/testFis3' // 注意这个是指的是测试机器的路径，而非本地机器
    })
})

// 开发模式
//fis.media().match('*.{js,css,png}', {
//    useHash: false,
//    useSprite: false,
//    optimizer: null
//})