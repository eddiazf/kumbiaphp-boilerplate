module.exports = function (grunt) {
  "use strict";

  // Config...
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    watch: {
      scripts: {
        files: ['./app/content/**/*.js', '!./app/aplication.gen.js'],
        tasks: ['jshint', 'concat:content']
      }
    },
    concat: {
      content: {
        src: ['./app/content/**/*.js', '!./app/aplication.gen.js'],
        dest: './js/kumbiaApp.gen.js'
      }
    },
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'app/**/*.js',
        '!app/**/*.gen.js',
        '!app/**/vendor/*.js'
      ]
    },
  });
  // Load tasks...
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-concat');
  // Default task.
  grunt.registerTask('default', 'watch');
};