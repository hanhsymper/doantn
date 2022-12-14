<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ $urlAdmin }}/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ $urlAdmin }}/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>AdminCP - VinaEnter</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ $urlAdmin }}/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ $urlAdmin }}/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ $urlAdmin }}/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ $urlAdmin }}/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ $urlAdmin }}/css/themify-icons.css" rel="stylesheet">
    <style type="text/css" media="screen">
        .dn {
            display: inline-block;
            margin-right:15px;
            margin-top: 15px;
        }    
    </style>
    <!-- <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script> -->
   <!--  <script src="{{ $urlAdmin }}/js/jquery-3.2.1.min.js" type="text/javascript"></script> -->
   <script src="{{ $urlAdmin }}/js/jquery-3.2.1.min.js" type="text/javascript"></script>
   <script src="{{ asset('public/ckeditor/ckeditor.js') }}"></script>
    <script> CKEDITOR.replace('my-editor'); </script>
</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ route('admin.index.index') }}" class="simple-text">AdminTravel</a>
            </div>

            <ul class="nav">
            	<li>
                    <a href="{{ route('admin.tinh.index') }}">
                        <i class="ti-map"></i>
                        <p>T???nh</p>
                    </a>
                </li>
            	 <li>
                    <a href="{{ route('admin.diadiem.index') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>?????a ??i???m</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.tour.index') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>Tour</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.binhluan.index') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>B??nh lu???n</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.chitiettour.index') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>Tour chi ti???t</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.chuongtrinhtour.index') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>Ch????ng tr??nh tour</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.phieudat.index') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>Phi???u ?????t</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.hoadon.index') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>H??a ????n</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.loaitour.index') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>Lo???i tour</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.chucvu.index') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>Ch???c v???</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index') }}">
                        <i class="ti-user"></i>
                        <p>User</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('travel.index.index') }}">Trang ch??? travel</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" class="dn">
                        @if(isset(Auth::user()->username))
						<li>
                            <div>
                                <a href="#">
                                    <i class="ti-face-smile"></i>
                                    <p class="dn">Ch??o, {{Auth::user()->username}}( {{Auth::user()->ten}} )</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="{{ route('auth.auth.logout') }}">
                                    <i class="ti-face-sad"></i>
                                    <p class="dn">????ng xu???t</p>
                                </a>
                            </div>
                            
                        </li>
                        @endif
                    </ul>

                </div>
            </div>
        </nav>