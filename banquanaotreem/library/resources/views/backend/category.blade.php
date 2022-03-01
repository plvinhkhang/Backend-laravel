@extends('backend.master')
 @section('title','Quản Lý Loại SP')
  @section('main')

<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Bảng</span> - Loại Sản Phẩm</h4>
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

                            <h6 class="modal-title">Thông Tin Loại Sản Phẩm</h6>
                        </div>

                        <div class="modal-body">
                            @include('error.note')
                        <form method="post">
                           
                             <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Tên Loại SP</label>
                                            <div class="form-wrap">
                                                <input type="text"  name="txtTen"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Tên loại sản phẩm" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
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
     <div id="sualsp" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->

                    <div class="modal-content">
                        <div class="modal-header bg-info">
                           <button ID="Button1" Text="x" class="close" data-dismiss="modal">x</button>

                            <h6 class="modal-title">Sửa Loại Sản Phẩm</h6>
                        </div>

                        <div class="modal-body">
                            @include('error.note')
                        <form method="post" action="{{asset('admin/category/edit')}}">
                            <input type="hidden" name="id"  id="id">
                            <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Tên Loại SP</label>
                                            <div class="form-wrap">
                                                <input type="text" id="name" name="tenloai"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Tên loại sản phẩm" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
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
            <!-- hết modal dialog -->
           
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="icon-home2 position-left"></i>Home</a></li>
            <li><a href="datatable_basic.html">Bảng Loại Sản Phẩm</a></li>
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
            <h5 class="panel-title">Danh sách loại sản phẩm</h5>
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

                    <th>Mã LSP</th>
                    <th>Tên LSP</th>
                    <th>Thao Tác</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($catelist as $cate)
            <tr>
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>

                <td>

                    <a href="{{asset('admin/category/delete/'.$cate->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                        <img src="img1/if_delete_370086.png" style="width: 24px; margin-top: 0px; margin-left: -57px;" />
                    </a>
                    <a href="#" data-toggle="modal" data-name="{{$cate->name}}" data-id="{{$cate->id}}" data-target="#sualsp"  type="button" style="margin-right: 5px" >
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
     $('#sualsp').on('show.bs.modal', function (event) {
     var button = $(event.relatedTarget) // Button that triggered the modal
     var name = button.data('name')
     var id = button.data('id')
      var modal = $(this)
     modal.find('.modal-body #name').val(name)
       modal.find('.modal-body #id').val(id)
    });
</script>
@stop