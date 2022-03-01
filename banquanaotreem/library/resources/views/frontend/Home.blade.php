@extends('frontend.Master')
@section('title','Jadusona')
@section('main')
        <main role="main">

            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <!-- <ol class="carousel-indicators">
                    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                </ol> -->
                <div class="carousel-inner" style="height:350px">
                    <div class="item">
                        <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="files/aa4.jpg" style="width: 100%; height: 500px">
                        <div class="container">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="files/aa2.jpg" style="width: 100%; height: 500px">
                        <div class="container">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="files/aa3.jpg" style="width: 100%; height: 500px">
                        <div class="container">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <!-- hết slide -->

            <div id="shopify-section-1533015878231" class="shopify-section" style="margin-top: -60px;">
                <div class="banner-section section" id="banner_1533015878231" style="margin-top: 100px;">
                    <div class="container-fluid">
                        <div class="row row-10">
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <div class="bn_sty1 banner banner-1 content-left content-middle">
                                    <a href="#" class="image"><img src="files/banner-1.jpg¿v=1533015919.jpg" alt=""></a>

                                    <div class="content"><h1 style="color: #1a161e">New Arrival <br>Baby’s Shoe <br>GET 30% OFF</h1><a href="#" data-hover="SHOP NOW">SHOP NOW</a></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <a href="#" class="bn_sty2 banner banner-2"><img src="files/banner-2.jpg¿v=1533015930.jpg" alt=""><div class="content bg-theme-one" style=" background-color:#ff708a;"><h1 style="color: #ffffff">New Toy’s for your Baby</h1></div><span class="banner-offer" style="color: #ff708a;background-color: #e6f5ff;">25% off</span></a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-20">
                                <div class="bn_sty3 banner banner-1 content-left content-top">
                                    <a href="/collections/all" class="image"><img src="files/banner-3.jpg¿v=1533015939.jpg" alt=""></a>
                                    <div class="content"><h1 style="color: #1a161e">Trendy <br>Collections</h1><a href="/collections/all" data-hover="SHOP NOW">SHOP NOW</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .banner.bn_sty1 .content a {
                        color: #1a161e;
                        border-bottom: 1px solid #1a161e;
                        ;
                    }

                    .banner.bn_sty3 .content a {
                        color: #1a161e;
                        border-bottom: 1px solid #1a161e;
                        ;
                    }

                    #banner_1533015878231 .banner .content a::before {
                        color: #ff708a;
                        border-bottom: 1px solid #ff708a;
                    }
                </style>
            </div>

            <!-- hết section -->

            <div id="shopify-section-1533180860253" class="shopify-section">
                <div class="product-section section" style="margin-top: 75px;">
                    <div class="container">
                        <div class="row">
                            <div class="section-title text-center col mb-60 mb-md-40 mb-sm-40 mb-xs-30">
                                <h1 style="color: #1a161e;font-family: none;
    font-weight: bold;">
                                    SẢN PHẨM NỔI BẬT
                                </h1><!-- <p style="color: #707070">All popular product find here</p> -->
                            </div>
                        </div>

                        <div class="row">
                            @foreach($new_product as $item)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-50">
                                <div class="product_item fix">
                                    <div class="product_inner product_wrapper position-relative">
                                        <div class="image image_before position-relative">
                                            <img src="{{asset('public/frontend/img/'.$item->img)}}" alt="" style="height: 320px">
                                            <div class="image_overlay position-absolute">
                                                <div class="action-buttons">
                                                    <a class="add_cart cart-item" href="{{asset('cart/add/'.$item->id_sp)}}">Add to Cart</a>
                                                    <a class="" href="#">
                                                        <span class="add_wish">Add to wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content d-flex justify-content-between action_hide mt-20">
                                            <div class="content-left">
                                                <h4 class="title"><a href="{{asset('home/chitiet/'.$item->id_sp)}}"><span style="font-family: Arial; font-size: 23px;font-weight: bold;">{{$item->tensp}}</span>  </a></h4>

                                            <div class="content-right prod_price">
                                                <span class="money price" data-currency-usd="$400" style="font-family: Arial;font-size: 18px;font-weight: bold;text-align: left; margin-left: 0px">{{number_format($item->gia,0,',',',')}} VNĐ</span>
                                                <div class="ratting spr-badge-caption-none">
                                                   {{--  <span class="spr-badge" id="spr_badge_1382564331633" data-rating="0.0">
                                                        
                                                        <img src="img/rate.jpg">
                                                        <span class="spr-badge-caption">No reviews</span>
                                                    </span> --}}
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                        <div class="action_content position-absolute">
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <h4 class="title"><a href="{{asset('home/chitiet/'.$item->id_sp)}}"><span style="font-family: Arial; font-size: 13px;font-weight: bold;">{{$item->tensp}}</span> </a></h4>
                                                    <div class="ratting spr-badge-caption-none">
                                                        {{-- <span class="spr-badge" id="spr_badge_1382564331633" data-rating="0.0">
                                                            
                                                            <input type="" class="rating"/>
                                                        </span> --}}
                                                    </div><h5 class="size grid_size d-flex">
                                                        <span class="mr-5">Size:</span>
                                                        <a class="remove_href">{{$item->size}}</a>

                                                        <!-- <a class="remove_href">sm</a> -->
                                                    </h5><h5 class="color grid_size d-flex">
                                                        <ul class="grid-color-swatch">
                                                            <span class="mr-5">Color : {{$item->mau}}</span>
                                                           
                                                        </ul>
                                                    </h5>
                                                </div>

                                                <div class="content-right prod_price">
                                                   

                                                    <span class="money price" data-currency-usd="$400" style="font-family: Arial;font-size: 13px;font-weight: bold;text-align: left;margin-top: 3px">{{number_format($item->gia,0,',',',')}} VNĐ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div id="shopify-section-1533028826720" class="shopify-section">
                <div class="banner-section section fix" id="bannerfull_1533028826720" style="margin-top: 40px;">
                    <div class="row row-5">
                        <div class="col-lg-4 col-md-6 col-12 mb-10">
                            <div class="banner banner-3">
                                <a href="/collections/all" class="image"><img src="files/banner-4.jpg¿v=1533029464.jpg" alt=""></a>

                                <div class="content" style="background-image: url(//cdn.shopify.com/s/files/1/0017/9440/8561/files/banner-3-shape.png?v=1533029488)"><h1 style="color: #fff">New Arrivals</h1><h2 style="color: #fff">Up to 35% off</h2><h4 style="color: #fff">2 - 5 Years</h4></div><a href="/collections/all" class="shop-link" data-hover="SHOP NOW">SHOP NOW</a>
                            </div>
                        </div><div class="col-lg-4 col-md-6 col-12 mb-10">
                            <div class="banner banner-4">
                                <a href="/collections/all" class="image"><img src="files/banner-5.jpg¿v=1533029503.jpg" alt=""></a>

                                <div class="content">
                                    <div class="content-inner"><h1 style="color: #1a161e">Online Shopping</h1><h2 style="color: #1a161e">Flat 25% off <br>New Trend for 2018</h2><a href="/collections/all" class="shop-link" data-hover="SHOP NOW">SHOP NOW</a></div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 col-md-6 col-12 mb-10">
                            <div class="banner banner-5">
                                <a href="/collections/all" class="image"><img src="files/banner-6.jpg¿v=1533029540.jpg" alt=""></a>

                                <div class="content" style="background-image: url(//cdn.shopify.com/s/files/1/0017/9440/8561/files/banner-5-shape.png?v=1533029527)"><h1 style="color: #fff">Collection for <br>Baby Girl’s</h1><h2 style="color: #fff">Flat 25% off</h2></div><a href="/collections/all" class="shop-link" data-hover="SHOP NOW">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .banner.banner-3 .shop-link {
                        color: #1a161e;
                        border-bottom: 1px solid #1a161e;
                        ;
                    }

                    .banner.banner-3 .shop-link {
                        color: #1a161e;
                        border-bottom: 1px solid #1a161e;
                        ;
                    }

                    .banner.banner-3 .shop-link {
                        color: #1a161e;
                        border-bottom: 1px solid #1a161e;
                        ;
                    }

                    #bannerfull_1533028826720 .banner.banner-3 .shop-link::before,
                    #bannerfull_1533028826720 .banner.banner-4 .shop-link::before,
                    #bannerfull_1533028826720 .banner.banner-5 .shop-link::before {
                        color: #ff708a;
                        border-bottom: 1px solid #ff708a;
                    }
                </style>
            </div>

            <div id="shopify-section-1533180860253" class="shopify-section">
                <div class="product-section section" style="margin-top: 75px;">
                    <div class="container">
                        <div class="row">
                            <div class="section-title text-center col mb-60 mb-md-40 mb-sm-40 mb-xs-30">
                                <h1 style="color: #1a161e;font-family: none;
    font-weight: bold;">
                                    SẢN PHẨM BÁN CHẠY
                                </h1><!-- <p style="color: #707070">All popular product find here</p> -->
                            </div>
                        </div>

                        <div class="row">
                            @foreach($best_sale as $item)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-50">
                                <div class="product_item fix">
                                    <div class="product_inner product_wrapper position-relative">
                                        <div class="image image_before position-relative">
                                            <img src="{{asset('public/frontend/img/'.$item->img)}}" alt="" style="height: 320px">
                                            <div class="image_overlay position-absolute">
                                                <div class="action-buttons">
                                                    <a class="add_cart cart-item" href="{{asset('cart/add/'.$item->id_sp)}}" >Add to Cart</a>
                                                    <a class="" href="">
                                                        <span class="add_wish">Add to wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content d-flex justify-content-between action_hide mt-20">
                                            <div class="content-left">
                                                <h4 class="title"><a href="{{asset('cart/add/'.$item->id_sp)}}"><span style="font-family: Arial; font-size: 23px;font-weight: bold;">{{$item->tensp}}</span> </a></h4>
                                                 <div class="content-right prod_price">
                                                <div class="ratting spr-badge-caption-none">
                                                    {{-- <span class="spr-badge" id="spr_badge_1382564331633" data-rating="0.0">
                                                       
                                                        <img src="img/rate.jpg">
                                                        <span class="spr-badge-caption">No reviews</span>
                                                    </span> --}}
                                                </div>
                                            

                                            <div class="content-right prod_price">
                                                <span class="money price" data-currency-usd="$400" style="font-family: Arial;font-size: 18px;font-weight: bold;text-align: left; margin-left: 0px">{{number_format($item->gia,0,',',',')}} VNĐ</span>

                                                
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                        <div class="action_content position-absolute">
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <h4 class="title"><a href="{{asset('home/chitiet/'.$item->id_sp)}}"><span style="font-family: Arial; font-size: 13px;font-weight: bold;">{{$item->tensp}}</span> </a></h4>
                                                    <div class="ratting spr-badge-caption-none">
                                                        {{-- <span class="spr-badge" id="spr_badge_1382564331633" data-rating="0.0">
                                                           
                                                             <img src="img/rate.jpg">
                                                        </span> --}}
                                                    </div><h5 class="size grid_size d-flex">
                                                        <span class="mr-5">Size:</span>
                                                        <a class="remove_href">{{$item->size}}</a>

                                                      
                                                    </h5><h5 class="color grid_size d-flex">
                                                        <ul class="grid-color-swatch">
                                                            <span class="mr-5">Color : {{$item->mau}}</span>
                                                            
                                                        </ul>
                                                    </h5>
                                                </div>

                                                <div class="content-right prod_price">
                                                    <span class="money price" data-currency-usd="$400" style="font-family: Arial;font-size: 13px;font-weight: bold;text-align: left;margin-top: 3px">{{number_format($item->gia,0,',',',')}} VNĐ</span>

                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            
        </main>
        @stop
    
