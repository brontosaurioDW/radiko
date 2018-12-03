module.exports = function(grunt) {
    const imageminPngquant = require('imagemin-pngquant');
    const imageminMozjpeg = require('imagemin-mozjpeg');
    const imageminSvgo = require('imagemin-svgo');

    grunt.initConfig({
        less: {
            development: {
                options: {
                    paths: ['dev/css'],
                },
                files: {
                    '../public/css/main.css': 'dev/css/main.less'
                }
            }
        },
        autoprefixer: {
            dist: {
                files: {
                    '../public/css/main.css': '../public/css/main.css'
                }
            }
        },
        concat: {
            options: {
                separator: '',
            },
            main: {
                src: ['dev/js/*.js'],
                dest: '../public/js/main.js',
            },
            vendorJS: {
                src: ['dev/vendor/js/*.js', 'dev/vendor/js/**/*.js'],
                dest: '../public/js/vendor.js',
            }
        },
        concat_css: {
            all: {
                src: ['dev/vendor/css/*.css', 'dev/vendor/css/**/*.css'],
                dest: '../public/css/vendor.css'
            },
        },
        imagemin: {
            png: {
                options: {
                    use: [imageminPngquant({
                        quality: '65-85',
                        speed: 2
                    })]
                },
                files: [{
                    expand: true,
                    cwd: 'dev/images/',
                    src: ['**/*.png'],
                    dest: '../public/images/'
                }]
            },
            jpg: {
                options: {
                    use: [imageminMozjpeg({
                        quality: 95
                    })]
                },
                files: [{
                    expand: true,
                    cwd: 'dev/images/',
                    src: ['**/*.jpg'],
                    dest: '../public/images/'
                }]
            },
            gif: {
                options: {
                    interlaced: true
                },
                files: [{
                    expand: true,
                    cwd: 'dev/images/',
                    src: ['**/*.gif'],
                    dest: '../public/images/'
                }]
            },
            svg: {
                options: {
                    svgoPlugins: [{
                        removeViewBox: false
                    }],
                },
                files: [{
                    expand: true,
                    cwd: 'dev/images/',
                    src: ['**/*.svg'],
                    dest: '../public/images/'
                }]
            }
        },
        copy: {
            fonts: {
                files: [{
                    expand: true, 
                    cwd: 'dev/fonts/', 
                    src: ['**'], 
                    dest: '../public/fonts/'
                }],
            },
        },
        watch: {
            grunt: {
                files: ['Gruntfile.js'],
                tasks: ['default']
            },
            less: {
                files: ['dev/css/**/*', 'dev/css/*'],
                tasks: ['less']
            },
            js: {
                files: ['dev/js/**/*', 'dev/js/*'],
                tasks: ['concat']
            },
            concatCSS: {
                files: ['dev/vendor/css/*.css', 'dev/vendor/css/**/*.css'],
                tasks: ['concat:vendorCSS']
            },
            images: {
                files: ['dev/images/**/**', 'dev/images/*'],
                tasks: ['imagemin']
            },
            fonts: {
                files: ['dev/fonts/**'],
                tasks: ['copy:fonts']
            },
        },
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-concat-css');
    grunt.loadNpmTasks('grunt-contrib-copy');

    grunt.registerTask('default', ['less', 'autoprefixer', 'concat', 'concat_css', 'imagemin', 'copy']);
};