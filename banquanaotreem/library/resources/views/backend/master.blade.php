
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('public/backend')}}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
    <!-- /theme JS files -->
    {{-- <link rel="stylesheet" type="text/css" href="Admin.css"> --}}
     <script type="text/javascript" src="../editor/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="JavaScript.js"></script>
        

</head>

<body>
   
        <!-- Main navbar -->
        <div class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">PAGE ADMIN</a>

                <ul class="nav navbar-nav visible-xs-block">
                    <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                    <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
                </ul>
            </div>

            <div class="navbar-collapse collapse" id="navbar-mobile">
                <ul class="nav navbar-nav">
                    <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    

                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img1/user.png" alt="" style="background: white; padding: 2px">
                            <span>{{Auth::user()->email}}</span>
                            <i class="caret"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#"><i class="icon-user-plus"></i>My profile</a></li>
                            <li><a href="#"><i class="icon-coins"></i>My balance</a></li>
                            <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i>Messages</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-cog5"></i>Account settings</a></li>
                            <li><a href="{{asset('logout')}}"><i class="icon-switch2"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navbar -->

        <!-- Page container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- Main sidebar -->
                <div class="sidebar sidebar-main">
                    <div class="sidebar-content">

                        <!-- User menu -->
                        <div class="sidebar-user">
                            <div class="category-content">
                                <div class="media">
                                    <a href="#" class="media-left">
                                        <img src="img1/aa.jpg" class="img-circle img-sm" alt=""></a>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold">Vinh Khang</span>
                                        <div class="text-size-mini text-muted">
                                            <i class="icon-pin text-size-small"></i>&nbsp;Viet Nam, VN
                                        </div>
                                    </div>

                                    <div class="media-right media-middle">
                                        <ul class="icons-list">
                                            <li>
                                                <a href="#"><i class="icon-cog3"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /user menu -->

                        <!-- Main navigation -->
                        <div class="sidebar-category sidebar-category-visible">
                            <div class="category-content no-padding">
                                <ul class="navigation navigation-main navigation-accordion">

                                    <!-- Main -->
                                    <li class="navigation-header"><span>Chức năng chính</span> <i class="icon-menu" title="Main pages"></i></li>
                                    <li>
                                        <a href="{{asset('admin/home')}}"><i class="icon-home4"></i><span>Trang Chủ</span></a>
                                    </li>
                                    <li>
                                        <a href="{{asset('admin/product')}}"><i class="icon-grid"></i><span>Quản lý sản phẩm</span></a>
                                    </li>
                                    <li>
                                        <a href="{{asset('admin/category')}}"><i class="icon-stack2"></i><span>Quản lý loại sản phẩm</span></a>
                                    </li>
                                    <li>
                                        <a href="{{asset('admin/hoadonban')}}"><i class="icon-table2"></i><span>Quản lý hóa đơn bán</span></a>
                                    </li>
                                  
                                    <li>
                                        <a href="{{asset('admin/hoadonnhap')}}"><i class="icon-grid7"></i><span>Quản lý hóa đơn nhập</span></a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{asset('admin/nhanvien')}}"><i class="icon-stack2"></i><span>Quản lý nhân viên</span></a>
                                    </li>
                                    {{-- <li>
                                    <a href="#"><i class="icon-stack2"></i> <span>Page layouts</span></a>
                                    <ul>
                                        <li><a href="">Fixed navbar</a></li>
                                        <li><a href="">Fixed navbar &amp; sidebar</a></li>
                                        
                                    </ul>
                                </li> --}}
                                </ul>

                            </div>
                        </div>
                        <!-- /main navigation -->
                    </div>
                </div>
                <!-- /main sidebar -->

                <!-- Main content -->
                <div class="content-wrapper">

                    <!-- Page header -->
                    
                    <!-- /page header -->

                    <!-- Content area -->
                    
                        @yield('main')
                        <!-- Basic datatable -->

                        <!-- /basic datatable -->

                        <!-- Footer -->
                        <div class="footer text-muted">
                            &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                        </div>
                        <!-- /footer -->
                    
                    <!-- /content area -->
                </div>
                <!-- /main content -->
            </div>
            <!-- /page content -->
        </div>
        <!-- /page container -->
  
</body>
</html>