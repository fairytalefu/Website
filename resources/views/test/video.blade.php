@extends('layouts.DBV')

@section('content')
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="http://vjs.zencdn.net/5.18.4/video-js.css" rel="stylesheet">
    <div id="content" class="span12">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{route('dashboard')}}">Dashboard</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">Video</a></li>
        </ul>
        <div class="row-fluid">
            <div class="box">
                <video id="my_video" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="640" height="480" poster="videoCap/video.jpg" data-setup="{}">
                        {{--<source src="rtmp://192.168.1.110:1935/myapp/mystream" type='rtmp/flv'></source>--}}
                <source src="uploads/HH.mp4" type="video/mp4">
                </video>
            </div>

        </div>
    </div>
@section('baiduJs')
   <script src="http://vjs.zencdn.net/5.5.3/video.js"></script>
   <!-- 加载hls视频插件 -->
   <script src="video-js/videojs-contrib-hls.js"></script>
   <!-- 加载flash播放器 -->
   <script type="text/javascript">
       videojs.options.flash.swf = "static/video-js/video-js.swf";
   </script>
@endsection
@endsection
