module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		compass: {
			dist: {
				options: {
					config: 'config.rb',
					outputStyle:'compressed'
				}
			}
		},
		uglify: {
	      dist: {
	        files: {
	          'app/wp-content/themes/chilerunning/js/scripts.min.js': [
	            'dev/js/script.js'
	          ]
	        }
	      }
	    },
	    jshint: {
	      all: [
	        'Gruntfile.js',
	        'dev/js/script.js',
	        '!dev/js/scripts.min.js'
	      ]
	    },
		jade: {
	        compile: {
	            options: {
	                client: false,
	                pretty: true
	            },
			    files: [ {
	              cwd: "dev/",
	              src: "*.jade",
	              dest: "dev/jade/",
	              expand: true,
	              ext: ".php"
	            } ]
	        }
	    },
	    imagemin: {                         
			all: {
		      options: {
		        optimizationLevel: 7
		      },
		      files: [
		        {
		          // Set to true to enable the following options…
		          expand: true,
		          // cwd is 'current working directory'
		          cwd: 'dev/',
		          src: ['dev/img/**/*.{png,jpg,gif}'],
		          // Could also match cwd line above. i.e. project-directory/img/
		          dest: 'app/wp-content/themes/chilerunning/img/',
		          //ext: '.gif'
		        }
		      ]
		    }
		},
		watch: {
			options:{
				livereload:true
			},
			css: {
				files: ['dev/sass/**/*.scss'],
				tasks: ['compass']
			},
			html: {
		        files: ['dev/**/*.jade'],
		        tasks: ['jade']
		    },
		    html2:{
		    	files:['app/**/*.php']
		    },
		    js: {
	        	files: [
	          		'<%= jshint.all %>'
	        	],
	        	tasks: ['jshint', 'uglify']
	      	},
	      	images:{
	      		files:['dev/img/'],
	      		task:['imagemin']
	      	}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-jade');
	grunt.loadNpmTasks('grunt-contrib-imagemin');

  	grunt.registerTask('default',['compass','uglify']);
  	grunt.registerTask('dev',['watch']);
};