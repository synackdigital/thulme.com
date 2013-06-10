/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    'ftp-deploy': {
      dev: {
        auth: {
          host: 'ftpcluster.loopia.se',
          port: 21,
          authKey: 'dev'
        },
        src: 'wordpress',
        dest: './',
        exclusions: ['wordpress/**/.DS_Store', 'wordpress/**/Thumbs.db', 'wordpess/media']
      },
      prod: {
        auth: {
          authKey: 'prod'
        },
        src: 'wordpress',
        dest: './',
        exclusions: ['wordpress/**/.DS_Store', 'wordpress/**/Thumbs.db', 'wordpess/media']
      }
    }
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-ftp-deploy');

};
