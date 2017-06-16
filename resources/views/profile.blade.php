@extends('layouts.DBT')

@section('content')
    <div id="content" class="span12">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="../../../resources/views/test/index.blade.php">Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">个人中心</a></li>
        </ul>
        <div class="row-fluid">
            <div class="box">
                <div class="box-header">
                    <h2><i class="halflings-icon list-alt"></i><span class="break"></span>{{$user->name}} 的个人中心</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('updateUserInfo') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">用户名</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">密码</label>
                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="password" value="{{ old('password') }}" required autofocus>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('api_token') ? ' has-error' : '' }}">
                            <label for="api_token" class="col-md-4 control-label">Api_token</label>
                            <div class="col-md-6">
                                <input id="api_token" type="text" class="form-control" name="api_token" value="{{$user->api_token}}" required autofocus>
                            </div>
                        </div>

                    </form>
                    <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                        <img src="/uploads/avatars/{{$user->avatars}}" onclick="change()" id="imgId" style="width:150px;height: 150px;float: right;border-radius:50%;margin-right: 25px" alt="">
                        <form id='avatarId' enctype="multipart/form-data" role="form" action="/profile" method="POST">
                            <div class="col-md-6">
                                <button type="submit" role="button" class="pull-left btn btn-primary ">上传头像</button>
                                <input type="file" name="avatars">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@section('jscript')
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <script type='text/javascript'>
        function change()
       {
           $.ajax({
               type: "POST",
               url:'http://127.0.0.1:9999/profile',
               data:$('avatarId').serialize(),
               async: false,
               error: function(request) {
                   alert("Connection error");
               },
               success: function(data) {
                   //接收后台返回的结果
                   console.log('Ok');
               }
           });
        console.log('click');
       }
    </script>
@endsection
@endsection
