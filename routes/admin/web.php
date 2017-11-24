<?php
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    //TODO 登录视图
    Route::get('/login', 'EntryController@loginForm');

    //TODO 登录处理
    Route::post('/login', 'EntryController@login');

    //TODO 退出处理
    Route::get('/logout', 'EntryController@logout');

    //TODO 修改密码视图
    Route::get('/changePassword', 'MyController@passwordForm');
    Route::post('/changePassword', 'MyController@changePassword');

    //TODO 后台主页视图
    Route::get('/index', 'EntryController@index');

    //TODO 标签管理
    Route::resource('/tag', 'TagController');

    //TODO 课程管理
    Route::resource('/lesson', 'LessonController');
});