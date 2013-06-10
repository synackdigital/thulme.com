/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    // LESS compile/compress
    less: {
        compile: {
            files: {
                "wordpress/wp-content/themes/thulme/style.css" : 'wordpress/wp-content/themes/thulme/less/style.less'
            }
        },
        compress: {
            options: {
                yuicompress: true
            },
            files: {
                "wordpress/wp-content/themes/thulme/style.css" : 'wordpress/wp-content/themes/thulme/less/style.less'
            }
        }
    },

    // File watcher
    watch: {
      files: ['wordpress/wp-content/themes/thulme/less/**/*.less'],
      tasks: ['less:compile'],
      options: {
        nospawn: true
      }
    },

    // FTP deploy
    'ftp-deploy': {
      dev: {
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
          'wordpress/wp-config.php',
          'wordpress/.htaccess'
        ]
      },
      prod: {
        auth: {
          authKey: 'prod'
        },
        src: 'wordpress',
        dest: './',
        exclusions: [
          'wordpress/**/.DS_Store',
          'wordpress/**/Thumbs.db',
          'wordpess/media',
          'wordpress/wp-config.php',
          'wordpress/.htaccess'
        ]
      },
      'themes-dev': {
        auth: {
          host: 'ftpcluster.loopia.se',
          port: 21,
          authKey: 'dev'
        },
        src: 'wordpress/wp-content/themes',
        dest: 'wp-content/themes',
        exclusions: [
          'wordpress/wp-content/themes/**/.DS_Store',
          'wordpress/wp-content/themes/**/Thumbs.db'
        ]
      },
      'themes-prod': {
        auth: {
          authKey: 'prod'
        },
        src: 'wordpress/wp-content/themes',
        dest: 'wp-content/themes',
        exclusions: [
          'wordpress/wp-content/themes/**/.DS_Store',
          'wordpress/wp-content/themes/**/Thumbs.db'
        ]
      }
    }
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-ftp-deploy');

};
