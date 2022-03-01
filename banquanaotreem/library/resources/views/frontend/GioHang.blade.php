@extends('frontend.Master')
@section('title','Giỏ Hàng')
@section('main')
<script type="text/javascript">
 function updateCart(qty,rowId)
	{
		$.get(
			'{{asset('cart/update')}}',
			{qty:qty, rowId:rowId},
			function(){
				location.reload();
			}
			);
       
	}
</script>
<div class="page-banner-section section" style="background-image: url(//cdn.shopify.com/s/files/1/0017/9440/8561/files/hero-1_6e6124c9-278a-46fa-8e71-8664cba4d26b.jpg?v=1533461483);">
  <div class="container">
    <div class="row">
      <div class="page-banner-content col">
        <h1 style="color: #1a161e; font-family: Arial">Giỏ Hàng Của Bạn</h1><ul class="page-breadcrumb">
  <li>
    <a href="{{asset('home')}}" title="Back to the home page">Home</a>
  </li>
  <li>
    <span>Giỏ Hàng Của Bạn</span>

  </li>
</ul></div>
    </div>
  </div>
</div>
<main role="main">
    <div id="shopify-section-cart-template" class="shopify-section">
        <div class="page-section section mt-100 mt-md-70 mt-sm-70 mt-xs-50 mb-60 mb-md-30 mb-sm-30 mb-xs-10">
            <div class="container">
            	@if(Cart::count()>=1)
                <form action="" method="post" enctype="multipart/form-data" novalidate="">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart-table table-responsive mb-40">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Ảnh SP</th>
                                            <th class="pro-title">Tên SP</th>
                                            <th class="pro-price">Giá</th>
                                            <th class="pro-quantity">Số Lượng</th>
                                            <th class="pro-subtotal">Tổng Tiền</th>
                                            <th class="pro-remove">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($items as $cart)
                                        <tr>
                                            <td class="pro-thumbnail">
                                                <a href="#"><img src="{{asset('public/frontend/img/'.$cart->options->img)}}"alt=""></a>
                                            </td>
                                            <td class="pro-title" ><a href="#"><span style="font-family: Arial;font-weight: bold;">{{$cart->name}}</span></a></td>
                                            <td class="pro-price"><span class="amount"><span class="money" data-currency-usd="$244.00" style="font-family: Arial;font-weight: bold;">{{number_format($cart->price,0,',',',')}}</span></span>
                                            </td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty">
                                                    <input type="number" name="" value="{{$cart->qty}}" onchange="updateCart(this.value,'{{$cart->rowId}}')"  min="1" max="10">
                                                </div>
                                            </td>
                                            <td class="pro-subtotal"><span class="money" data-currency-usd="$244.00" style="font-family: Arial;font-weight: bold;">{{number_format($cart->price*$cart->qty,0,',',',')}}</span></td>
                                            <td class="pro-remove"><a href="{{asset('cart/delete/'.$cart->rowId)}}">×</a></td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-12">
                            
                           
           <div class="col-lg-8 col-md-7 col-12">
            <div class="cart-buttons mb-30">
                               
                                <a href="{{asset('home')}}">Mua Tiếp</a>
                            </div>
       

      </div>
                        </div>

                        <div class="col-lg-4 col-md-5 col-12">
                            <div class="cart-total fix mb-40">
                                <h3 style="font-family: Arial;margin-top: 10px;color: black; font-weight: bold;">Tổng Tiền: <span class=""><span class="" style="font-family: Arial">{{$total}} VNĐ</span></span></h3>
                                <table>
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Tổng Tiền</th>
                                            <td><span class=""><span class="" style="font-family: Arial">{{$total}} VNĐ</span></span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Thanh Toán</th>
                                            <td>
                                                <strong><span class="amount"><span class="money" data-currency-usd="" style="font-family: Arial">{{$total}} VNĐ</span></span></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="proceed-to-checkout section mt-30" >
                                    <a href="{{asset('cart/checkout')}}">Đặt Hàng</a>
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                </form>
                @else

      <div id="shopify-section-cart-template" class="shopify-section" style="margin-top: -133px;  margin-bottom: -80px;">
      	<div class="page-section section mt-100 mt-md-70 mt-sm-70 mt-xs-50 mb-60 mb-md-30 mb-sm-30 mb-xs-10">
  <div class="container"><div class="cart-buttons mb-30 empty-cart-page">
      <h4 style="font-family: Arial">Giỏ hàng của bạn rỗng!.</h4>
      <a href="{{asset('home')}}" class="mt-10">Tiếp Tục</a>
    </div></div>
</div>

</div>
   
                @endif
            </div>
        </div>

    </div>
</main>
@stop