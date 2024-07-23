<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaiKhoanController extends Controller
{

    public $tai_khoan;
    public function __construct(){
        $this->tai_khoan = new User;
     }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sách tài khoản";
        $listTK = $this->tai_khoan->getAllTK();
        return view("admins.taikhoan.index", compact("title","listTK"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới tài khoản";

       return view("admins.taikhoan.create", compact("title"));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile("hinh_anh")){
            $filename = $request->file("hinh_anh")->store('uploads/taikhoan', 'public');
        }else{
            $filename = null;
        }
        $dataInsert = [
            'hinh_anh'=> $filename,
            'ho_ten'=> $request->ho_ten,
            'email'=> $request->email,
            'sdt'=> $request->sdt,
            'gioi_tinh'=> $request->gioi_tinh,
            'dia_chi'=> $request->dia_chi,
            'ngay_sinh'=> $request->ngay_sinh,
            'mat_khau'=> $request->mat_khau,
            'id_chuc_vu'=> $request->id_chuc_vu,
            // 'id_trang_thai'=> $request->id_trang_thai,
        ];
        $this->tai_khoan->createTK($dataInsert);

        return redirect()->route('taikhoan.index')->with('success','Thêm sản phẩm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
