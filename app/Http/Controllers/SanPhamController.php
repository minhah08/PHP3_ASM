<?php

namespace App\Http\Controllers;

use App\Models\Sanpham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public $san_pham;

     public function __construct(){
        $this->san_pham = new Sanpham();
     }
    public function index()
    {
        $Listsanpham = $this->san_pham->getAll();
        return view("admins.sanpham.index", ['sanphams'=>$Listsanpham]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm sản phẩm";
        return view("admins.sanpham.create", ["title"=> $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // xử lý ảnh
        if ($request->hasFile("hinh_anh")){
            $filename = $request->file("hinh_anh")->store('uploads/sanpham', 'public');
        }else{
            $filename = null;
        }
        $dataInsert = [
            'hinh_anh'=> $filename,
            'ten_san_pham'=> $request->ten_san_pham,
            'gia'=> $request->gia,
            'so_luong'=> $request->so_luong,
            'ngay_nhap_hang'=> $request->ngay_nhap_hang,
            'id_danh_muc'=> $request->id_danh_muc,
            'mo_ta'=> $request->mo_ta,
        ];
        $this->san_pham->createProduct($dataInsert);

        return redirect()->route('sanpham.index')->with('success','Thêm sản phẩm thành công');
        //  if($request->isMethod('post')){

        //     $params = $request->post();
        //     unset($params['_token']);
 
        //     $this->san_pham->createProduct($params);

        //     return redirect()->route('sanpham.index')->with('success','Thêm sản phẩm thành công');

        // }
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

    public function danhmuc(){
        $Listsanpham = $this->san_pham->getAll();
        return view("admins.danhmuc.index", ['sanphams'=>$Listsanpham]);
    }
}
