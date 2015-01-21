module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    phplint:{
      app: ['app/**/*.php'],
      tests: ['tests/php/**/*.php']
    },

    watch: {
      grunt: { files: ['Gruntfile.js'] },
      options: {
        livereload: true,
        spawn: false,
      },
      phpApp: {
        files: ['app/php/**/*.php'],
        tasks: ['phplint:app', 'phpunit'],
      },
      phpTests: {
        files: ['tests/php/**/*.php'],
        tasks: ['phplint:tests', 'phpunit'],
      },
    },

    phpunit: {
      classes: {
        dir: 'tests/php/'
      },
      options: {
        bin: 'vendor/bin/phpunit',
        bootstrap: false,
        colors: true,
        configuration: 'phpunit.xml'
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
