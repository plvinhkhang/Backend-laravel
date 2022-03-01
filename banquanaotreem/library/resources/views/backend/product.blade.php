
@extends('backend.master')
@section('title','Quản Lý Sản Phẩm')
@section('main')
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Bảng</span> - Sản Phẩm</h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
                <a class="btn btn-success" data-toggle="modal" data-target="#myModal" style="width: 70px; text-align: center"><b>Thêm</b></a>
                <a class="btn btn-success" data-toggle="modal" data-target="#myModal1" href="" style="width: 70px; text-align: center"><b>Import</b></a>
                <a class="btn btn-success" href="{{asset('admin/product/xuat')}}" style="width: 70px; text-align: center"><b>Export</b></a>
            </div>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->

                    <div class="modal-content" style="width: 150%;margin-left: -100px;">
                        <div class="modal-header bg-info">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h6 class="modal-title">Thêm sản phẩm</h6>
                        </div>

                        <div class="modal-body">
                            <form method="post" enctype="multipart/form-data" action="{{asset('admin/product')}}">
                                <div class="row row-padding-20 pro_baseForm">
                                    <div class="col-md-6 addPro-left">
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Tên SP</label>
                                            <div class="form-wrap">
                                                <input type="text" name="txtTen"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Tên sản phẩm" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>

                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Giá Tiền</label>
                                            <div class="form-wrap">
                                                <input type="text" name="txtGia"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Giá sản phẩm(VNĐ)" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Số Lượng</label>
                                            <div class="form-wrap">
                                                <input type="text" name="txtSL"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Số lượng sản phẩm" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Màu sắc</label>
                                            <div class="form-wrap">
                                                <input type="text" name="txtMau"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Màu sắc sản phẩm" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Kích Cỡ</label>
                                            <div class="form-wrap">

                                                <select class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" required="" name="txtSize" style="width: 350px;margin-top: -35px; margin-left: 80px;">
                                                    <option value="">Chọn kích cỡ</option>
                                                    <option value="9-11kg">9-11kg</option>
                                                    <option value="11-13kg">11-13kg</option>
                                                    <option value="13-15kg">13-15kg</option>
                                                    <option value="15-17kg">15-17kg</option>
                                                    <option value="17-19kg">17-19kg</option>
                                                    <option value="19-22kg">19-22kg</option>
                                                    <option value="22-25kg">22-25kg</option>
                                                    <option value="25-30kg">25-30kg</option>
                                                    <option value="30-33kg">30-33kg</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 addPro-right">
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Mã Loại SP</label>
                                            <div class="form-wrap">

                                                <select class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" name="txtLSP" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                                    @foreach($catelist as $cate)
                                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Chất Liệu</label>
                                            <div class="form-wrap">
                                                <input type="text" name="txtCL"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Chất liệu sản phẩm" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            </div>
                                        </div>
                                        <div class="form-group wrap-icon-help">
                                            <label class="form-label control-label ng-binding" style="font-weight: bold;">Ảnh SP</label>
                                            <div class="form-wrap">

                                             <input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                             <img id="avatar" class="thumbnail" style="margin-left: 75px;    margin-top: -33px;" width="150px" src="img1/upload.jpg">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="row row-padding-20 pro_baseForm">
                                <label class="form-label control-label ng-binding" style="font-weight: bold; margin-left: 11px">Mô Tả
                                    <a tabindex="-1" class="help icon" kv-tooltip="" data-toggle="tooltip" data-placement="right" data-original-title="Mã hàng hóa là thông tin duy nhất"></a>
                                </label>
                                <div class="form-wrap" style="width: 867px; margin-left: 10px;">
                                    <textarea class="ckeditor" required name="mota"></textarea>
                                    <script type="text/javascript">
                                        var editor = CKEDITOR.replace('mota', {
                                            language: 'vi',
                                            filebrowserImageBrowseUrl: '../editor/ckfinder/ckfinder.html?Type=Image',
                                            filebrowserFlashBrowseUrl: '../editor/ckfinder/ckfinder.html?Type=Flash',
                                            filebrowserImageUploadUrl: '../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                            filebrowserFlashUploadUrl: '../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

                                        });
                                    </script>
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
        <div id="suasp" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content" style="width: 150%;margin-left: -100px;">
                    <div class="modal-header bg-info">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h6 class="modal-title">Sửa sản phẩm</h6>
                    </div>

                    <div class="modal-body">

                        <form method="post" enctype="multipart/form-data" action="{{asset('admin/product/edit')}}" >
                           {{csrf_field()}}

                           <input type="hidden" name="id"  id="id">

                           <div class="row row-padding-20 pro_baseForm">
                            <div class="col-md-6 addPro-left">
                                <div class="form-group wrap-icon-help">
                                    <label class="form-label control-label ng-binding" style="font-weight: bold;">Tên SP</label>
                                    <div class="form-wrap">
                                        <input type="text" id="ten" name="ten"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Tên sản phẩm" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                    </div>
                                </div>

                                <div class="form-group wrap-icon-help">
                                    <label class="form-label control-label ng-binding" style="font-weight: bold;">Giá Tiền</label>
                                    <div class="form-wrap">
                                        <input type="text" name="gia" id="gia"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Giá sản phẩm(VNĐ)" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                    </div>
                                </div>
                                <div class="form-group wrap-icon-help">
                                    <label class="form-label control-label ng-binding" style="font-weight: bold;">Số Lượng</label>
                                    <div class="form-wrap">
                                        <input type="text" name="soluong" id="soluong"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Số lượng sản phẩm" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                    </div>
                                </div>
                                <div class="form-group wrap-icon-help">
                                    <label class="form-label control-label ng-binding" style="font-weight: bold;">Màu sắc</label>
                                    <div class="form-wrap">
                                        <input type="text" name="mau" id="mau" class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Màu sắc sản phẩm" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                    </div>
                                </div>
                                <div class="form-group wrap-icon-help">
                                    <label class="form-label control-label ng-binding" style="font-weight: bold;">Kích Cỡ</label>
                                    <div class="form-wrap">

                                        <select class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched"  required="" name="kichthuoc" style="width: 350px;margin-top: -35px; margin-left: 80px;">
                                            <option value="" id="size"></option>
                                            <option value="9-11kg">9-11kg</option>
                                            <option value="11-13kg">11-13kg</option>
                                            <option value="13-15kg">13-15kg</option>
                                            <option value="15-17kg">15-17kg</option>
                                            <option value="17-19kg">17-19kg</option>
                                            <option value="19-22kg">19-22kg</option>
                                            <option value="22-25kg">22-25kg</option>
                                            <option value="25-30kg">25-30kg</option>
                                            <option value="30-33kg">30-33kg</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 addPro-right">
                                <div class="form-group wrap-icon-help">
                                    <label class="form-label control-label ng-binding" style="font-weight: bold;">Mã Loại SP</label>
                                    <div class="form-wrap">

                                        <select class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" id="loai" name="loai" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                            @foreach($catelist as $cate)
                                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group wrap-icon-help">
                                    <label class="form-label control-label ng-binding" style="font-weight: bold;">Chất Liệu</label>
                                    <div class="form-wrap">
                                        <input type="text" name="chatlieu" id="chatlieu"  class="iptCode tabBut_0 form-control ng-pristine ng-valid ng-empty ng-touched" placeholder="Chất liệu sản phẩm" required="" style="width: 350px;margin-top: -35px; margin-left: 80px;}">
                                    </div>
                                </div>
                                <div class="form-group wrap-icon-help">
                                    <label class="form-label control-label ng-binding" style="font-weight: bold;">Ảnh SP</label>
                                    <div class="form-wrap">

                                        <input id="anh" type="file" name="anh" class="form-control hidden" onchange="changeImg1(this)">
                                        <img id="image" class="thumbnail" style="margin-left: 75px;    margin-top: -33px;" width="150px" src="img1/upload.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-padding-20 pro_baseForm">
                            <label class="form-label control-label ng-binding" style="font-weight: bold; margin-left: 11px">Mô Tả

                            </label>
                            <div class="form-wrap" style="width: 867px; margin-left: 10px;">
                                <textarea name="motasp" id="motasp"></textarea>

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
    <!-- hết modal sửa -->
    <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h6 class="modal-title">Nhập sản phẩm từ File dữ liệu</h6>
                </div>

                <div class="modal-body">
                    <form method="post" action="{{asset('admin/product/import')}}" enctype="multipart/form-data">

                        <div class="form-wrapper">
                            <div class="bd-bt-poup bd-bt-poup ng-binding" style="border-bottom: 1px solid #d9d9d9; padding-bottom: 7px;   margin-bottom: 15px; color: #2e2e2e; font-size: 14px ">
                                Xử lý dữ liệu (Tải về File mẫu:
                                <a ng-href="/Template/MauFileSanPham.xlsx" title="Download" class="ng-binding" href="/Template/MauFileSanPham.xlsx">Excel File</a>):
                            </div>
                            <div class="bd-bt-poup bd-bt-poup ng-binding" style="border-bottom: 1px solid #d9d9d9; padding-bottom: 7px;   margin-bottom: 15px; color: #2e2e2e; font-size: 14px ">

                                <input type="file" name="file_excel">
                            </div>
                            <div class="warning-content" style="color: #7b5e2a;background-color: #f9f9e0; padding: 10px; border: 1px solid transparent;  border-radius: 3px; font-style: italic;">
                                <h5 class="title-alert ng-binding"><img src="img1/warning.png"> Lưu ý</h5>
                                <p class="ng-binding">Hệ thống cho phép nhập tối đa 5.000 mặt hàng mỗi lần từ file .

                                </p>
                                <p class="ng-binding">Mã hàng chứa kí tự đặc biệt (@, #, $, *, /, -, _,...) và chữ có dấu sẽ gây khó khăn khi In và sử dụng mã vạch.</p>
                                <p class="ng-binding">Với hình ảnh hàng hóa, hệ thống sẽ lưu trữ và hiển thị theo link hình ảnh được nhập trên file excel (không lưu trữ ảnh).</p>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <input name="submit1" type="submit" class="btn btn-info" value="Thực Hiện" />
                    </div>
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
    <!-- hết modal import -->
</div>



<div class="breadcrumb-line" style="width: 103.7%; margin-left: -20px;">
    <ul class="breadcrumb">
        <li><a href="{{asset('admin/home')}}"><i class="icon-home2 position-left"></i>Home</a></li>
        <li><a href="datatable_basic.html">Bảng  Sản Phẩm</a></li>
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
        <h5 class="panel-title">Danh sách sản phẩm</h5>
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
               <th>Tên SP</th>
               <th>Giá(VNĐ)</th>
               <th>Số Lượng</th>
               <th>Màu sắc</th>
               <th>Size</th>
               <th>Chất Liệu</th>
               <th>Ảnh</th>                   
               <th>Chức Năng</th>
           </tr>
       </thead>
       <tbody>
        <?php $stt=0; ?>
        @foreach ($productlist as $key => $prod)
        <?php $stt++ ?>     
        <tr>

            <td>{{$stt}}</td>
            <td>{{$prod->tensp}}</td>
            <td>{{number_format($prod->gia,0,',',',')}}</td>
            <td>{{$prod->soluong}}</td>
            <td>{{$prod->mau}}</td>                            
            <td>{{$prod->size}}</td>
            <td>{{$prod->chatlieu}}</td>
            <td>
                <img src="{{asset('public/frontend/img/'.$prod->img)}}" style="width: 100px" />
            </td>


            <td style="text-align: center">

                <a data-toggle="modal" data-name="{{$prod->tensp}}" data-loai="{{$prod->id_type}}" data-gia="{{$prod->gia}}" data-mau="{{$prod->mau}}" data-mota="{{$prod->mota}}"  data-soluong="{{$prod->soluong}}" data-id="{{$prod->id_sp}}" data-chatlieu="{{$prod->chatlieu}}" data-size="{{$prod->size}}" data-target="#suasp"  type="button" href="#" style="margin-right: 5px" >
                    <img src="img1/if_edit_2199097%20(1).png" style="float: left; width: 24px;" />
                </a>

                <a href="{{asset('admin/product/delete/'.$prod->id_sp)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                    <img src="img1/if_delete_370086.png" style="width: 24px; margin-top: 0px; " />
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>

<script type="text/javascript">


    $('#suasp').on('show.bs.modal', function (event) {
     var button = $(event.relatedTarget) // Button that triggered the modal
     var name = button.data('name')
     var loai = button.data('loai')
     var gia = button.data('gia')
     var soluong = button.data('soluong')
     var mau = button.data('mau')
     var chatlieu = button.data('chatlieu')
     var id= button.data('id')
     var size= button.data('size')    
     var motasp= button.data('mota')   
     var modal = $(this)
     modal.find('.modal-body #ten').val(name)
     modal.find('.modal-body #loai').val(loai)
     modal.find('.modal-body #gia').val(gia)
     modal.find('.modal-body #soluong').val(soluong)
     modal.find('.modal-body #id').val(id)
     modal.find('.modal-body #mau').val(mau)
     modal.find('.modal-body #chatlieu').val(chatlieu)
     modal.find('.modal-body #size').val(size)     
     CKEDITOR.instances['motasp'].setData(motasp)
     
 });

    function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src',e.target.result);

                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function(){
            $('#avatar').click(function(){
                $('#img').click();
            });

        });
        function changeImg1(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    
                    $('#image').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function(){

            $('#image').click(function(){
                $('#anh').click();
            });
        });

        var editor1 = CKEDITOR.replace('motasp', {
          language: 'vi',
          filebrowserImageBrowseUrl: '../editor/ckfinder/ckfinder.html?Type=Image',
          filebrowserFlashBrowseUrl: '../editor/ckfinder/ckfinder.html?Type=Flash',
          filebrowserImageUploadUrl: '../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
          filebrowserFlashUploadUrl: '../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

      });

  </script>
  <script type="text/javascript" src="{{asset('public/editor/ckfinder/ckfinder.js')}}"></script>
  @stop
