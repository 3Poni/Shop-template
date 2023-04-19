<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Меню пользователя</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenger Admin Theme">
    <meta name="author" content="KaijuThemes">
    <link href='http://fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet'
          type='text/css'>
    <!--[if lt IE 10]>
    <script type="text/javascript" src="/assets/js/media.match.min.js"></script>
    <script type="text/javascript" src="/assets/js/placeholder.min.js"></script>
    <![endif]-->
    <link type="text/css" href="/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link type="text/css" href="/assets/css/styles.css" rel="stylesheet">
    <!-- Core CSS with all styles -->
    <link type="text/css" href="/assets/plugins/jstree/dist/themes/avenger/style.min.css" rel="stylesheet">
    <!-- jsTree -->
    <link type="text/css" href="/assets/plugins/codeprettifier/prettify.css" rel="stylesheet">
    <!-- Code Prettifier -->
    <link type="text/css" href="/assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
    <!-- iCheck -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
    <link type="text/css" href="/assets/css/ie8.css" rel="stylesheet">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/charts-flot/excanvas.min.js"></script>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
</head>

<body class="infobar-offcanvas">

<header id="topnav" class="navbar navbar-midnightblue navbar-fixed-top clearfix" role="banner">
    <!--	<a class="navbar-brand" href="index.html">Главная</a>-->
    <ul class="nav navbar-nav toolbar pull-right">
        <li class="dropdown toolbar-icon-bg">
            <a href="#" id="navbar-links-toggle" data-toggle="collapse" data-target="header>.navbar-collapse">
				<span class="icon-bg">
					<i class="fa fa-fw fa-ellipsis-h"></i>
				</span>
            </a>
        </li>
        <li class="dropdown toolbar-icon-bg">
            <a href="#" class="dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i
                            class="fa fa-fw fa-user"></i></span></a>
            <ul class="dropdown-menu userinfo arrow">
                <li><a href="/user"><span class="pull-left">Основное меню</span></a></li>
                <li><a href="/"><span class="pull-left">Вернуться в магазин</span><i class="pull-right fa fa-user"></i></a>
                </li>
                <li><a href="/user/settings"><span class="pull-left">Настройки</span> <i
                                class="pull-right fa fa-cog"></i></a></li>
                <li class="divider"></li>
                <li><a href="/logout"><span class="pull-left">Выйти</span> <i class="pull-right fa fa-sign-out"></i></a>
                </li>
            </ul>
        </li>

    </ul>

</header>

<div id="wrapper">
    <div id="layout-static">
        <div class="static-sidebar-wrapper sidebar-midnightblue">
            <div class="static-sidebar">
                <div class="sidebar">
                    <div class="widget stay-on-collapse" id="widget-welcomebox">
                        <div class="widget-body welcome-box tabular">
                            <div class="tabular-row">
                                <div class="tabular-cell welcome-options">
                                    <span class="welcome-text">Привет,</span>
                                    <a href="/user/settings" class="name"><?php echo $_SESSION['user']['login']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget stay-on-collapse" id="widget-sidebar">
                        <nav role="navigation" class="widget-body">
                            <ul class="acc-menu">
                                <li class="nav-separator">Разделы</li>
                                <li><a href="/user/orders"><i class="fa fa-home"></i><span>Мои заказы</span></a></li>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once __DIR__ . $view; ?>
    </div>
</div>
<div class="infobar-wrapper scroll-pane">
    <div class="infobar scroll-content">
        <div id="widgetarea">
        </div>
    </div>
</div>

<script type="text/javascript" src="/assets/js/jquery-1.10.2.min.js"></script>
<!-- Load jQuery -->
<script type="text/javascript" src="/assets/js/jqueryui-1.9.2.min.js"></script>
<!-- Load jQueryUI -->

<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<!-- Load Bootstrap -->

<script type="text/javascript" src="/assets/plugins/easypiechart/jquery.easypiechart.js"></script>
<!-- EasyPieChart-->
<script type="text/javascript" src="/plugins/sparklines/jquery.sparklines.min.js"></script>        <!-- Sparkline -->
<script type="text/javascript" src="/assets/plugins/jstree/dist/jstree.min.js"></script>                <!-- jsTree -->

<script type="text/javascript" src="/assets/plugins/codeprettifier/prettify.js"></script>
<!-- Code Prettifier  -->
<script type="text/javascript" src="/assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>
<!-- Swith/Toggle Button -->

<script type="text/javascript" src="/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>
<!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="/assets/plugins/iCheck/icheck.min.js"></script>
<!-- iCheck -->

<script type="text/javascript" src="/assets/js/enquire.min.js"></script>
<!-- Enquire for Responsiveness -->

<script type="text/javascript" src="/assets/plugins/bootbox/bootbox.js"></script>
<!-- Bootbox -->

<script type="text/javascript" src="/assets/plugins/simpleWeather/jquery.simpleWeather.min.js"></script>
<!-- Weather plugin-->

<script type="text/javascript" src="/assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->

<script type="text/javascript" src="/assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js"></script>
<!-- Mousewheel support needed for jScrollPane -->

<script type="text/javascript" src="/assets/js/application.js"></script>
<script type="text/javascript" src="/assets/demo/demo.js"></script>
<script type="text/javascript" src="/assets/demo/demo-switcher.js"></script>
<!-- End loading site level scripts -->
<!-- Load page level scripts-->
<!-- End loading page level scripts-->
</body>
</html>