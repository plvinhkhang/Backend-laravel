
    @extends('backend.master')
    @section('title','Quản Lý Hóa Đơn Bán')
    @section('main')
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Bảng</span> - Hóa Đơn Bán</h4>
        </div>

        <div class="heading-elements">
            {{-- <div class="heading-btn-group">
                <a class="btn btn-success" data-toggle="modal" data-target="#myModal" style="width: 70px; text-align: center"><b>Thêm</b></a>
                <a class="btn btn-success" data-toggle="modal" data-target="#myModal1" href="" style="width: 70px; text-align: center"><b>Import</b></a>
                <a class="btn btn-success" href="{{asset('admin/product/xuat')}}" style="width: 70px; text-align: center"><b>Export</b></a>
            </div> --}}
           
        </div>
            
            

            <div class="breadcrumb-line" style="width: 103.7%; margin-left: -20px;">
                <ul class="breadcrumb">
                    <li><a href="{{asset('admin/home')}}"><i class="icon-home2 position-left"></i>Home</a></li>
                    <li><a href="datatable_basic.html">Bảng  Hóa Đơn Bán</a></li>
                </ul>

                <ul class="breadcrumb-elements">
                    <li><a href="#"><i class="icon-comment-discussion position-left"></i>Support</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear position-left"></i> Settings
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
            <h5 class="panel-title">Danh sách hóa đơn bán</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <table class="table datatable-basic" id="KH">
            <thead>
                <tr>

                     <th>STT</th>
                    <th>Tên KH</th>
                    <th>Địa Chỉ</th>
                    <th>Email</th>
                    <th>Số ĐT</th>
                    <th>Ngày Bán</th>
                    <th>Tổng Tiền(VNĐ)</th>  
                    <th>Trạng Thái</th>                                    
                    <th>Chi Tiết</th>
                </tr>
            </thead>
             <tbody>
                @php 
                      $i=0;
                     
                      @endphp
                  @foreach ($hdb as $key => $bill)
                       @php 
                     
                      $i++ ;
                      @endphp
                        <tr>
                            
                            <td>{{$i}}</td>
                            <td>{{$bill->hotenkh}}</td>
                            <td>{{$bill->diachi}}</td>
                            <td>{{$bill->email}}</td>
                            <td>{{$bill->sdt}}</td> 
                             <td>{{$bill->ngayban}}</td>                          
                            <td>{{number_format($bill->tongtien,0,',',',')}}</td>
                           <td>@if($bill->trangthai==1) <span class="text-success">Đã duyệt</span> @else  <span class="text-danger">Chưa duyệt</span>@endif</td>
                            <td style="text-align: center">
                                <a href="{{asset('admin/hoadonban/chitiet/'.$bill->id_hdb)}}">Chi Tiết</a>
                              
                            </td>
                        </tr>
                   @endforeach

            </tbody>
        </table>
    </div>
    </div>
   
    
    @stop
