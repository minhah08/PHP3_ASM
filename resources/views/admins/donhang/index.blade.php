@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/admins/css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admins/css/image') }}">

@endsection




@section('content')
    <h1 class="card-header">Danh sách đơn hàng</h1>
    
<div class="card-body">
    <a href="{{route('donhang.create')}}"><button type="submit" class="btn btn-info">Thêm mới</button></a>
{{-- Hiển thị thông báo --}}
{{-- @if(session('success'))
<div class="alert alert-success mt-3">
    {{session('success')}}
</div>
@endif --}}
    <table class="table table-striped table-hover ">
        <thead class="table-info">
            <th>STT</th>
            <th>Mã đơn hàng</th>
            <th>Tên người nhận</th>
            <th>Email người nhận</th>
            <th>Sdt người nhận</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Ngày đặt</th>
            <th>Tổng tiền</th>
            <th>Ghi chú</th>
            <th>Người dùng</th>
            <th>Phương thức</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </thead>
        <tbody>

            @foreach ($listDH as $index => $item)
            <tr>
                <td>{{$index +1}}</td>
                <td>{{$item->ma_don_hang}}</td>
                <td>{{$item->ten_nguoi_nhan}}</td>
                <td>{{$item->email_nguoi_nhan}}</td>
                <td>{{$item->sdt_nguoi_nhan}}</td>
                <td>{{$item->gioi_tinh == 1 ? 'Nam' : 'Nữ'}}</td>
                <td>{{$item->dia_chi_nguoi_nhan}}</td>
                <td>{{$item->ngay_dat}}</td>
                <td>{{$item->tong_tien}}</td>
                <td>{{$item->ghi_chu}}</td>
                <td>{{$item->ho_ten}}</td>
                <td>{{$item->id_phuong_thuc == 1 ? 'Thanh toán trực tiếp' : 'Thanh toán online'}}</td>
                <td>{{$item->id_trang_thai == 1 ? 'Đang xác nhận' : 'Đã xác nhận'}}</td>
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
