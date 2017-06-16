@extends('layouts.DBT')

@section('content')
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="http://vjs.zencdn.net/5.18.4/video-js.css" rel="stylesheet">
    <div id="content" class="span12">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="../../../resources/views/test/index.blade.php">Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">Video</a></li>
        </ul>
        <div class="row-fluid">
            <div class="box">
                <video id="my_video" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="640" height="480" poster="videoCap/video.jpg" data-setup="{}">
                    <source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4"></source>
                    <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm"></source>
                    <source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg"></source>
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
