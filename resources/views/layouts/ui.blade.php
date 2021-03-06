<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    <style type="text/css">
        /*body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}*/
        #allmap{height:400px;width:100%;}
        /*#r-result{width:100%; font-size:14px;}*/
    </style>
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
                            <li><a href="http://127.0.0.1:9999/profile"><i class="halflings-icon user"></i> 个人主页</a></li>
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

@yield('content')
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
