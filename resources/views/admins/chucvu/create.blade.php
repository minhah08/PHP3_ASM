

@extends('layout.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/admins/css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admins/css/image') }}">

@endsection

@section('content')
    <h1 class="card-header">{{$title}}</h1>
    
<div class="card-body">
    <form action="{{route('chucvu.store')}}" method="POST">
        {{-- Làm việc với form trong LARAVEL --}}
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Tên chức vụ</label>
            <input type="text" class="form-control" name="ten_chuc_vu"placeholder="Nhập tên chức vụ">
          </div>
        
          <button type="submit" class="btn btn-primary">Thêm mới</button>
          <a href="/chucvu" class="btn btn-info">Quay lại</a>
          <button type="reset" class="btn btn-warning">Reset</button>
      </form>
</div>

@endsection
