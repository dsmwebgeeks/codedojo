module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        compass: {
            dev: {
                options: {
                    config: 'config.rb'
                }
            },
            dist: {
                options: {
                    sassDir: 'public/css',
                    cssDir: 'public/css',
                    environment: 'production'
                }
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 8', 'ie 9']
            },
            dist: {
                files: [{
                    expand: true,
                    cwd: 'public./css/',
                    src: '{,*/}*.css',
                    dest: 'public/css/'
                }]
            }
        },

        watch : {
            sass: {
                files: ['public/css/*.scss', 'public/css/base/*.scss', 'public/css/generic/*.scss', 'public/css/objects/*.scss'],
                tasks: ['compass:dev', 'autoprefixer']
            },
            /* watch our files for change, reload */
            livereload: {
                files: ['public/css/*.css', 'public/js/*', 'views/*.jade'],
                options: {
                    livereload: true,
                    spawn: false
                }
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    require('load-grunt-tasks')(grunt);

    // Default task(s).
    grunt.registerTask('default', ['compass:dev', 'autoprefixer']);

};