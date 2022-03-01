    @extends('backend.master')
    @section('title','Quản Lý Hoá Đơn Bán')
    @section('main')
    
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">
                    <div class="modal-content">
                       
               
                        <div class="modal-header bg-info">
                           
                            <h6 class="modal-title">Sửa Hóa Đơn Bán</h6>
                        </div>

                        <div class="modal-body">
                            <form method="post" enctype="multipart/form-data"  >
                               
                    <div class="modal-body">
                            <fieldset>
                                
                                <div class="form-group">
                                    <label><b>Họ Tên KH:</b></label>                                    
                                    <input type="text" name="txtTen" style="border-radius: 3px; border: 1px solid #ddd; font-size: 13px; color: #333333; padding: 7px 12px; margin-left: 13px; width: 350px; height: 36px; margin-right: 60px " value="{{$hoadonban->hotenkh}}" />
                                    <label><b>Địa Chỉ KH:</b></label>
                                    <input type="text" name="txtDC"   style="border-radius: 3px; border: 1px solid #ddd; font-size: 13px; color: #333333; padding: 7px 12px; margin-left: 13px; width: 350px; height: 36px;margin-left: 23px; " value="{{$hoadonban->diachi}}" >
                                </div>
                                
                                <div class="form-group">
                                    <label><b>Số ĐTKH:</b></label>
                                    <input type="text" name="txtSDT" style="border-radius: 3px; border: 1px solid #ddd; font-size: 13px; color: #333333; padding: 7px 12px; margin-left: 23px; width: 350px; height: 36px; margin-right: 60px " value="{{$hoadonban->sdt}}">
                                     <label><b>Email KH:</b></label>
                                    <input type="text" name="txtEmail"  style="border-radius: 3px; border: 1px solid #ddd; font-size: 13px; color: #333333; padding: 7px 12px; margin-left: 33px; width: 350px; height: 36px " value="{{$hoadonban->email}}" >
                                </div>
                                
                                <div class="form-group">
                                    <label><b>Ngày nhập</b></label>
                                    <input type="text" name="txtDate"  style="border-radius: 3px; border: 1px solid #ddd; font-size: 13px; color: #333333; padding: 7px 12px; margin-left: 18px; width: 350px; height: 36px; margin-right: 60px " value="{{$hoadonban->ngayban}}" >
                                    <label><b>Tổng Tiền</b></label>
                                    <input type="text" name="txtTT"  style="border-radius: 3px; border: 1px solid #ddd; font-size: 13px; color: #333333; padding: 7px 12px; margin-left: 33px; width: 350px; height: 36px " value="{{$hoadonban->tongtien}}" >
                                </div>

                                
                                <div class="form-group">
                                    <label><b>Trạng Thái</b></label>
                                    <input type="radio" name="rd1" value="1" style="margin-left: 21px;" @if($hoadonban->trangthai==1) checked @endif>Duyệt
                                    <input type="radio" name="rd1" value="0" @if($hoadonban->trangthai==0) checked @endif>Chưa Duyệt 
                                </div>
                            </fieldset>
                        </div>

                        <div class="modal-footer">

                            <input type="submit" name="Sua"  value ="Cập Nhật" Class="btn btn-info"  />
                            <a  href="{{asset('admin/home')}}" Class="btn btn-danger">Hủy Bỏ</a>
                        </div>

                        
                    </div>
                </div>
            </div>
                        {{csrf_field()}}
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
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
       
    </script>
    
@stop