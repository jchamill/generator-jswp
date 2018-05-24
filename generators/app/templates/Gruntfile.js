module.exports = function(grunt) {

  'use strict';

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    front_end_modules: {
      'waypoints': {
        src: ['lib/jquery.waypoints.min.js', 'lib/shortcuts/inview.min.js', 'lib/shortcuts/sticky.min.js'],
        dest: 'js/libs/waypoints'
      },
      'aos': {
        src: 'dist/*',
        dest: 'js/libs/aos'
      },
      'fitvids': {
        src: 'dist/*',
        dest: 'js/libs/fitvids'
      },
      'jquery-lazy': {
        src: ['jquery.lazy.js', 'jquery.lazy.min.js'],
        dest: 'js/libs/jquery-lazy'
      },
      'magnific-popup': {
        src: 'dist/*',
        dest: 'js/libs/magnific-popup'
      },
      'slick-carousel': {
        src: ['slick/slick.css', 'slick/slick.min.js'],
        dest: 'js/libs/slick-carousel'
      }
    },
    sass: {
      dist: {
        options: {
          'precision': 10,
          'style': 'compact'
        },
        files: {
          'css/style.css' : 'sass/style.sass'
        }
      }
    },
    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer')
        ]
      },
      dist: {
        src: 'css/*.css'
      }
    },
    watch: {
      css: {
        files: '**/*.sass',
        tasks: ['sass', 'postcss']
      }
    }
  });

  grunt.loadNpmTasks('grunt-front-end-modules');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', [
    'front_end_modules',
    'watch'
  ]);

};