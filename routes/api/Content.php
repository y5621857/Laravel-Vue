<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2017/11/27
 * Time: 下午4:42
 */


Route::group(['namespace' => 'Api'], function () {
    //TODO 显示标签
    Route::get('tags', 'ContentController@Tags');
    //TODO 获取课程
    Route::get('lesson/{tid}', 'ContentController@lesson');
    //TODO 推荐课程
    Route::get('commendLesson/{row}', 'ContentController@commendLesson');
    //TODO 热门课程
    Route::get('hotLesson/{row}', 'ContentController@hotLesson');
    //TODO 视频列表
    Route::get('videos/{lessonId}', 'ContentController@videos');

});