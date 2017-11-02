//导入工具包requrie(node_moduleszhon中的模块)
var gulp = require('gulp');
var sass=require('gulp-sass');

gulp.task('copy',function(){
	gulp.src("php/*.php").pipe(gulp.dest("d:/phpStudy/WWW/project-10/php"));
	gulp.src("*.html").pipe(gulp.dest("d:/phpStudy/WWW/project-10"));
	gulp.src("sass/*.scss").pipe(sass()).pipe(gulp.dest("d:/phpStudy/WWW/project-10/css"));
	gulp.src("js/*.js").pipe(gulp.dest("d:/phpStudy/WWW/project-10/js"));
	gulp.src("img/*").pipe(gulp.dest("d:/phpStudy/WWW/project-10/img"));
	})


gulp.task('watch',function(){
	gulp.watch("*.html",['copy']);
	gulp.watch("php/*.php",['copy']);
	gulp.watch("sass/*.scss",['copy']);
	gulp.watch("js/*.js",['copy']);
	gulp.watch("img/*",['copy']);
})