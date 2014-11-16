module.exports = function(grunt) {
    grunt.initConfig({
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    // target.css file: source.less file
                    "styles.css": "less/styles.less"
                }
            }
        },
        watch: {
            styles: {
                files: ['less/variables.less', 'less/bootstrap.less', 'less/utility.less', 'less/typography.less', 'less/ui.less', 'less/layout.less' ], // which files to watch
                tasks: ['less'],
                options: {
                    nospawn: true,
                    livereload: true
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['watch']);
};