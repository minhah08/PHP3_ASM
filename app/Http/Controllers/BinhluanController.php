<?php

namespace App\Http\Controllers;

use App\Models\Binhluan;
use Illuminate\Http\Request;

class BinhluanController extends Controller
{
    public $binh_luan;

    public function __construct(){
        $this->binh_luan = new Binhluan();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listBL = $this-> binh_luan -> getAllBL();
        return view("admins.binhluan.index", ["list"=> $listBL]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
