
		
	@extends('backend.master')
	@section('title','Trang Chủ Quản Trị')
	@section('main')
	    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-default">
            <div class="page-header-content">
                <div class="page-title">
                    <h4><i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Trang chủ</span> </h4>
                    <a class="heading-elements-toggle"><i class="icon-more"></i></a>
                </div>

                <div class="heading-elements">
                </div>
            </div>

            <div class="breadcrumb-line">
                <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="icon-home2 position-left"></i>Trang chủ</a></li>
                </ul>

                <ul class="breadcrumb-elements">
                </ul>
            </div>
        </div>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content">

            <div class="row">
                <div class="col-lg-12">

                    <!-- Quick stats boxes -->
                    <div class="row">
                        <div class="col-lg-3">

                            <!-- Members online -->
                            <div class="panel bg-teal-400">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <span class="heading-text badge bg-teal-800"></span>
                                    </div>
                            
                                    <h3 class="no-margin">{{DB::table('vp_products')->count()}}</h3>
                                    Sản Phẩm
											<div class="text-muted text-size-small"><a href="{{asset('admin/product')}}" style="color: white; margin-left: 150px;">Xem tiếp</a></div>
                                </div>

                                <div class="container-fluid">
                                    <div id="members-online"></div>
                                </div>
                            </div>
                            <!-- /members online -->
                        </div>

                        <div class="col-lg-3">

                            <!-- Current server load -->
                            <div class="panel bg-pink-400">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                    </div>

                                    <h2 class="no-margin">{{DB::table('vp_categories')->count()}}</h2>
                                    Loại Sản Phẩm
											<div class="text-muted text-size-small"><a href="{{asset('admin/category')}}" style="color: white; margin-left: 150px;">Xem tiếp</a></div>
                                </div>

                                <div id="server-load"></div>
                            </div>
                            <!-- /current server load -->
                        </div>

                        <div class="col-lg-3">

                            <!-- Today's revenue -->
                            <div class="panel bg-blue-400">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="reload"></a></li>
                                        </ul>
                                    </div>

                                    <h3 class="no-margin">{{DB::table('vp_users')->count()}}</h3>
                                    <div class="text-muted text-size-large">Số Tài Khoản</div>
                                    <div class="text-muted text-size-small"><a href="#" style="color: white; margin-left: 150px;">Xem tiếp</a></div>
                                </div>

                                <div id="today-revenue"></div>
                            </div>
                            <!-- /today's revenue -->
                        </div>
                        <div class="col-lg-3">

                            <!-- Today's revenue -->
                            <div class="panel bg-orange-400">
                                <div class="panel-body">
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="reload"></a></li>
                                        </ul>
                                    </div>

                                    <h3 class="no-margin">{{DB::table('hoadonban')->count()}}</h3>
                                    Số Lượng HĐB<div class="text-muted text-size-small"><a href="{{asset('admin/hoadonban')}}" style="color: white; margin-left: 150px;">Xem tiếp</a></div>
                                </div>

                                <div id="today-revenue"></div>
                            </div>
                            <!-- /today's revenue -->
                        </div>
                    </div>
                    <!-- /quick stats boxes -->

                    <!-- Support tickets -->
                    
                    <!-- /support tickets -->
                </div>
            </div>
            <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">DANH SÁCH HÓA ĐƠN BÁN</h5>
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

                   <!--  <th>Mã SP</th> -->
                    
                    <th>STT</th>
                    <th>Tên KH</th>
                    <th>Địa Chỉ</th>
                    <th>Email</th>
                    <th>Số ĐT</th>
                    <th>Ngày Bán</th>
                    <th>Tổng Tiền</th>   
                    <th>Trạng Thái</th>                 
                    <th>Chức Năng</th>
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
                            <td style="color: red">Chưa duyệt</td>
                            <td style="text-align: center">
                                {{-- <a href="3">Chi tiết</a> --}}
                               {{--  <a href="{{asset('admin/hoadonban/edit/'.$bill->id_hdb)}}" style="margin-right: 5px">
                                    <img src="img1/if_edit_2199097%20(1).png" style="float: left; width: 24px;" />
                                </a>
                                <a href="{{asset('admin/hoadonban/delete/'.$bill->id_hdb)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                                    <img src="img1/if_delete_370086.png" style="width: 24px; margin-top: 0px; " /><!-- margin-left: 29px; -->
                                </a> --}}
                                <a href="{{asset('admin/hoadonban/chitiet/'.$bill->id_hdb)}}"><input type="button" name="btn1" value="Chi Tiết" class="btn btn-info"></a>
                            </td>
                        </tr>
                   @endforeach
            </tbody>
        </table>
    </div>
        </div>
    </div>
	<!--/.main-->
	@stop  

