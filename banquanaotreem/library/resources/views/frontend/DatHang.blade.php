@extends('frontend.Master')
@section('title','Thông Tin Đặt Hàng')
@section('main')
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
<div class="container">
        <div id="content">
            
            <form  method="post" class="beta-form-checkout">
                <div class="row">
                    <div class="col-sm-6" style="margin-top: 40px">
                        
                        <div class="form-group">
                           <h3>Thông tin khách hàng</h3>
                        </div>
                        <div class="form-group">
                           
                            <input type="text" name ="ten" placeholder="Họ tên" required="" class="form-control" style="font-size: 16px;height: 45px;">
                        </div>
                        

                        <div class="form-group">
                            
                            <input type="email" name="email" required="" placeholder="Email" class="form-control" style="font-size: 16px;height: 45px;">
                        </div>

                        <div class="form-group">
                           
                            <input type="text" name="diachi" placeholder="Địa Chỉ" required="" class="form-control" style="font-size: 16px;height: 45px;">
                        </div>
                        

                        <div class="form-group">
                            
                            <input type="number" name="sdt" required="" class="form-control" placeholder ="Số điện thoại" style="font-size: 16px;height: 45px;">
                        </div>
                         
                        <div class="form-group">
                            
                            <textarea name="chuthich" class="form-control" placeholder="Chú Thích" style="font-size: 16px;height: 45px;"></textarea>
                        </div>
                        {{csrf_field()}}
                         
                    
                </div>
                 
                    <div class="col-sm-6" style="margin-top: 79px">
                        <div class="your-order" style="border: 1px solid #e8e8e8; padding-bottom: 35px;">
                            <div class="your-order-head" style=" height: 55px; background-color: #f8f8f8; padding: 0 40px; border-top: 1px solid #e8e8e8; border-bottom: 1px solid #e8e8e8;"><h3 style="padding-top: 13px;font-family: Arial;font-weight: bold; text-align: center;">Đơn hàng của bạn</h3></div>
                            <div class="your-order-body" style="padding: 0px 10px">
                                <div class="your-order-item" style="padding: 10px 0;border-bottom: 1px solid #f8f8f8;">
                                    <div>
                                    <!--  one item   -->
                                     
                                   
                                        <div class="media">
                                           
                                            <div class="media-body" style="margin-left: -119px;">
                                                {{-- <p class="font-large">Thông tin sản phẩm</p> --}}
                                                 @foreach($items as $item) 
                                                
                                                <table class="table-bordered table-responsive">
                               <tr>
                               	<td rowspan="4" style="border: none"><img src="{{asset('public/frontend/img/'.$item->options->img)}}" style="width: 150px; border: none; margin-left: 119px" name="img"></td>
                                    <td style="padding-left: 35px;padding-right: 50px;border: none;"><b>Tên:{{$item->name}}</b></td>

                                   </tr>
                                   <tr>
                                   	<td class="price" style="padding-left: 35px;padding-right: 50px; border: none;"><b>Đơn giá:{{number_format($item->price,0,',',',')}} VNĐ</b></td>
                                   </tr>
                                    
                                   <tr> <td style="padding-left: 35px;padding-right: 50px;border: none;"><b>Số lượng:{{$item->qty}}</b> </td></tr>
                                   <tr> 
                                   	<td class="price" style="padding-left: 35px;padding-right: 50px;border: none;"><b>Thành tiền:{{number_format($item->price*$item->qty,0,',',',')}}  VNĐ</b></td>
                                </tr>
                            </table>

                                                @endforeach
                                            </div>
                                        </div>
                                       
                                    <!-- end one item -->
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                                <div class="your-order-item" style="border: 1px solid #e8e8e8; padding-bottom: 25px; background-color: #f8f8f8;height: 64px; margin-bottom: 20px">
                                    <div class="pull-left" ><p class="your-order-f18"><h3 style="font-family: Arial;font-weight: bold;margin-left: 220px;   padding-top: 6px;">Tổng tiền: {{$total}} VNĐ</h3></p>
                                    </div>
                                    {{-- <div class="pull-right"><h3 class="color-black" style="font-family: Arial;font-weight: bold;padding-top: 17px;padding-right: 5px"> VNĐ</h3></div> --}}
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                           

                            
                            <div class="proceed-to-checkout section mt-30" >
                                    
                                    
                                    <input type="submit" name="" style="background-color: #1a161e; border: medium none;color: #fff;display: inline-block;font-size: 14px;font-weight: 600;height: 40px;line-height: 24px;padding: 8px 25px; border-radius: 50px;text-transform: uppercase;margin-left: 1041px;" value="Thanh Toán">
                                </div>
                        </div> <!-- .your-order -->
                    </div>
                </div>
           </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
@stop