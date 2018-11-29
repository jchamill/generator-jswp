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
    concat: {
      options: {
        separator: ';\n'
      },
      vendor: {
        src: ['js/libs/aos/aos.js', 'js/libs/waypoints/jquery.waypoints.min.js', 'js/libs/magnific-popup/jquery.magnific-popup.min.js', 'js/libs/slick-carousel/slick.min.js'],
        dest: 'vendor.js'
      },
      dist: {
        src: ['js/theme/*.js', 'js/widgets/*.js'],
        dest: 'scripts.js'
      }
    },
    uglify: {
      dist: {
        files: {
          'vendor.min.js': ['<%= concat.vendor.dest %>'],
          'scripts.min.js': ['<%= concat.dist.dest %>']
        }
      }
    },
    cssmin: {
      vendor: {
        src: ['js/libs/aos/aos.css', 'js/libs/magnific-popup/magnific-popup.css', 'js/libs/slick-carousel/slick.css'],
        dest: 'css/vendor.min.css'
      },
      dist: {
        src: ['css/style.css'],
        dest: 'css/style.min.css'
      }
    },
    watch: {
      css: {
        files: '**/*.sass',
        tasks: ['sass', 'postcss', 'cssmin']
      },
      js: {
        files: ['<%= concat.dist.src %>'],
        tasks: ['concat', 'uglify']
      }
    }
  });

  grunt.loadNpmTasks('grunt-front-end-modules');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('default', [
    'front_end_modules',
    'concat',
    'uglify',
    'watch'
  ]);

};