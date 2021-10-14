<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if (Auth::user()->level == "A")
        <title>Ulul Ilmi | Dashboard Admin</title>                                
    @elseif(Auth::user()->level == "O")
        <title>Ulul Ilmi | Dashboard Operator</title>
    @endif

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/assets-admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets-admin/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/assets-admin/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets-admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/assets-admin/dist/css/skins/_all-skins.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="/assets-admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets-ululilmi/jenjang_pendidikan/Logo-Ponpes-Redesign.png">

    <!-- Summernote -->
    {{-- <link href="/assets-admin/bower_components/summernote/summernote-bs4.css" rel="stylesheet"> --}}
    
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
    <body class="hold-transition skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo" style="background-color: white;">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            {{-- <span class="logo-mini"><b>A</b>LT</span> --}}
            <img class="logo-mini" src="/assets-ululilmi/jenjang_pendidikan/Logo-Ponpes-Redesign.png" style="width:50px; height:50px; padding:5px;" alt="">

            <!-- logo for regular state and mobile devices -->
            {{-- <span class="logo-lg"><b>Admin</b>LTE</span> --}}
            <img class="logo-lg center" src="/assets-ululilmi/logo.svg" style="width: 200px; display: block; margin-left: auto;margin-right: auto;" alt="">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">0</span>
                    </a>
                    <ul class="dropdown-menu">
                    <li class="header">Example Teks Lorem</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                        <li><!-- start message -->
                            <a href="#">
                            <div class="pull-left">
                                <img src="/assets-admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                            </div>
                            <h4>
                                Support Team
                                <small><i class="fa fa-clock-o"></i> 0 mins</small>
                            </h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                            </a>
                        </li>
                        <!-- end message -->
                        </ul>
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">0</span>
                    </a>
                    <ul class="dropdown-menu">
                    <li class="header">Example Teks Lorem</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                        <li>
                            <a href="#">
                            <i class="fa fa-users text-aqua"></i> Lorem ipsum dolor sit amet consectetur.
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    @if (Auth::user()->foto_user == true)
                        <img src="{{url('/storage/user/'.Auth::user()->foto_user)}}" class="user-image" alt="User Image">
                    @else
                        <img src="/assets-ululilmi/nopicture2.png" class="user-image" alt="User Image">
                    @endif
                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        @if (Auth::user()->foto_user == true)
                            <img src="{{url('/storage/user/'.Auth::user()->foto_user)}}" class="img-circle" alt="User Image">
                        @else
                            <img src="/assets-ululilmi/nopicture2.png" class="img-circle" alt="User Image">
                        @endif

                        <p>
                        {{ Auth::user()->name }}
                        
                        <small style="margin-top: 8px;">
                            @if (Auth::user()->level == "A")
                                <span class="label label-primary" style="font-size: 12px;">Admin</span>                                  
                            @elseif(Auth::user()->level == "O")
                                <span class="label label-info" style="font-size: 12px;">Operator</span>
                            @endif
                        </small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                        <div class="row">
                        <div class="col-xs-12 text-center">
                            <label class="sidebar-label pd-x-25 mg-t-25" style="color:black">Date &amp; Time</label>
                            <br>
                            <span id="time"></span>
                        </div>
                        </div>
                        <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                        <a href="{{route('user.edit', Auth::user()->id)}}" class="btn btn-default btn-flat">Profil & Password</a>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>                
                </ul>
            </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                @if (Auth::user()->foto_user == true)
                    <img src="{{url('/storage/user/'.Auth::user()->foto_user)}}" class="img-circle" alt="User Image">
                @else
                    <img src="/assets-ululilmi/nopicture2.png" class="img-circle" alt="User Image">
                @endif
                </div>
                <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview {{ request()->is('home', 'user', 'user/*/edit', 'user/*') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ request()->is('home') ? 'active' : '' }}"><a href="{{route('home')}}"><i class="fa fa-circle-o"></i> Dashboard</a></li>

                        @if (Auth::user()->level == 'A')
                            <li class="{{ request()->is('user', 'user/*/edit', 'user/*') ? 'active' : '' }}"><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> User Management</a></li>
                        @elseif(Auth::user()->level == 'O')
                            {{-- KOSONG --}}
                        @endif
                    </ul>
                </li>

                <li class="header">INFORMASI PENDAFTARAN</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user-plus"></i> <span>Sample PPDB</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Sample PPDB</a></li>
                    </ul>
                </li>
                
                
                <li class="header">CONTROLLER LANDINGPAGE</li>
                <li class="treeview {{ request()->is('ct-home', 'ct-home-create-md5tob/*', 'ct-home-create-md5ts/*', 'ct-home-create-md5tcb/*', 'ct-home-create-custom','ct-home-edit/*') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-tv"></i> <span>CT Home</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ request()->is('ct-home', 'ct-home-create-md5tob/*', 'ct-home-create-md5ts/*', 'ct-home-create-md5tcb/*', 'ct-home-create-custom','ct-home-edit/*') ? 'active' : '' }}"><a href="{{route('ct-home')}}"><i class="fa fa-circle-o"></i> CT Home</a></li>
                    </ul>
                </li>

                <li class="treeview {{ request()->is(
                    'ct-pdd-sdit', 'ct-pdd-mts', 'ct-pdd-ma', 'ct-pdd-mdt',
                    'ct-pdd-sdit-create-default', 'ct-pdd-mts-create-default', 'ct-pdd-ma-create-default', 'ct-pdd-mdt-create-default',
                    'ct-pdd-sdit-create-custom', 'ct-pdd-mts-create-custom', 'ct-pdd-ma-create-custom', 'ct-pdd-mdt-create-custom',
                    'ct-pdd-sdit-edit/*', 'ct-pdd-mts-edit/*', 'ct-pdd-ma-edit/*', 'ct-pdd-mdt-edit/*'
                    ) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-university"></i> <span>CT Pendidikan</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ request()->is('ct-pdd-sdit', 'ct-pdd-sdit-create-default', 'ct-pdd-sdit-create-custom', 'ct-pdd-sdit-edit/*') ? 'active' : '' }}"><a href="{{route('ct-pdd-sdit')}}"><i class="fa fa-circle-o"></i> CT SDIT</a></li>
                        <li class="{{ request()->is('ct-pdd-mts', 'ct-pdd-mts-create-default', 'ct-pdd-mts-create-custom', 'ct-pdd-mts-edit/*') ? 'active' : '' }}"><a href="{{route('ct-pdd-mts')}}"><i class="fa fa-circle-o"></i> CT MTS</a></li>
                        <li class="{{ request()->is('ct-pdd-ma', 'ct-pdd-ma-create-default', 'ct-pdd-ma-create-custom', 'ct-pdd-ma-edit/*') ? 'active' : '' }}"><a href="{{route('ct-pdd-ma')}}"><i class="fa fa-circle-o"></i> CT MA</a></li>
                        <li class="{{ request()->is('ct-pdd-mdt', 'ct-pdd-mdt-create-default', 'ct-pdd-mdt-create-custom', 'ct-pdd-mdt-edit/*') ? 'active' : '' }}"><a href="{{route('ct-pdd-mdt')}}"><i class="fa fa-circle-o"></i> CT MDT</a></li>
                    </ul>
                </li>

                <li class="treeview {{ request()->is(
                    'ct-gallery-sdit', 'ct-gallery-mts', 'ct-gallery-ma', 'ct-gallery-mdt', 'ct-gallery-other'
                    ) ? 'active' : '' }}" >
                    <a href="#">
                        <i class="fa fa-image"></i> <span>CT Gallery</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ request()->is('ct-gallery-sdit') ? 'active' : '' }}"><a href="{{route('ct-gallery-sdit')}}"><i class="fa fa-circle-o"></i> CT Gallery SDIT</a></li>
                        <li class="{{ request()->is('ct-gallery-mts') ? 'active' : '' }}"><a href="{{route('ct-gallery-mts')}}"><i class="fa fa-circle-o"></i> CT Gallery MTS</a></li>
                        <li class="{{ request()->is('ct-gallery-ma') ? 'active' : '' }}"><a href="{{route('ct-gallery-ma')}}"><i class="fa fa-circle-o"></i> CT Gallery MA</a></li>
                        <li class="{{ request()->is('ct-gallery-mdt') ? 'active' : '' }}"><a href="{{route('ct-gallery-mdt')}}"><i class="fa fa-circle-o"></i> CT Gallery MDT</a></li>
                        <li class="{{ request()->is('ct-gallery-other') ? 'active' : '' }}"><a href="{{route('ct-gallery-other')}}"><i class="fa fa-circle-o"></i> CT Gallery OTHER</a></li>

                    </ul>
                </li>

                <li class="treeview {{ request()->is('ct-creator', 'ct-content') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i> <span>CT Content</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ request()->is('ct-creator') ? 'active' : '' }}"><a href="{{route('ct-creator')}}"><i class="fa fa-circle-o"></i> CT Creator</a></li>
                        <li class="{{ request()->is('ct-content') ? 'active' : '' }}"><a href="{{route('ct-content')}}"><i class="fa fa-circle-o"></i> CT Content</a></li>
                    </ul>
                </li>

                <li class="treeview {{ request()->is('ct-contact') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-phone"></i> <span>CT Contact</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ request()->is('ct-contact') ? 'active' : '' }}"><a href="{{route('ct-contact.index')}}"><i class="fa fa-circle-o"></i> CT Contact</a></li>
                    </ul>
                </li>

                <li class="treeview {{ request()->is('ct-info-ppdb', 'ct-info-ppdb/create' , 'ct-info-ppdb/*/edit') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-question-circle"></i> <span>CT Informasi PPDB</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ request()->is('ct-info-ppdb', 'ct-info-ppdb/create' , 'ct-info-ppdb/*/edit') ? 'active' : '' }}"><a href="{{route('ct-info-ppdb.index')}}"><i class="fa fa-circle-o"></i> CT Informasi Pendaftaran</a></li>
                    </ul>
                </li>

                <li><a href="#"><i class="fa fa-book"></i> <span>Example</span></a></li>
                <li class="header">LABELS</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
            </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content-->
            @yield('content-wrapper')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
            <span class="">Check : </span>
                <a target="_blank" class="" href=""><i class="fa fa-facebook-official" style="color:#3D4FFF" aria-hidden="true"></i></a>
                <a target="_blank" class="" href=""><i  class="fa fa-instagram" style="color: #ff5396" aria-hidden="true"></i></a>
            </div>
            {{-- <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved. --}}
            
            <strong>Copyright &copy;<script>document.write(new Date().getFullYear())</script></strong> <a href="https://laravel.com/">Laravel</a> By <a href="https://www.instagram.com/diazdjuliansyah">Diaz Djuliansyah</a>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            @if (Auth::user()->level == 'A')
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            @elseif(Auth::user()->level == 'O')
                {{-- KOSONG --}}
            @endif
            
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                    <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                        <p>Will be 23 on April 24th</p>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                    <i class="menu-icon fa fa-user bg-yellow"></i>

                    <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                        <p>New phone +1(800)555-1234</p>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                    <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                        <p>nora@example.com</p>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                    <i class="menu-icon fa fa-file-code-o bg-green"></i>

                    <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                        <p>Execution time 5 seconds</p>
                    </div>
                    </a>
                </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                    <h4 class="control-sidebar-subheading">
                        Custom Template Design
                        <span class="label label-danger pull-right">70%</span>
                    </h4>

                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                    <h4 class="control-sidebar-subheading">
                        Update Resume
                        <span class="label label-success pull-right">95%</span>
                    </h4>

                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                    <h4 class="control-sidebar-subheading">
                        Laravel Integration
                        <span class="label label-warning pull-right">50%</span>
                    </h4>

                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                    <h4 class="control-sidebar-subheading">
                        Back End Framework
                        <span class="label label-primary pull-right">68%</span>
                    </h4>

                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                    </div>
                    </a>
                </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>

            @if (Auth::user()->level == 'A')
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                        Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                        Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                        Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Show me as online
                        <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Turn off notifications
                        <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                        Delete chat history
                        <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            @elseif(Auth::user()->level == 'O')
                {{-- KOSONG --}}
            @endif
            
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="/assets-admin/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="/assets-admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="/assets-admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="/assets-admin/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="/assets-admin/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/assets-admin/dist/js/demo.js"></script>
        <!-- Summernote -->
        {{-- <script src="/assets-admin/bower_components/summernote/summernote-bs4.min.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

        <!-- DataTables -->
        <script src="/assets-admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/assets-admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.sidebar-menu').tree()
            })
        </script>

        <script>
            var timeDisplay = document.getElementById("time");

            function refreshTime() {
            var dateString = new Date().toLocaleString("en-US", {timeZone: "Asia/Jakarta"});
            var formattedString = dateString.replace(", ", " - ");
            timeDisplay.innerHTML = formattedString;
            }

            setInterval(refreshTime, 1000);
        </script>

        @stack('datatable')
        @stack('show-hide-password')
        @stack('confirm-alert')
        @stack('summernote')
        @stack('select-custom')
        @stack('custom-maps')
        @include('sweetalert::alert')
    </body>
</html>
