module.exports = (grunt) ->
  grunt.loadNpmTasks 'grunt-contrib-sass'
  grunt.loadNpmTasks 'grunt-contrib-jshint'
  grunt.loadNpmTasks 'grunt-contrib-uglify'
  grunt.loadNpmTasks 'grunt-contrib-concat'

  grunt.initConfig

    pkg: '<json:package.json>'

    paths:
      assets: 'assets'
      bower: 'bower_components'
      public: 'public'
      tmp: 'tmp'

    sass:
      dist:
        options:
          style: 'compressed'
          cacheLocation: '<%= paths.tmp %>/.sass-cache'
        files:
          '<%= paths.tmp %>/style.min.css': '<%= paths.assets %>/styles/style.sass'

    jshint:
      all: ['Gruntfile.js', '<%= paths.assets %>/scripts/app.js']

    uglify:
      options:
        banner: '/*! <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      dist:
        files:
          '<%= paths.tmp %>/script.js': '<%= paths.assets %>/scripts/app.js'

    concat:
      options:
        separator: ';'
      js:
        src: [
          '<%= paths.bower %>/jquery/dist/jquery.min.js',
          '<%= paths.bower %>/bootstrap/dist/js/bootstrap.min.js',
          '<%= paths.bower %>/imagesloaded/imagesloaded.pkgd.min.js',
          '<%= paths.bower %>/masonry/dist/masonry.pkgd.min.js',
          '<%= paths.tmp %>/app.js'
        ],
        dest: '<%= paths.public %>/script.min.js'

      css:
        src: [
          '<%= paths.bower %>/bootstrap/dist/css/bootstrap.min.css',
          '<%= paths.tmp %>/style.min.css'
        ]
        dest: '<%= paths.public %>/style.min.css'


  ### Tasks ###
  grunt.registerTask 'css', ['sass', 'concat:css']
  grunt.registerTask 'js', ['jshint', 'uglify', 'concat:js']
  grunt.registerTask 'default', ['css', 'js']
