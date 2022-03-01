@extends('backend.master')
 @section('title','Quản Lý Nhân Viên')
  @section('main')

<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Bảng</span> - Nhân Viên</h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
                <a class="btn btn-info" data-toggle="modal" data-target="#myModal" style="width: 70px; text-align: center"><b>Thêm</b></a>
                

               
            </div>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->

                    <div class="modal-content">
                        <div class="modal-header bg-info">
                           <button ID="Button1" Text="x" class="close" data-dismiss="modal">x</button>

                            <h6 class="modal-title">Thông Tin Nhân Viên</h6>
                        </div>

                        <div class="modal-body">
                          
                        <form method="post">
                           <div class="row row-padding-20 pro_baseForm">
                                    <div class="col-md-6 addPro-left">
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Tên NV</label>
                                            <div class="form-wrap">
                                                <input type="text" name="txtTen"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Họ Tên Nhân Viên" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>

                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Ngày Sinh</label>
                                            <div class="form-wrap">
                                                <input type="text" name="ngaysinh"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Ngày Sinh" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Địa Chỉ</label>
                                            <div class="form-wrap">
                                                <input type="text" name="diachi"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Địa Chỉ" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        
                                    </div>
                                    <div class="col-md-6 addPro-right">
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold; margin-left: -9px">Email</label>
                                            <div class="form-wrap" style="margin-left: -10px">
                                                <input type="email" name="email"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Email" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold; margin-left: -10px">Số ĐT</label>
                                            <div class="form-wrap" style="margin-left: -10px">
                                                <input type="text" name="sdt"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Số Điện Thoại" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold; margin-left: -10px">Tên TK</label>
                                            <div class="form-wrap" style="margin-left: -10px">
                                                <input type="text" name="user1" id="user1"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Tên tài khoản" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold; margin-left: -10px">Mật Khẩu</label>
                                            <div class="form-wrap" style="margin-left: -10px">
                                                <input type="password" name="pass1" id="pass1"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Mật khẩu" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                       
                                    </div>
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
         <div id="suanv" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->

                    <div class="modal-content">
                        <div class="modal-header bg-info">
                           <button ID="Button1" Text="x" class="close" data-dismiss="modal">x</button>

                            <h6 class="modal-title"> Sửa Thông Tin Nhân Viên</h6>
                        </div>

                        <div class="modal-body">
                           
                        <form method="post" action="{{asset('admin/nhanvien/edit')}}">
                            <input type="hidden" name="id"  id="id">
                           <div class="row row-padding-20 pro_baseForm">
                                    <div class="col-md-6 addPro-left">
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Tên NV</label>
                                            <div class="form-wrap">
                                                <input type="text" name="ten" id="ten"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Họ Tên Nhân Viên" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>

                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Ngày Sinh</label>
                                            <div class="form-wrap">
                                                <input type="text" name="ns" id="ns"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Ngày Sinh" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Địa Chỉ</label>
                                            <div class="form-wrap">
                                                <input type="text" name="dc" id="dc"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Địa Chỉ" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        
                                    </div>
                                    <div class="col-md-6 addPro-right">
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold; margin-left: -9px">Email</label>
                                            <div class="form-wrap" style="margin-left: -10px">
                                                <input type="email" name="mail" id="mail"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Email" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold; margin-left: -10px">Số ĐT</label>
                                            <div class="form-wrap" style="margin-left: -10px">
                                                <input type="text" name="sodt" id="sodt"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Số Điện Thoại" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                       <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold; margin-left: -10px">Tên TK</label>
                                            <div class="form-wrap" style="margin-left: -10px">
                                                <input type="text" name="user" id="user" disabled=""  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Tên tài khoản" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold; margin-left: -10px">Mật Khẩu</label>
                                            <div class="form-wrap" style="margin-left: -10px">
                                                <input type="password" name="pass" id="pass"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Mật khẩu" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                        </div>
                             
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                <input name="submit" type="submit" class="btn btn-info" value="Cập Nhật" />
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

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="datatable_basic.html">Bảng Nhân Viên</a></li>
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
<div class="content">
<div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Danh sách Nhân Viên</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
             @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                <span class="glyphicon glyphicon-remove icon-remove"></span> {{$err}} <br>
                @endforeach
            </div>
            @endif

            @if(session('thongbao'))
            <div class="alert alert-success">
                <span class="glyphicon glyphicon-ok icon-oke" ></span> {{session('thongbao')}}
            </div>
            @endif
        </div>

        <table class="table datatable-basic" id="KH">
            <thead>
                <tr>

                    <th>Họ Tên</th>
                    <th>Ngày Sinh</th>
                    <th>Địa Chỉ</th>
                    <th>Email</th>
                    <th>Số Điện Thoại</th>
                    <th>Thao Tác</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($nhanvien as $nv)
            <tr>
                <td>{{$nv->hoten}}</td>
                <td>{{$nv->ngaysinh}}</td>
                <td>{{$nv->diachi}}</td>
                <td>{{$nv->email}}</td>
                <td>{{$nv->sodienthoai}}</td>
                <td>

                    <a href="{{asset('admin/nhanvien/delete/'.$nv->id_nv)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                        <img src="img1/if_delete_370086.png" style="width: 24px; margin-top: 0px; margin-left: -57px;" />
                    </a>
                    <a href="#" data-toggle="modal" data-ten="{{$nv->hoten}}" data-id="{{$nv->id_nv}}" data-ns="{{$nv->ngaysinh}}" data-dc="{{$nv->diachi}}" data-mail="{{$nv->email}}" data-sodt="{{$nv->sodienthoai}}" data-user="{{$nv->user}}" data-pass="{{$nv->password}}" data-target="#suanv"  type="button" style="margin-right: 5px" >
                        <img src="img1/if_edit_2199097%20(1).png" style="float: left; width: 24px; margin-left: 30px" />
                    </a>
                </td>
                
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
<!--/.main-->
<script type="text/javascript">
     $('#suanv').on('show.bs.modal', function (event) {
     var button = $(event.relatedTarget) // Button that triggered the modal
     var name = button.data('ten')
     var id = button.data('id')
    var ngaysinh = button.data('ns')
    var diachi = button.data('dc')
    var email = button.data('mail')
    var sodt = button.data('sodt')
    var user = button.data('user')
    var pass = button.data('pass')    
      var modal = $(this)
     modal.find('.modal-body #ten').val(name)
     modal.find('.modal-body #id').val(id)
     modal.find('.modal-body #ns').val(ngaysinh)
     modal.find('.modal-body #dc').val(diachi)
     modal.find('.modal-body #mail').val(email)
     modal.find('.modal-body #sodt').val(sodt)
      modal.find('.modal-body #user').val(user)
       modal.find('.modal-body #pass').val(pass)
    });
</script>
@stop