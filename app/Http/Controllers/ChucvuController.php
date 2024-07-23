<?php

namespace App\Http\Controllers;

use App\Models\Chucvu;
use Illuminate\Http\Request;

class ChucvuController extends Controller
{
    public $chuc_vu;

    public function __construct(){
        $this->chuc_vu = new Chucvu();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listCV = $this->chuc_vu->getAllCV();
        return view("admins.chucvu.index", ["list"=> $listCV]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm chức vụ";
        return view("admins.chucvu.create", ["title"=> $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataInsert = [
            'ten_chuc_vu'=> $request->ten_chuc_vu,
        ];
        $this->chuc_vu->createCV($dataInsert);
        return redirect()->route('chucvu.index')->with('success','Thêm mới thành công');
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
