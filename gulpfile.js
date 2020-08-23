var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

var input = './assets/scss/style.scss';
var output = './';

var sassOptions = {
	errLogToConsole: true,
	outputStyle: 'expanded'
};

gulp.task('sass', function () {
	return gulp
		.src(input)
		.pipe(sass(sassOptions).on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(gulp.dest(output));
});

gulp.task('default', gulp.series(['sass']));
