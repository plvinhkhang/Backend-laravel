
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
        @foreach ($listproduct as $key => $prod)
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

                <a  data-target="#suasp"  type="button" href="#" style="margin-right: 5px" >
                    <img src="img1/if_edit_2199097%20(1).png" style="float: left; width: 24px;" />
                </a>

               {{--  <a href="{{asset('admin/product/delete/'.$prod->id_sp)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                    <img src="img1/if_delete_370086.png" style="width: 24px; margin-top: 0px; " />
                </a> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>


  @stop
