const livereload = require('gulp-livereload');
const gulp = require('gulp');
const sass = require('gulp-ruby-sass');
const autoprefixer = require('gulp-autoprefixer');


gulp.task('sass', () =>
	sass('styles/style.scss')
		.on('error', sass.logError)
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(gulp.dest(''))
);

// Watch
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('styles/**/*.scss', ['sass']);

  gulp.watch('*.php', livereload.reload)

  // Create LiveReload server
  livereload.listen();

});

// Default task
gulp.task('default', function() {
  gulp.start('sass', 'watch');
});