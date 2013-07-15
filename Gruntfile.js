/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

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
      files: ['wordpress/wp-content/themes/thulme/assets/less/**/*.less'],
      tasks: ['less:compile'],
      options: {
        nospawn: true
      }
    }

  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Task aliases
  grunt.registerTask('default', ['watch']);

};
