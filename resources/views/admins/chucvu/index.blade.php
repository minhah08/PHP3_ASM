@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/admins/css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admins/css/image') }}">

@endsection




@section('content')
    <h1 class="card-header">Danh sách chức vụ</h1>
    
<div class="card-body">
    <a href="{{route('chucvu.create')}}"><button type="submit" class="btn btn-info">Thêm mới</button></a>
{{-- Hiển thị thông báo --}}
@if(session('success'))
<div class="alert alert-success mt-3">
    {{session('success')}}
</div>
@endif
    <table class="table table-striped table-hover ">
        <thead class="table-info">
            <th>STT</th>
            <th>Tên chức vụ</th>
            <th>Hành động</th>
        </thead>
        <tbody>

            @foreach ($list as $index => $item)
            <tr>
                <td>{{$index +1}}</td>
                <td>{{$item->ten_chuc_vu}}</td>
                
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
