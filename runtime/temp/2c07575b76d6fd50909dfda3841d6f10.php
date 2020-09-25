<?php /*a:5:{s:71:"E:\phpStudy\PHPTutorial\WWW\wec\application\admin\view\index\index.html";i:1570699188;s:70:"E:\phpStudy\PHPTutorial\WWW\wec\application\admin\view\public\top.html";i:1570754430;s:73:"E:\phpStudy\PHPTutorial\WWW\wec\application\admin\view\public\header.html";i:1570756068;s:71:"E:\phpStudy\PHPTutorial\WWW\wec\application\admin\view\public\menu.html";i:1570774412;s:69:"E:\phpStudy\PHPTutorial\WWW\wec\application\admin\view\public\js.html";i:1565071540;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo htmlentities((isset($title) && ($title !== '')?$title:'后台管理系统')); ?></title>

<!--Favicon -->
<!-- <link rel="icon" href="/../static/img/favicon.ico" type="image/x-icon"/> -->

<!--Bootstrap.min css-->
<link rel="stylesheet" href="/../static/plugins/bootstrap/css/bootstrap.min.css">

<!--Icons css-->
<link rel="stylesheet" href="/../static/css/icons.css">

<!--Style css-->
<link rel="stylesheet" href="/../static/css/style.css">

<!--mCustomScrollbar css-->
<link rel="stylesheet" href="/../static/plugins/scroll-bar/jquery.mCustomScrollbar.css">

<!--Sidemenu css-->
<link rel="stylesheet" href="/../static/plugins/toggle-menu/sidemenu.css">

<!--Chartist css-->
<link rel="stylesheet" href="/../static/plugins/chartist/chartist.css">
<link rel="stylesheet" href="/../static/plugins/chartist/chartist-plugin-tooltip.css">

<!--Full calendar css-->
<link rel="stylesheet" href="/../static/plugins/fullcalendar/stylesheet1.css">

<!--Toastr css-->
<link rel="stylesheet" href="/../static/plugins/toastr/build/toastr.css">
<link rel="stylesheet" href="/../static/plugins/toaster/garessi-notif.css">



<!--&lt;!&ndash;morris css&ndash;&gt;-->
<!--<link rel="stylesheet" href="/../static/plugins/morris/morris.css">-->
	<block name="topCss">
		<!--morris css-->
		<link rel="stylesheet" href="/../static/plugins/morris/morris.css">

		
	</block>
</head>

<body class="app ">

<div id="spinner"></div>

<div id="app">
	<div class="main-wrapper" >
		<nav class="navbar navbar-expand-lg main-navbar">
    <a class="header-brand" >
        <img src="/../static/img/brand/logo.jpg" class="header-brand-img">
    </a>
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="ion ion-search"></i></a></li>
        </ul>
        
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                <img src="/../static/img/avatar/avatar-1.jpeg.jpg" alt="profile-user" class="rounded-circle w-32">
                <div class="d-sm-none d-lg-inline-block"><?php echo htmlentities(app('session')->get('admin_name')); ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="<?php echo url('login/logout'); ?>" class="dropdown-item has-icon">
                    <i class="ion-ios-redo"></i> 退出登录
                </a>
            </div>
        </li>
    </ul>
</nav>
		<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div class="dropdown">
            <a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
                <img alt="image" src="/../static/img/avatar/avatar-1.jpeg.jpg" class=" avatar-md rounded-circle">
                <span class="ml-2 d-lg-block">
                    <span class="text-white app-sidebar__user-name mt-5">后台管理</span><br>
                    <span class="text-muted app-sidebar__user-name text-sm"> <?php echo htmlentities(app('session')->get('admin_name')); ?></span>
                </span>
            </a>
        </div>
    </div>
    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">账号管理</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item"  href="<?php echo url('user/index'); ?>"><span>密码修改</span></a></li>
                <li><a class="slide-item"  href="<?php echo url('user/index'); ?>"><span>头像更改</span></a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tasks"></i><span class="side-menu__label">文章管理</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="<?php echo url('type/index'); ?>" class="slide-item"> 分类列表</a></li>
                <li><a href="<?php echo url('article/index'); ?>" class="slide-item"> 文章列表</a></li>
            </ul>
        </li>
    </ul>
</aside>
		<block name="bodsy">
			<div class="app-content">
				<section class="section">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="text-muted">Home</a></li>
						<li class="breadcrumb-item active text-" aria-current="page">Dashboard 01</li>
					</ol>
					<div class="row">
						<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="dash1">
												<h4 class="text-dark">675</h4>
												<small class="text-muted ">Posts</small>
											</div>
										</div>
										<div class="col-6">
											<div id="chart1" class="overflow-hidden"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="dash1">
												<h4 class="text-dark">875</h4>
												<small class="text-muted">Clicks</small>
											</div>
										</div>
										<div class="col-6">
											<div id="chart2" class="overflow-hidden"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="dash1">
												<h4 class="text-dark">976</h4>
												<small class="text-muted">Shares</small>
											</div>
										</div>
										<div class="col-6">
											<div id="chart3" class="overflow-hidden"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-6">
											<div class="dash1">
												<h4 class="text-dark">418</h4>
												<small class="text-muted">Remarks</small>
											</div>
										</div>
										<div class="col-6">
											<div id="chart4" class="overflow-hidden"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row ">
						<div class="col-lg-12 col-xl-6 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4>Monthly Sales</h4>
								</div>
								<div class="card-body">
									<div id="bar-chart" class="overflow-hidden" > </div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-6 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4>Yearly Template Sales</h4>
								</div>
								<div class="card-body">
									<div id="sales-chart" class="overflow-hidden"> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4>Account Retention</h4>
								</div>
								<div class="card-body">
									<div id="index" class="overflow-hidden h-400 mx-auto text-center " ></div>
								</div>
							</div>
						</div>
					</div>

				</section>
			</div>
		</block>
	</div>
</div>
<!--Jquery.min js-->
<script src="/../static/js/jquery.min.js"></script>

<!--popper js-->
<script src="/../static/js/popper.js"></script>

<!--Tooltip js-->
<script src="/../static/js/tooltip.js"></script>

<!--Bootstrap.min js-->
<script src="/../static/plugins/bootstrap/js/bootstrap.min.js"></script>

<!--Jquery.nicescroll.min js-->
<script src="/../static/plugins/nicescroll/jquery.nicescroll.min.js"></script>

<!--Scroll-up-bar.min js-->
<script src="/../static/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

<!--Sidemenu js-->
<script src="/../static/plugins/toggle-menu/sidemenu.js"></script>

<!--mCustomScrollbar js-->
<script src="/../static/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- ECharts -->
<script src="/../static/plugins/echarts/dist/echarts.js"></script>

<!--Min Calendar -->
<script src="/../static/plugins/fullcalendar/calendar.min.js"></script>
<script src="/../static/plugins/fullcalendar/custom_calendar.js"></script>

<!--Morris js-->
<script src="/../static/plugins/morris/morris.min.js"></script>
<script src="/../static/plugins/morris/raphael.min.js"></script>

<!--Scripts js-->
<script src="/../static/js/scripts.js"></script>

<!--Toastr js-->
<script src="/../static/plugins/toastr/build/toastr.min.js"></script>
<script src="/../static/plugins/toaster/garessi-notif.js"></script>
<!--公用函数 js-->	
<script src="/../static/js/commont.js"></script>
<block name="js">

<!--Dashboard js-->
<script src="/../static/js/dashboard.js"></script>
<script src="/../static/js/apexcharts.js"></script>



</block>
</body>


</html>








