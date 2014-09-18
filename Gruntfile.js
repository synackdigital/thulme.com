/*global module:false*/
module.exports = function(grunt) {

  var js_src = 'wordpress/wp-content/themes/thulme/assets/js';

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    // Uglify JS
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
        preserveComents: 'some'
      },
      build: {
        src: [
          js_src+'/vendor/jquery-ui-1.10.3.custom.min.js',
          js_src+'/vendor/jquery.ui.touch-punch.min.js',
          js_src+'/vendor/bootstrap-select.js',
          js_src+'/vendor/bootstrap-switch.js',
          js_src+'/vendor/flatui-checkbox.js',
          js_src+'/vendor/flatui-radio.js',
          js_src+'/vendor/jquery.tagsinput.js',
          js_src+'/vendor/jquery.placeholder.js',
          js_src+'/vendor/jquery.stacktable.js',
          js_src+'/vendor/looper.js'
        ],
        dest: js_src+'/plugins.js'
      }
    },

    // LESS compile/compress
    less: {
        compile: {
            files: {
                "wordpress/wp-content/themes/thulme/style.css" : 'wordpress/wp-content/themes/thulme/assets/less/style.less'
            }
        },
        compress: {
            options: {
                yuicompress: true
            },
            files: {
                "wordpress/wp-content/themes/thulme/style.css" : 'wordpress/wp-content/themes/thulme/assets/less/style.less'
            }
        }
    },

    // File watcher
    watch: {
      files: [
        'wordpress/wp-content/themes/thulme/assets/less/**/*.less',
        'wordpress/wp-content/themes/thulme/assets/js/**/*.js'
      ],
      tasks: ['default'],
      options: {
        nospawn: true
      }
    }

  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Task aliases
  grunt.registerTask('default', ['less', 'uglify']);

};
