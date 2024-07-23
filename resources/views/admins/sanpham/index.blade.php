@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/admins/css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admins/css/image') }}">

@endsection




@section('content')
    <h1 class="card-header">Danh sách sản phẩm</h1>
    
<div class="card-body">
    <a href="{{route('sanpham.create')}}"><button type="submit" class="btn btn-info">Thêm mới</button></a>
{{-- Hiển thị thông báo --}}
@if(session('success'))
<div class="alert alert-success mt-3">
    {{session('success')}}
</div>
@endif
    <table class="table table-striped table-hover ">
        <thead class="table-info">
            <th>STT</th>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Ngày nhập hàng</th>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
            <th>Hành động</th>
        </thead>
        <tbody>

            @foreach ($sanphams as $index => $item)
            <tr>
                <td>{{$index +1}}</td>
                <td><img src="{{ Storage::url($item->hinh_anh) }}" alt="" width="120" height="100" ></td>
                <td>{{$item->ten_san_pham}}</td>
                <td>{{$item->gia}}</td>
                <td>{{$item->so_luong}}</td>
                <td>{{$item->ngay_nhap_hang}}</td>
                <td>{{$item->id_danh_muc == 1 ? 'Adidas' : 'Vans'}}</td>
                <td>{{$item->mo_ta}}</td>
                <td>
                    <button class="btn btn-warning">Sửa</button>
                    <button class="btn btn-danger" onclick="return confirm('bạn chắc chắn xóa không?');">Xóa</button>

                </td>

            </tr>
            
            @endforeach
            
        </tbody>

    </table> 
</div>



@endsection
