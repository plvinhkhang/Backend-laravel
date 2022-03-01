@extends('frontend.Master')
@section('title','Tìm Kiếm')
@section('main')
<div class="page-banner-section section" style="background-image: url(//cdn.shopify.com/s/files/1/0017/9440/8561/files/hero-1_6e6124c9-278a-46fa-8e71-8664cba4d26b.jpg?v=1533461483);">
  <div class="container">
    <div class="row">
      <div class="page-banner-content col">

        <h1 style="color: #1a161e">Product</h1><ul class="page-breadcrumb">
  <li>
    <a href="{{asset('home')}}" title="Back to the home page">Home</a>
  </li>
  <li>

    <span>Product</span>

  </li>
</ul></div>
    </div>
  </div>
</div>
<main role="main">
     
<div class="search-page page-section section mt-100 mt-md-70 mt-sm-70 mt-xs-50 mb-50 mb-md-20 mb-sm-20 mb-xs-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        
       
        <h4 class="text-center search-title" style="font-family: Arial; font-weight: bold;font-size: 28px;
}">Kết quả tìm kiếm:</h4>
        <hr class="hr--clear mb-30">
        <div class="search-item mb-50">
           @foreach($product as $search)
          <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-50">
                                <div class="product_item fix">
                                    <div class="product_inner product_wrapper position-relative">
                                        <div class="image image_before position-relative">
                                            <img src="{{asset('public/frontend/img/'.$search->img)}}" alt="New Style Frog Dress" style="height: 270px; width: 270px">
                                            <div class="image_overlay position-absolute">
                                                <div class="action-buttons">
                                                    <a class="add_cart cart-item" href="{{asset('cart/add/'.$search->id_sp)}}">Add to Cart</a>
                                                    <a class="" href="#">
                                                        <span class="add_wish">Add to wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content d-flex justify-content-between action_hide mt-20">
                                            <div class="content-left">
                                                <h4 class="title"><a href="{{asset('home/chitiet/'.$search->id_sp)}}"><span style="font-family: Arial; font-size: 23px;font-weight: bold;">{{$search->tensp}}</span>  </a></h4>

                                            <div class="content-right prod_price">
                                                <span class="money price" data-currency-usd="$400" style="font-family: Arial;font-size: 18px;font-weight: bold;text-align: left; margin-left: 0px">{{number_format($search->gia,0,',',',')}} VNĐ</span>
                                                <div class="ratting spr-badge-caption-none">
                                                    <span class="spr-badge" id="spr_badge_1382564331633" data-rating="0.0">
                                                        
                                                        <img src="img/rate.jpg">
                                                        <span class="spr-badge-caption">No reviews</span>
                                                    </span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                        <div class="action_content position-absolute">
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <h4 class="title"><a href="{{asset('home/chitiet/'.$search->id_sp)}}"><span style="font-family: Arial; font-size: 13px;font-weight: bold;">{{$search->tensp}}</span> </a></h4>
                                                    <div class="ratting spr-badge-caption-none">
                                                        <span class="spr-badge" id="spr_badge_1382564331633" data-rating="0.0">
                                                            
                                                             <img src="img/rate.jpg">
                                                        </span>
                                                    </div><h5 class="size grid_size d-flex">
                                                        <span class="mr-5">Size:</span>
                                                        <a class="remove_href">{{$search->size}}</a>

                                                        <!-- <a class="remove_href">sm</a> -->
                                                    </h5><h5 class="color grid_size d-flex">
                                                        <ul class="grid-color-swatch">
                                                            <span class="mr-5">Color : {{$search->mau}}</span>
                                                           
                                                        </ul>
                                                    </h5>
                                                </div>

                                                <div class="content-right prod_price">
                                                   

                                                    <span class="money price" data-currency-usd="$400" style="font-family: Arial;font-size: 13px;font-weight: bold;text-align: left;margin-top: 3px">{{number_format($search->gia,0,',',',')}} VNĐ</span>
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
</div>



    </main>
    @stop