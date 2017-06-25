<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>光伏在线监测系统</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="test/css/bootstrap.min.css" rel="stylesheet">
    <link href="test/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="test/css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="test/css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="test/img/favicon.ico">
    <!-- end: Favicon -->
</head>
<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="../../../public/test/html/index.html"><span>光伏在线监测系统</span></a>

            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">

                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <span> {{Auth::user()->name}}</span>
                            <img src="/uploads/avatars/{{Auth::user()->avatars}}" onclick="change()" id="imgId" style="width:30px;height: 30px;float: right;border-radius:50%;margin-right: 25px" alt="">
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>账户信息</span>
                            </li>
                            <li><a href="{{route('profile')}}"><i class="halflings-icon user"></i> 个人主页</a></li>
                            <li><a href="{{ route('logout') }}"><i class="halflings-icon off"></i> 退出登录</a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->
        </div>
    </div>
</div>
<!-- start: Header -->
<div class="container-fluid-full">
    <div class="row-fluid">
        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href="{{route('dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> 主页</span></a></li>
                    <li><a href="../../../public/test/html/messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> 概况</span></a></li>

                    <li><a href="{{route('Array')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> 光伏阵列</span></a></li>
                    <li><a href="{{route('Temp')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> 温度</span></a></li>
                    <li><a href="{{route('Irr')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> 光照度</span></a></li>
                    <li><a href="{{route('Voltage')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> 电压</span></a></li>
                    <li><a href="{{route('Current')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> 电流</span></a></li>
                    <li><a href="{{route('Power')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> 功率</span></a></li>



                    <li><a href="{{route('Video')}}"><i class="icon-envelope"></i><span class="hidden-tablet">视频监控</span></a></li>
                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->

        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>

        @yield('content')
    </div>
</div><!--/fluid-row-->
<div class="clearfix"></div>

<footer>

    <p>
        <span style="text-align:center;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
    </p>

</footer>

<!-- start: JavaScript-->

<script src="test/js/jquery-1.9.1.min.js"></script>
<script src="test/js/jquery-migrate-1.0.0.min.js"></script>

<script src="test/js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="test/js/jquery.ui.touch-punch.js"></script>

<script src="test/js/modernizr.js"></script>

<script src="test/js/bootstrap.min.js"></script>

<script src="test/js/jquery.cookie.js"></script>

<script src='test/js/fullcalendar.min.js'></script>

<script src='test/js/jquery.dataTables.min.js'></script>

<script src="test/js/excanvas.js"></script>
<script src="test/js/jquery.flot.js"></script>
<script src="test/js/jquery.flot.pie.js"></script>
<script src="test/js/jquery.flot.stack.js"></script>
<script src="test/js/jquery.flot.resize.min.js"></script>

<script src="test/js/jquery.chosen.min.js"></script>

<script src="test/js/jquery.uniform.min.js"></script>

<script src="test/js/jquery.cleditor.min.js"></script>

<script src="test/js/jquery.noty.js"></script>

<script src="test/js/jquery.elfinder.min.js"></script>

<script src="test/js/jquery.raty.min.js"></script>

<script src="test/js/jquery.iphone.toggle.js"></script>

<script src="test/js/jquery.uploadify-3.1.min.js"></script>

<script src="test/js/jquery.gritter.min.js"></script>

<script src="test/js/jquery.imagesloaded.js"></script>

<script src="test/js/jquery.masonry.min.js"></script>

<script src="test/js/jquery.knob.modified.js"></script>

<script src="test/js/jquery.sparkline.min.js"></script>

<script src="test/js/counter.js"></script>

<script src="test/js/retina.js"></script>

<script src="test/js/custom.js"></script>
<!-- end: JavaScript-->

@yield('baiduJs')
</body>
</html>
