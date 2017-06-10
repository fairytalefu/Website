@extends('layouts.app')

@section('content')
      <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$user->name}} 的个人中心</div>
                    <div class="panel-body">
                        <div class="panel">

                            <img src="/uploads/avatars/{{$user->avatars}}" onclick="change()" id="imgId" style="width:150px;height: 150px;float: right;border-radius:50%;margin-right: 25px" alt="">
                            <form id='avatarId' enctype="multipart/form-data" role="form" action="/profile" method="POST">
                                <button type="submit" role="button" class="pull-left btn btn-primary ">上传头像</button>
                                <input type="file" name="avatars">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                            </form>
                        </div>

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
                        </form>
                        <div class="panel panel-info">
                            <div class="panel-heading">{{$user->api_token}}</div>
                            <div class="panel-body">
                                hello
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    Hello World!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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
