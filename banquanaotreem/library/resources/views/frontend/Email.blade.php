<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    

<div class="container">
        <div id="content">
            <div id="wrap-inner">
            <div id="complete">
              <p class="info" >Quý khách đã đặt hàng thành công!</p>
              
              <p style="color: black; text-align: justify;">• Sản phẩm của Quý khách sẽ được chuyển đến Địa có trong phần Thông tin Khách hàng của chúng tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.</p>
              <p style="color: black; text-align: justify;">• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng</p>
              <p style="color: black; text-align: justify;">• Trụ sở chính:  Lý Thường Kiệt- Yên Mỹ- Hưng Yên</p>
              <p style="color: black; text-align: justify;">Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</p>
            </div>
           
                                       
                                    <!-- end one item -->
                                   
                           
          </div>
           {{--  <div class="row">
                        <div class="col-12">
                            <div class="cart-table table-responsive mb-40">
                                <table cellpadding="5px" cellspacing="0" border="1px solid">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Ảnh SP</th>
                                            <th class="pro-title">Tên SP</th>
                                            <th class="pro-price">Giá</th>
                                            <th class="pro-quantity">Số Lượng</th>
                                            <th class="pro-subtotal">Tổng Tiền</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($info as $cart)
                                        <tr>
                                            <td class="pro-thumbnail">
                                                <a href="#"><img src="{{asset('public/frontend/img/'.$cart->options->img)}}"alt=""></a>
                                            </td>
                                            <td class="pro-title">{{$cart->name}}</td>
                                            <td class="pro-price"><span class="amount"><span class="money" data-currency-usd="$244.00">{{number_format($cart->price,0,',','.')}}</span></span>
                                            </td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty">
                                                    {{$cart->qty}}
                                                </div>
                                            </td>
                                            <td class="pro-subtotal"><span class="money" data-currency-usd="$244.00">{{number_format($cart->price*$cart->qty,0,',','.')}}</span></td>
                                            
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-12">
        </div> 
    </div> --}} <!-- .container -->

</body>
</html>