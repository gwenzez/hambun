var gulp = require('gulp');
var sass = require('gulp-sass');

//here we define a list of things to happen when we run gulp styles
gulp.task('styles',function(){
	gulp.src('wp-content/themes/theme-hackeryou/style.scss')
	.pipe(sass({
		errLogToConsole: true
	}))
	.pipe(gulp.dest('wp-content/themes/theme-hackeryou/'))
});

gulp.task('watch',function() {
  gulp.watch('wp-content/themes/theme-hackeryou/style.scss',['styles']);
});