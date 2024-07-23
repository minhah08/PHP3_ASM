

@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/admins/css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admins/css/image') }}">

@endsection




@section('content')
    <h1 class="card-header">Thêm mới sản phẩm</h1>
    
<div class="card-body">
{{-- Hiển thị thông báo --}}
@if(session('success'))
<div class="alert alert-success mt-3">
    {{session('success')}}
</div>
@endif
<form action="{{route('sanpham.store')}}" method="POST" enctype="multipart/form-data">
  {{-- Làm việc với form trong LARAVEL --}}
  @csrf
  <div class="mb-3">
      <label for="" class="form-label">Hình ảnh</label>
      <input type="file" class="form-control" name="hinh_anh">
    </div>
  <div class="mb-3">
      <label for="" class="form-label">Tên sản phẩm</label>
      <input type="text" class="form-control" name="ten_san_pham"placeholder="Nhập tên sản phẩm">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Giá</label>
      <input type="number" class="form-control" name="gia" placeholder="Nhập giá">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Số lượng</label>
      <input type="number" class="form-control" name="so_luong" placeholder="Nhập số lượng">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Ngày nhập hàng</label>
      <input type="date" class="form-control" name="ngay_nhap_hang" >
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Danh mục</label>
      <select name="id_danh_muc" id="" class="form-control">
          <option selected>Chọn danh mục</option>
          <option value="1">Adidas</option>
          <option value="2">Vans</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Mô tả</label>
      <input type="" class="form-control" name="mo_ta" placeholder="Nhập mô tả">
    </div>
  
    <button type="submit" class="btn btn-primary">Thêm mới</button>
    <a href="/sanpham" class="btn btn-info">Quay lại</a>
    <button type="reset" class="btn btn-warning">Reset</button>
</form>
</div>



@endsection
