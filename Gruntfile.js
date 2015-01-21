module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    phplint:{
      app: ['app/**/*.php'],
      tests: ['tests/php**/*.php']
    },

    watch: {
      options: {
        livereload: true,
        spawn: false,
      },
      phpApp: {
        files: ['app/**/*.php'],
        tasks: ['phplint:app'],
      },
      phpTests: {
        files: ['tests/php**/*.php'],
        tasks: ['phplint:tests'],
      },
    },

    phpunit: {
      classes: {
        dir: 'tests/php/'
      },
      options: {
        bin: 'vendor/bin/phpunit',
        bootstrap: 'tests/php/phpunit.php',
        colors: true
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-phplint');
  grunt.loadNpmTasks('grunt-phpunit');

  grunt.registerTask('php', [
    'phplint',
  ]);
};
