<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="http://vjs.zencdn.net/5.5.3/video-js.css" rel="stylesheet">
      
        <!-- Styles -->

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    <video
    id="my-player"
    class="video-js"
    controls
    preload="auto"
    poster="//vjs.zencdn.net/v/oceans.png"
    data-setup='{}'
     width="640" height="480" >
  <source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4"></source>
  <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm"></source>
  <source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg"></source>
<!--   <source src="rtmp://192.168.1.104:1925/myapp1/mystream" type='rtmp/flv'></source> -->
  <p class="vjs-no-js">
    To view this video please enable JavaScript, and consider upgrading to a
    web browser that
    <a href="http://videojs.com/html5-video-support/" target="_blank">
      supports HTML5 video
    </a>
  </p>
  </video>

<video id="my_video" class="video-js vjs-default-skin" controls preload="auto" width="640" height="480" poster="my_video_poster.png" data-setup="{}">
 <source src="rtmp://192.168.1.104:1935/myapp/mystream" type='rtmp/flv'/>
</video>

  <video id="my_video_2" class="video-js vjs-default-skin" controls
     preload="auto" width="640" height="480" poster="my_video_poster.png"
     data-setup="{}">
 <source src="rtmp://192.168.1.104:1925/myapp1/mystream" type='rtmp/flv'></source>
</video>
   <script src="http://vjs.zencdn.net/5.5.3/video.js"></script>
   </body>
</html>
