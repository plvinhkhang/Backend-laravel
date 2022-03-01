<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title>Hóa Đơn Xuất</title>
   {{--  <link rel="stylesheet" type="text/css" href="public/backend/Css.css">
      <link href="public/backend/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="public/backend/html5shiv.min.js"></script>
   <script type="text/javascript" src="public/backend/respond.min.js"></script> --}}

</head>
<body>
	<h3 style="text-align: center;">HÓA ĐƠN MUA HÀNG</h3>
	<table style="width: 500px">
		
			<tr>
				<td>Tên Khách Hàng:</td>
				<td>{{$hoadon->hotenkh}}</td>
			</tr>
		
			<tr>
				<td>Địa Chỉ:</td>
				<td>{{$hoadon->diachi}}</td>
			</tr>
			<tr>
				<td>Số Điện Thoại:</td>
				<td>{{$hoadon->sdt}}</td>
			</tr>
			

		
	</table>
	
	<div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="table-responsive">
                            
                            <table class="table table-bordered table-hover table-striped" cellspacing="0px" cellpadding="7px" border="1px solid">
                            <thead>
                                <tr>

                                    <th>STT</th>                    
                                    <th>Tên SP</th>
                                    <th>Giá(VNĐ)</th>
                                    <th>Số Lượng</th>
                                    <th>Ảnh</th>
                                    <th>Thành Tiền(VNĐ)</th>                               
                                   
                                </tr>
                            </thead>
                            <tbody>
                             @php 
                                  $i=0;
                                 
                                  @endphp
                              @foreach ($chitiet as $key => $item)
                                   @php 
                                 
                                  $i++ ;
                                  @endphp
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$item->tensp}}</td>
                                        <td>{{number_format($item->gia,0,',',',')}}</td>
                                        <td>{{$item->soluong}}</td>
                                        <td><img src="{{asset('public/frontend/img/'.$item->img)}}" style="width: 100px"></td>
                                        <td>{{number_format($item->thanhtien,0,',',',')}}</td>                              
                                       
                                       
                                    </tr>
                             @endforeach
                            <tr>
                                <td colspan="5"><b>Tổng tiền</b></td>
                                  
                                <td colspan="1">
                                    <b class="text-red">{{number_format($hoadon->tongtien) }} VNĐ</b>
                                </td>
                                
                            </tr>
                        </tbody>
                        
                    </table>

                       
                       
                </div>
            </div>
        </div>
       
           
    </div>
</body>
</html>