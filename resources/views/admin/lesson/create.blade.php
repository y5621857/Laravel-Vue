@extends('admin.layout.master')
@section('content')
  <!-- TAB NAVIGATION -->
  <ul class="nav nav-tabs">
    <li><a href="/admin/lesson">视频列表</a></li>
    <li class="active"><a href="javascript:;">新增视频</a></li>
  </ul>
  <form action="/admin/lesson" method="post" class="form-horizontal" role="form">
    {{csrf_field()}}
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">新增视频</h3>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">视频</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="title" required>
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">简介</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="5" name="introduce"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">预览图</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="preview" required value="nopic.jpg">
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">推荐</label>
          <div class="col-sm-10">
            <label class="radio-inline">
              <input type="radio" name="iscommend" value="1">是
            </label>
            <label class="radio-inline">
              <input type="radio" name="iscommend" checked value="0">否
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">热门</label>
          <div class="col-sm-10">
            <label class="radio-inline">
              <input type="radio" name="ishot" value="1">是
            </label>
            <label class="radio-inline">
              <input type="radio" name="ishot" checked value="0">否
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="" class="col-sm-2 control-label">点击数</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="click" required value="0">
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">视频管理</h3>
      </div>
      <div class="panel-body">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">视频标题</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-2 control-label">视频地址</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="panel-footer">
            <button class="btn btn-success btn-sm">删除视频</button>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <button class="btn btn-default btn-sm">添加视频</button>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">保存数据</button>
  </form>
@endsection