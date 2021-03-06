@extends('frontend.Master')
@section('title','Jadusona')
@section('main')
<div class="page-banner-section section" style="background-image: url(//cdn.shopify.com/s/files/1/0017/9440/8561/files/hero-1_6e6124c9-278a-46fa-8e71-8664cba4d26b.jpg?v=1533461483);">
  <div class="container">
    <div class="row">
      <div class="page-banner-content col">
        <h1 style="color: #1a161e; font-weight: bold;font-family: Arial">{{$item->tensp}}</h1><ul class="page-breadcrumb">
  <li>
    <a href="{{asset('home')}}" title="Back to the home page">Home</a>
  </li>
  <li>
    <span>{{$item->tensp}}</span>

  </li>
</ul></div>
    </div>
  </div>
</div>

<main role="main">
      <div id="shopify-section-product-template" class="shopify-section">
<div class="page-section section mt-100 mt-md-70 mt-sm-70 mt-xs-50 mb-50 mb-md-20 mb-sm-20 mb-xs-0">
  <div class="container">
    
    <div class="row row-30 flex-row-reverse">
      <div class="col-lg-12 col-12 order-1 order-lg-1 mb-50">
        <div class="row row-20 mb-20">
          <div class="col-lg-6 col-12 mb-50">
            <div class="pro-large-img mb-10 fix">
              <a href="//cdn.shopify.com/s/files/1/0017/9440/8561/products/01.jpg?v=1533206881">
    <img id="ProductPhotoImg" src="{{('img/'.$item->img)}}" data-zoom-image="{{$item->img}}" alt="Product Title" style="height: 500px; width: 90%">
  </a>
</div>
</div>
          <div class="col-lg-6 col-12 mb-50">
            <div class="single-product-content">
              <div class="head">
                <div class="head-left">
                  <h3 class="title" style="font-family: Arial; font-weight: bold;">{{$item->tensp}}</h3>
                  <div class="ratting spr-badge-caption-none">
                    <span class="spr-badge" id="spr_badge_1382563774577" data-rating="0.0">
                      {{-- <span class="spr-starrating spr-badge-starrating">
                       <input type="hidden" name="danhgia" class="rating" value="{{$danhgia->sodiem}}">
                      </span> --}}
                    <span class="spr-badge-caption">No reviews</span>
                    </span>

                  </div>
                </div>
                <div class="head-right prod_price mt-10">
                  <span id="ProductPrice" class="price">
                    <span class="money" data-currency-usd="$150.00" data-currency="USD">{{number_format($item->gia,0,',',',')}} <span style="font-family: Arial; font-weight: bold;">VN??</span></span>
                  </span><!-- <span id="ComparePrice" class="old"> <span class="money" data-currency-usd="$180.00" data-currency="USD">$180.00</span></span> -->
                </div>
                
                <div class="best-deal-product p_template">
                  <div class="content-bottom deal_content_bottom"></div>
                </div>
                
              </div>
              <div class="description">
                {{-- <p> Chi???c ?????m ???????c thi???t k??? b???i nh???ng k??? thu???t nhi???u kinh nghi???m v?? ???????c ch???n l???c r???t k??? v??? ch???t li???u c??ng nh?? form d??ng. Ch???t li???u m???m m???i, m??u s???c t????i m???i ch???c ch???n s??? l??m h??i l??ng c??c m??? d?? l?? kh?? t??nh nh???t. H??y ?????n c???a h??ng c???a Jadusona ????? l???a ch???n cho b?? nh???ng chi???c ?????m xinh x???n nh???t c??c m??? nh??.
</p> --}}     {{$item->mota1}}

              </div>

<form action="/cart/add" method="post" enctype="multipart/form-data" id="add-item-form">
  <div class="quantity-colors">
    <div class="quantity"><h5>S??? L?????ng:</h5><div class="pro-qty">
  
    <div class="js-qty">
      
      <input type="text" class="js-qty__num" value="1" min="1" data-id="" aria-label="quantity" pattern="[0-9]*" name="quantity" id="">
     
    </div>
  
  </div>
    </div>                            
</div>
    
    
  <div class="swatch clearfix Size" data-option-index="0">
  <div class="header">K??ch th?????c : {{$item->size}} </div>
      
    
  </div>
 



<div class="swatch clearfix Color" data-option-index="1">
  <div class="header">M??u s???c : {{$item->mau}}</div>
      
</div>
<div class="swatch clearfix Color" data-option-index="1">
  <div class="header">Ch???t li???u : {{$item->chatlieu}} </div>
</div>


<div class="actions">
    
    
    <a class="box" href ="{{asset('cart/add/'.$item->id_sp)}}"  style="margin-top: 14px;width: 200px;">
      <img src="img/iconfinder_shopping-cart_2561279.png" style="margin-left: 11px;padding-right: 2px;width: 30px;"><span style="padding-left: 40px;font-size: 14px; margin-left: -26px; font-weight: bold;">Add to Cart</span>
    </a>
    
    
{{-- <a class="box" href="#" data-tooltip="Wishlist" style="margin-top: 14px;">
      <span class="add_wish"><img src="img/iconfinder_heart_226577.png" style="padding-left: 4px;"></span>
    </a> --}}
  </div>

</form>
</div>
</div>
</div>
         <div class="row mb-70" style="float: left;">
          <div class="col-12">
    <ul class="pro-info-tab-list section nav">
      <li><a class="active" href="#description" data-toggle="tab">M?? T???</a></li>
      <li><a href="#comment" data-toggle="tab" class="">B??NH LU???N</a></li>
       <li><a href="#rate" data-toggle="tab" class="">????NH GI??</a></li>
    </ul>
  </div>
  
  
  <div class="tab-content col-12">
    <div id="description" class="pro-info-tab tab-pane active">
      <div class="product-description-wrapper">
        {!!$item->mota!!}
 </div>
    </div>
  <div id="comment" class="pro-info-tab tab-pane" style="display: block;">
              
            <div class="row">
              <div class="col-md-9 comment">
                <form method="post">
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input required type="email" class="form-control" id="email" name="email" style="font-size: 13px">
                  </div>
                  <div class="form-group">
                    <label for="name">T??n:</label>
                    <input required type="text" class="form-control" id="name" name="name" style="font-size: 13px">
                  </div>
                  <div class="form-group">
                    <label for="cm">B??nh lu???n:</label>
                    <textarea required rows="10" id="cm" class="form-control" name="content" style="font-size: 13px"></textarea>
                  </div>
                  <div class="form-group text-right">
                    <button class="btn btn" type="submit" style="background: white;margin-top: 14px;width: 100px; border: 1px solid #333;" ><span style="font-size: 14px; color: black; font-weight: bold;">G???i</span>
                    </button>
                  </div>
                  {{csrf_field()}}
                </form>
              </div>
              </div>
            <style type="text/css">
              #comment-list li{
                list-style: none;
                /*color: #666;
                line-height: 22px;*/
                font-size: 14px;

              }
              li.com-title {
              color: #000;
              font-weight: bold;
              text-transform: capitalize;
              }
              ul{
                margin-top: 0;
                margin-bottom: 1rem;
                
              }
            </style>
            <div class="row">
              <div class="col-md-9 comment-list">
            <div id="comment-list">
              @foreach($comments as $comment)
              <ul style="margin-left: 18px;  border-bottom: 1px dotted #cdcdcd; padding-bottom: 10px;">
                <li class="com-title" >
                  {{$comment->name}}
                  <br>
                  <span style="font-style: italic; font-size: 12px;color: darkgrey;">{{date('d/m/Y', strtotime($comment->created_at))}}</span>  
                </li>
                <li class="com-details">
                  {{$comment->content}}
                </li>
              </ul>
              @endforeach
            </div>
          </div>
          </div>

  </div>
  <div id="rate" class="pro-info-tab tab-pane">
    <div class="col-md-12" >
                    
                    <form action="" method="post">
                     
                        <div class="rate form-group" id="rating_wrapper">
                            <label class="float-left" style="margin-right: 20px"> Ch???n ????nh gi?? c???a b???n v??? s???n ph???m n??y:</label>
                            
                              <input type="hidden" name="danhgia" class="rating">
                        </div>
                    <div class="thongtin float-left" style="margin-top: 20px;">
                         
                        <div class="form-group">
                        <label  style="float: left;  margin-top: 5px; margin-right: 20px">Email:</label>
                          <input  type="text" class="form-control" id="txtmail" name="txtmail" style="font-size: 13px;width: 350px; margin-left: 73px;" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                          <label style="float: left;  margin-top: 2px; margin-right: 20px">H??? T??n:</label>
                          <input type="text" class="form-control" id="txtten" placeholder="H??? v?? t??n" name="txtten" style="font-size: 13px; width: 350px " required="">
                        </div>
                        <div class="form-group">
                          <label  style="float: left;  margin-top: 2px; margin-right: 29px">S??? ??T:</label>
                          <input type="text" class="form-control" id="sdt" placeholder="S??? ??i???n tho???i" name="sdt" style="font-size: 13px; width: 350px" required="">
                        </div>
                  
                         
                    </div>
                    <div class="form-group">
                            <label for="review_detail" class="float-left" style="margin-right: 9px; margin-left: 20px">Nh???n X??t:</label>
                       <textarea class="form-control" name="nhanxet"  cols="15" rows="10"  style="width: 420px;margin-top: 27px; height: 125px; margin-left: 480px; font-size: 13px; color: black" required="" >
                          
                        </textarea>
                            {{-- <i class="form-control-feedback" data-bv-icon-for="detail" style="display: none;"></i> --}}
                    </div>
                        

                        
                        <div class="action">
                            <div class="word-counter"></div>
                            {{-- <div class="checkbox" style="display:none;">
                                <label>
                                    <input id="show_information" type="checkbox" checked="" value="1"> Hi???n th??? th??ng tin mua h??ng trong ph???n nh???n x??t
                                </label>
                            </div> --}}
                            <button type="submit" class="btn btn-default" style="margin-top: -36px; float: right; margin-right: 50px; background: white;  width: 100px;border: 1px solid #333; color: black">G???i nh???n x??t</button>
                           
                        </div>
                        {{csrf_field()}}
                    </form>
                     <div class="row">
              <div class="col-md-9 comment-list" style="margin-left: -17px; margin-top: 30px;">
            <div id="comment-list">
              @foreach($danhgia as $comment)
              <ul style="margin-left: 18px;  border-bottom: 1px dotted #cdcdcd; padding-bottom: 10px;">
                <li class="com-title" >
                  {{$comment->hoten}}
                  <br>
                  {{-- <span style="font-style: italic; font-size: 12px;color: darkgrey;">{{date('d/m/Y', strtotime($comment->created_at))}}</span> --}}  
                </li>
                <li class="com-details">
                   <input type="hidden" name="danhgia" class="rating" value="{{$comment->sodiem}}">
                   <br>{{$comment->nhanxet}}
                </li>
              </ul>
              @endforeach
            </div>
          </div>
          </div>
    </div>
  </div>       
        </div>
        <div class="row">
    <div class="section-title text-left col col mb-60 mb-sm-40 mb-xs-40" style="margin-top: 40px;">
        <h1 style="font-family: Arial">S???n Ph???m Li??n Quan</h1>
    </div>
    <div class="row">
                  @foreach($product as $sp)
                  <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-50">
                                <div class="product_item fix">
                                    <div class="product_inner product_wrapper position-relative">
                                        <div class="image image_before position-relative">
                                            <img src="{{asset('public/frontend/img/'.$sp->img)}}" alt="New Style Frog Dress" style="width: 270px; height: 320px">
                                            <div class="image_overlay position-absolute">
                                                <div class="action-buttons">
                                                    <a class="add_cart cart-item" href="" >Add to Cart</a><a class="" href="">
                                                        <span class="add_wish">Add to wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="content d-flex justify-content-between action_hide mt-20">
                                            <div class="content-left">
                                                <h4 class="title"><a href="{{asset('home/chitiet/'.$sp->id)}}"><span style="font-family: Arial; font-size: 23px;font-weight: bold;">{{$sp->tensp}}</span> </a></h4>
                                                 <div class="content-right prod_price">
                                                <div class="ratting spr-badge-caption-none">
                                                    <span class="spr-badge" id="spr_badge_1382564331633" data-rating="0.0">
                                                       
                                                        {{-- <img src="img/rate.jpg"> --}}
                                                        <span class="spr-badge-caption">No reviews</span>
                                                    </span>
                                                </div>
                                            

                                            <div class="content-right prod_price">
                                                <span class="money price" data-currency-usd="$400" style="font-family: Arial;font-size: 18px;font-weight: bold;text-align: left; margin-left: 0px">{{number_format($sp->gia,0,',',',')}} VN??</span>

                                                
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                        <div class="action_content position-absolute">
                                            <div class="content d-flex justify-content-between">
                                                <div class="content-left">
                                                    <h4 class="title"><a href="{{asset('home/chitiet/'.$sp->id)}}"><span style="font-family: Arial; font-size: 13px;font-weight: bold;">{{$sp->tensp}}</span> </a></h4>
                                                    <div class="ratting spr-badge-caption-none">
                                                       {{--  <span class="spr-badge" id="spr_badge_1382564331633" data-rating="0.0">
                                                           
                                                             <img src="img/rate.jpg">
                                                        </span> --}}
                                                    </div><h5 class="size grid_size d-flex">
                                                        <span class="mr-5">Size:</span>
                                                        <a class="remove_href">{{$sp->size}}</a>

                                                      
                                                    </h5><h5 class="color grid_size d-flex">
                                                        <ul class="grid-color-swatch">
                                                            <span class="mr-5">Color : {{$sp->mau}}</span>
                                                            
                                                        </ul>
                                                    </h5>
                                                </div>

                                                <div class="content-right prod_price">
                                                    <span class="money price" data-currency-usd="$400" style="font-family: Arial;font-size: 13px;font-weight: bold;text-align: left;margin-top: 3px">{{number_format($sp->gia,0,',',',')}} VN??</span>

                                                   
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
    </div> <!-- #content -->
  </div>
@stop