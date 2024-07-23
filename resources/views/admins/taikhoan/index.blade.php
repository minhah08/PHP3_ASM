@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/admins/css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admins/css/image') }}">

@endsection




@section('content')
    <h1 class="card-header">Danh sách tài khoản</h1>
    
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
            <th>Hình ảnh</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Ngày sinh</th>
            <th>Mật khẩu</th>
            <th>Chức vụ</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </thead>
        <tbody>

            @foreach ($listTK as $index => $item)
            <tr>
                <td>{{$index +1}}</td>
                <td><img src="{{ Storage::url($item->hinh_anh) }}" alt="" width="120" height="100" ></td>
                <td>{{$item->ho_ten}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->sdt}}</td>
                <td>{{$item->gioi_tinh}}</td>
                <td>{{$item->dia_chi}}</td>
                <td>{{$item->ngay_sinh}}</td>
                <td>{{$item->mat_khau}}</td>
                <td>{{$item->id_chuc_vu == 1 ? 'Sếp' : 'Nhân viên'}}</td>
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
