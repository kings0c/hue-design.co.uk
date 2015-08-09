module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'css/style.css' : 'scss/app.scss'
				}
			}
		},
		watch: {
			css: {
				files: ['css/style.css'],
				tasks: ['cssmin']
			},
            scripts: {
                files: ['js/ready.js'],
                tasks: ['uglify']
           }
		},
        cssmin: {
          options: {
            shorthandCompacting: false,
            roundingPrecision: -1
          },
          target: {
            files: {
              'css/style.min.css': ['js/jquery-modal-master/jquery.modal.css', 'css/style.css']
            }
          }
        },
        uglify: {
            my_target: {
              files: {
                'js/main.min.js': ['js/jquery-2.1.4.min.js', 'js/greensock/TweenMax.min.js', 
                                   'js/jquery.superscrollorama.js', 'js/jquery.fancybox.pack.js',
                                   'js/jquery.backgroundSize.js', 'js/skrollr.js',
                                   'js/jquery-modal-master/jquery.modal.min.js', 'js/ready.js']
              }
            }
        },
        jshint: {
            all: ['Gruntfile.js', 'js/main.js']
        }
	});
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default',['watch']);
};