
    @extends('backend.master')
    @section('title','Quản Lý Hóa Đơn Bán')
    @section('main')
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
                    <h4><a href="{{asset('admin/hoadonban')}}"><i class="icon-arrow-left52 position-left" style="color: black"></i></a><span class="text-semibold">Bảng</span> - Chi Tiết Hóa Đơn Bán</h4>

        </div>

        <div class="heading-elements">
           
           
        </div>
            
            

            <div class="breadcrumb-line" style="width: 103.7%; margin-left: -20px;">
                <ul class="breadcrumb">
            <li><a href="{{asset('admin/home')}}"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="datatable_basic.html">Bảng Chi Tiết Hóa Đơn Bán</a></li>
        </ul>

        <ul class="breadcrumb-elements">
            <li><a href="#"><i class="icon-comment-discussion position-left"></i>Support</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-gear position-left"></i>
                    Settings
                                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-lock"></i>Account security</a></li>
                    <li><a href="#"><i class="icon-statistics"></i>Analytics</a></li>
                    <li><a href="#"><i class="icon-accessibility"></i>Accessibility</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-gear"></i>All settings</a></li>
                </ul>
            </li>
        </ul>
            </div>
        </div>
    </div>
    <!--/.main-->
     <div class="content">
         <div class="panel panel-flat">
        <div class="panel-heading">
            <div class="row">
               
                    <div class="col-md-6">

                       <div class="form-group input-group">
                            <label style="font-weight: bold">Tên khách hàng: </label>
                            {{$customerInfo->hotenkh}}
                        </div>
                        <div class="form-group input-group">
                            <label style="font-weight: bold">Địa chỉ: </label>
                            {{$customerInfo->diachi}}
                        </div>
                        <div class="form-group input-group">
                            <label style="font-weight: bold">Email: </label>
                            {{$customerInfo->email}}
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-group input-group">
                            <label style="font-weight: bold">SĐT: </label>
                            {{$customerInfo->sdt}}
                        </div>
                        <div class="form-group input-group">
                            <label style="font-weight: bold">Ngày Bán: </label>
                            {{$customerInfo->ngayban}}
                        </div>
                    </div>
                </div>
                 
                       
        </div>

        <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="table-responsive">
                            
                            <table class="table table-bordered table-hover table-striped">
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
                              @foreach ($items as $key => $item)
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
                                  
                                <td colspan="1" style="color: red"><b class="text-red">{{number_format($customerInfo->tongtien) }} VNĐ</b></td>
                                
                            </tr>
                        </tbody>
                        
                    </table>

                        <form method="post" >
                            <div style="float: right; margin-top: 20px">
                                @if($customerInfo->trangthai==1)
                            <a href="{{asset('admin/hoadonban/pdfexport/'.$customerInfo->id_hdb)}}" class="btn btn-primary btn-xs">PDF Export</a>
                             @else
                            <button type="submit"  class="btn btn-primary btn-xs" name="duyet">Duyệt</button>
                            {{--  <a href="{{asset('admin/hoadonban/duyet/{id}')}}"><input type="submit"  class="btn btn-danger btn-xs" name="duyet" value="Không Duyệt" ></a> --}}
                           @endif
                         
                            </div>
                            {{csrf_field()}}

                        </form>
                       
                </div>
            </div>
        </div>
       
           
    </div>
    </div>
    </div>
   
    
    @stop
