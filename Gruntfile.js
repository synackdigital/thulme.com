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
    },

    // FTP deploy
    'ftp-deploy': {
      'dev-core': {
        auth: {
          host: 'ftpcluster.loopia.se',
          port: 21,
          authKey: 'dev'
        },
        src: 'wordpress',
        dest: './',
        exclusions: [
          'wordpress/**/.DS_Store',
          'wordpress/**/Thumbs.db',
          'wordpess/media',
          'wordpess/wp-content',
          'wordpress/wp-config.php',
          'wordpress/.htaccess'
        ]
      },
      'dev-roots': {
        auth: {
          host: 'ftpcluster.loopia.se',
          port: 21,
          authKey: 'dev'
        },
        src: 'wordpress/wp-content/themes/roots',
        dest: 'wp-content/themes/roots',
        exclusions: [
          'wordpress/wp-content/themes/roots/**/.DS_Store',
          'wordpress/wp-content/themes/roots/**/Thumbs.db'
        ]
      },
      'dev-thulme': {
        auth: {
          host: 'ftpcluster.loopia.se',
          port: 21,
          authKey: 'dev'
        },
        src: 'wordpress/wp-content/themes/thulme',
        dest: 'wp-content/themes/thulme',
        exclusions: [
          'wordpress/wp-content/themes/thulme/**/.DS_Store',
          'wordpress/wp-content/themes/thulme/**/Thumbs.db',
          'wordpress/wp-content/themes/thulme/assets/less'
        ]
      }
    }
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-ftp-deploy');

  // Task aliases
  grunt.registerTask('default', ['watch']);
  grunt.registerTask('deploy:dev', ['ftp-deploy:dev-core', 'deploy:dev-themes']);
  grunt.registerTask('deploy:dev-themes', ['ftp-deploy:dev-roots', 'ftp-deploy:dev-thulme']);

};
