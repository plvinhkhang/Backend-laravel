
    @extends('backend.master')
    @section('title','Quản Lý Hóa Đơn Nhập')
    @section('main')
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Bảng</span> - Hóa Đơn Nhập</h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
                <a class="btn btn-success" data-toggle="modal" data-target="#myModal" style="width: 70px; text-align: center"><b>Thêm</b></a>
                
                {{-- <a class="btn btn-success" href="{{asset('admin/hoadonnhap/importhdn')}}" style="width: 70px; text-align: center"><b>Import</b></a> --}}
                <a class="btn btn-success" href="{{asset('admin/hoadonnhap/export')}}" style="width: 70px; text-align: center"><b>Export</b></a>
            </div>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->

                    <div class="modal-content" style="width: 500px" >
                        <div class="modal-header bg-info">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h6 class="modal-title">Thêm hoá đơn nhập</h6>
                        </div>

                        <div class="modal-body" style="margin-left: 20px">
                            <form method="post" enctype="multipart/form-data" action="{{asset('admin/hoadonnhap')}}">
                                <div class="row row-padding-20 pro_baseForm">
                                    <div class="col-md-6 addPro-left">
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Tên NV</label>
                                            <div class="form-wrap">

                                                <select class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" name="tennv" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                                    @foreach($info as $nv)
                                                    <option value="{{$nv->id_nv}}">{{$nv->hoten}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                                                               
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Mã SP</label>
                                            <div class="form-wrap">
                                                <input type="text" name="masp"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Mã sản phẩm" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        
                                    </div>
                                     <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Ngày Nhập</label>
                                            <div class="form-wrap">
                                                <input type="text" name="ngaynhap"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Ngày Nhập" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                    <div class="col-md-6 addPro-right">
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;margin-left: -10px">Số Lượng</label>
                                            <div class="form-wrap" style="margin-left: -10px">
                                                <input type="text" name="soluong"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Số Lượng" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold; margin-left: -10px">Giá Nhập</label>
                                            <div class="form-wrap" style="margin-left: -10px">
                                                <input type="text" name="gia"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Giá Nhập" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                       {{--  <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Tổng Tiền</label>
                                            <div class="form-wrap">
                                                <input type="text" name="tongtien"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Chất liệu sản phẩm" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div> --}}
                                       
                                    </div>
                                </div>
                               
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <input name="submit" type="submit" class="btn btn-info" value="Thêm mới" />
                        </div>
                        {{csrf_field()}}
                        </form>
                    </div>

                    <!-- Hết Modal Content -->
                </div>
            </div>
            <!-- hết modal thêm -->
        </div>
            
          </div>  

            <div class="breadcrumb-line" style="width: 103.7%; margin-left: -20px;">
                <ul class="breadcrumb">
                    <li><a href="{{asset('admin/home')}}"><i class="icon-home2 position-left"></i>Home</a></li>
                    <li><a href="datatable_basic.html">Bảng Hóa Đơn Nhập</a></li>
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
            <h5 class="panel-title">Danh sách hóa đơn nhập</h5>
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
                    <th>Mã NV</th>
                    <th>Ngày Nhập</th>                    
                    <th>Tổng Tiền(VNĐ)</th>                                                       
                    <th>Chi Tiết</th>
                    <th></th>
                </tr>
            </thead>
             <tbody>
                @php 
                      $i=0;
                     
                      @endphp
                  @foreach ($hdn as $key => $bill)
                       @php 
                     
                      $i++ ;
                      @endphp
                        <tr>
                            
                            <td>{{$i}}</td>
                            <td>{{$bill->hoten}}</td>
                            <td>{{$bill->date}}</td>
                            <td>{{number_format($bill->tongtien)}}</td>
                            <td style="text-align: center">
                                <a href="{{asset('admin/hoadonnhap/chitiet/'.$bill->id_hdn)}}">
                                    <input type="button" name="" class="btn btn-primary" value="Chi Tiết" style="margin-left: -70px">
                                </a>                              
                            </td>
                            <td></td>
                        </tr>
                   @endforeach

            </tbody>
        </table>
    </div>
    </div>
   
    
    @stop
