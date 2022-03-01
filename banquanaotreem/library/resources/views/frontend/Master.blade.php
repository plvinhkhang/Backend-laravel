
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('public/frontend')}}/">
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="CSS/style.css"> -->
    <link href="CSS/css¿13104591831022284763.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/preloader.css¿13104591831022284763.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/bootstrap.min.css¿13104591831022284763.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/icon-font.min.css¿13104591831022284763.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/plugins.css¿13104591831022284763.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/helper.css¿13104591831022284763.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/style.css¿13104591831022284763.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/custom.css¿13104591831022284763.css" rel="stylesheet" type="text/css" media="all" />
    <link href="CSS/custom-responsive.css¿13104591831022284763.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="assets/theme.js"></script>
    <script src="Jadusona_files/modernizr-2.8.3.min.js"></script>
    <script src="Jadusona_files/jquery-1.12.4.min.js"></script>
    <script src="Jadusona_files/popper.min.js"></script>
    <script src="Jadusona_files/bootstrap.min.js"></script>
    <!-- Ajax Cart js -->
    <script src="Jadusona_files/option_selection-ea4f4a242e299f2227b2b8038152223f741e90780c0c766883939e8902542bda.js"></script>
    <script src="Jadusona_files/api.jquery-0ea851da22ae87c0290f4eeb24bc8b513ca182f3eb721d147c009ae0f5ce14f9.js"></script>
    <script src="Jadusona_files/cart.api.js"></script>
    <!-- <script src="./Jadusona_files/plugins.js"></script>
     -->
    <script src="Jadusona_files/theme.js"></script>
    <script src="Jadusona_files/shopify_common-040322ee69221c50a47032355f2f7e6cbae505567e2157d53dfb0a2e7701839c.js"></script>
    <script src="Jadusona_files/spb.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/tab.css">
    <link href="dist/css/bootstrap-rating.css" rel="stylesheet">
<script type="text/javascript" src="dist/js/bootstrap-rating.js"></script>
    <style type="text/css">
        .rating-symbol
        {
            font-size:  20px;
            border: 1px;
        }
        .glyphicon-star
        {
            color: #F9CA0D;
        }
        .glyphicon-star-empty
        {
            color: #F9CA0D;
        }
    </style>
</head>
<body id="jadusona" class="template-index">
    <div class="main-wrapper">
        <div class="header-section section">
            <div id="shopify-section-header-top" class="shopify-section">
                <div class="header-top header-top-one bg-theme-two" style="background-color: #ED7AEB;">
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-center">
                            <div class="col mt-10 mb-10 d-none d-sm-flex">
                                <div class="header-top-left"><p>Chào mừng bạn đến với SHOP </p><p>Hotline: 08332 6444 6</p></div>
                            </div>
                            <div class="col mt-10 mb-10">
                            </div><div class="col mt-10 mb-10">
                                <div class="header-top-right">
                                    <p><a href="#">Tài khoản của tôi</a></p><p>
                                        <a href="#">Tạo tài khoản</a><a href="#">Đăng nhập</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="shopify-section-header-bottom" class="shopify-section">
                <div class="header-bottom header-bottom-one header-sticky@">
                    <div class="container-fluid">
                        <div class="row menu-center align-items-center justify-content-between">
                            <div class="col mt-15 mb-15">
                                <div class="header-logo">
                                    <a href="#"><img src="files/1.png" alt="Jadusona"></a>
                                </div>
                            </div>

                            <div class="col order-2 order-lg-3">
                                <div class="header-shop-links">
                                    <div class="header-search">
                                        <button class="search-toggle">
                                            <img src="assets/search.png¿13104591831022284763.png" alt="search-icon">
                                            <img class="toggle-close" src="assets/close.png¿13104591831022284763.png" alt="search-icon">
                                        </button>
                                        <div class="header-search-wrap">
                                            <form action="{{asset('home/search/')}}" method="get" class="input-group search-bar" role="search">
                                                <input type="search" name="result" value="" placeholder="Type and hit enter">
                                                <button type="submit">
                                                    <img src="assets/search.png¿13104591831022284763.png" alt="search-icon">
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="header-wishlist"><a href="#"><img src="assets/wishlist.png¿13104591831022284763.png" alt="wishlist-icon"></a></div>

                                    <div class="header-mini-cart">

                                        <a class="mini_cart_icon" href="{{asset('cart/show')}}">
                                            <img src="assets/cart.png¿13104591831022284763.png" alt="cart-icon">
                                            <span class="bigcounter">{{Cart::count()}}&nbsp;&nbsp;({{Cart::total()}} VNĐ)</span>
                                        </a>

                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col order-3 order-lg-2">
                                <div class="main-menu">
                                    <nav style="display: block;">
                                        <ul>
                                            <li class="">
                                                <a href="{{asset('home')}}">Trang Chủ</a>
                                                
                                            </li>
                                            <li><a href="{{asset('home/gioithieu')}}">Giới Thiệu</a></li>
                                            <li class=" "><a href="#">
                                                Sản Phẩm</a>
                                                
                                                <ul class="sub-menu">
                                                    @foreach($category as $cate)
                                                    <li>
                                                        <a href="{{asset('home/danhsachsp/'.$cate->id)}}">{{$cate->name}}</a>
                                                    </li>
                                                     @endforeach
                                                </ul>
                                               

                                            </li>
                                            
                                            <li class=" "><a href="{{asset('home/tintuc')}}">
                                                Tin Tức</a>
                                               
                                            </li>
                                            <li><a href="{{asset('home/lienhe')}}">Liên Hệ</a></li>
                                            
                                        </ul>
                                    </nav>

                                    
                                </div>
                            </div>

                            <div class="mobile-menu order-12 d-block d-lg-none col"></div>
                        </div>
                    </div>
                </div>
                <style>
                    .main-menu nav > ul > li > a, .sub-menu li a {
                        color: #1a161e;
                    }

                    .main-menu nav > ul > li.active > a, .main-menu nav > ul > li:hover > a, .sub-menu li.active > a, .sub-menu li:hover > a {
                        color: #ff708a;
                    }

                    .sub-menu {
                        border-top: 3px solid #ff708a;
                    }
                </style>
            </div>
        </div>

@yield('main')
<div id="shopify-section-1533380728868" class="shopify-section" style="margin-top: 80px">
                <div class="brand-section section mb-md-70 mb-sm-70 mb-xs-50" style="margin-top: 0px; margin-bottom: 100px;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="brand-slider slick-initialized slick-slider">
                                <div class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 1200px; transform: translate3d(0px, 0px, 0px);">
                                        <div class="brand-item col slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 200px;"><img src="files/brand-1.png¿v=1533380745.png" alt=""></div>
                                        <div class="brand-item col slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 200px;"><img src="files/brand-2.png¿v=1533380752.png" alt=""></div>
                                        <div class="brand-item col slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 200px;"><img src="files/brand-3.png¿v=1533380757.png" alt=""></div>
                                        <div class="brand-item col slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 200px;"><img src="files/brand-4.png¿v=1533380764.png" alt=""></div>
                                        <div class="brand-item col slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" style="width: 200px;"><img src="files/brand-5.png¿v=1533380772.png" alt=""></div>
                                        <div class="brand-item col slick-slide slick-active" data-slick-index="5" aria-hidden="false" tabindex="0" style="width: 200px;"><img src="files/brand-6.png¿v=1533380782.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div id="shopify-section-footer" class="shopify-section">
            <div class="footer-top-section section bg-theme-two-light pt-100 pt-md-70 pt-sm-70 pt-xs-70 pb-50 pb-md-20 pb-sm-20 pb-xs-0" style="background-image: url();">
                <div class="container">
                    <div class="row">
                        <div class="footer-widget col-lg-3 col-md-6 col-12 mb-50"><h4 class="title">LIÊN HỆ</h4><p>Liên hệ với chúng tôi </p><p>0833264446<br>https://www.facebook.com/pl.vkhang/</p><p>plvinhkhangg@gmail.com</p></div><div class="footer-widget col-lg-3 col-md-6 col-12 mb-50">
                            <h4 class="title">SẢN PHẨM</h4><ul><li><a href="#">Sản Phẩm Mới</a></li><li><a href="/collections/best-seller">Sản Phẩm Bán Chạy</a></li></ul>
                        </div><div class="footer-widget col-lg-3 col-md-6 col-12 mb-50">
                            <h4 class="title">THÔNG TIN</h4><ul><li><a href="/pages/about-us">Cửa Hàng</a></li><li><a href="#">Sản Phẩm</a></li><!-- <li><a href="#">Tin </a></li> --></ul>
                        </div>
                        <div class="footer-widget col-lg-3 col-md-6 col-12 mb-50">
                            
                            </form><h5>FOLLOW US</h5><p class="footer-social"><a href="#">Facebook</a> -<a href="#">Twitter</a> -<a href="">Google+</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .footer-widget .title, .footer-widget h5 {
                    color: #1a161e;
                    font-family: Arial;
    font-weight: bold;
                }

                    .footer-widget .title::before {
                        background-color: #94c7eb;
                    }

                .footer-subscribe-form {
                    border-bottom: 1px solid #94c7eb;
                }

                    .footer-widget p, .footer-widget ul li a, .footer-widget .footer-social a, .footer-subscribe-form input {
                        color: #1a161e;
                    }

                        .footer-widget ul li a:hover, .footer-widget .footer-social a:hover, .footer-subscribe-form button:hover {
                            color: #ff708a;
                        }
            </style>
        </div>
    </div>

  <!--   <script src="assets/fastclick.min.js¿13104591831022284763"></script> -->
<!--     <script src="assets/timber.js¿13104591831022284763"></script>
 -->
    <script type="text/javascript" src="assets/handlebars.min.js"></script>
    <script type="text/javascript" src="assets/theme.js"></script>
{{--     <script type="text/javascript" src="assets/ajax-cart.js"></script>
 --}}    <script type="text/javascript" src="javascripts/currencies.js"></script>
    <script type="text/javascript" src="assets/jquery.currencies.min.js"></script>
    
</body>
</html>