@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/admins/css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admins/css/image') }}">

@endsection




@section('content')
    <h1 class="card-header">Danh sách bình luận</h1>
    
<div class="card-body">
    <a href="{{route('taikhoan.create')}}"><button type="submit" class="btn btn-info">Thêm mới</button></a>
{{-- Hiển thị thông báo --}}
{{-- @if(session('success'))
<div class="alert alert-success mt-3">
    {{session('success')}}
</div>
@endif --}}
    <table class="table table-striped table-hover ">
        <thead class="table-info">
            <th>STT</th>
            <th>Tên tài khoản</th>
            {{-- <th>Tên sản phẩm</th> --}}
            <th>Nội dung</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </thead>
        <tbody>

            @foreach ($list as $index => $item)
            <tr>
                <td>{{$index +1}}</td>
                <td>{{$item->ho_ten}}</td>
                {{-- <td>{{$item->ten_san_pham}}</td> --}}
                <td>{{$item->noi_dung}}</td>  
                <td>{{$item->trang_thai == 1 ? 'Hiển thị' : 'Ẩn'}}</td>
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
