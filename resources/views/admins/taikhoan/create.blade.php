@extends('layout.admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/admins/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admins/css/image') }}">
@endsection




@section('content')
    <h1 class="card-header">{{ $title }}</h1>

    <div class="card-body">
        {{-- Hiển thị thông báo --}}
        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('taikhoan.store') }}" method="POST" enctype="multipart/form-data">
            {{-- Làm việc với form trong LARAVEL --}}
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" name="hinh_anh">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Họ tên</label>
                <input type="text" class="form-control" name="ho_ten"placeholder="Nhập tên">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Nhập email">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Số điện thoại</label>
                <input type="number" class="form-control" name="sdt" placeholder="Nhập số điện thoại">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Giới tính</label>
                <select name="gioi_tinh" id="" class="form-control">
                    <option selected>Chọn giới tính</option>
                    <option value="0">Nam</option>
                    <option value="1">Nữ</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" name="dia_chi">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Ngày sinh</label>
                <input type="date" class="form-control" name="ngay_sinh">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Mật khẩu</label>
                <input type="text" class="form-control" name="mat_khau">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Chức vụ</label>
                <select name="id_chuc_vu" id="" class="form-control">
                    <option selected>Chọn chức vụ</option>
                    <option value="0">Sếp</option>
                    <option value="1">Nhân viên</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Trạng thái</label>
                <select name="id_trang_thai" id="" class="form-control">
                    <option selected>Chọn trạng thái</option>
                    <option value="0">Ẩn</option>
                    <option value="1">Hiện</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <a href="/taikhoan" class="btn btn-info">Quay lại</a>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </div>
@endsection
