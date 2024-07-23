<?php

namespace App\Http\Controllers;

use App\Models\Giohang;
use Illuminate\Http\Request;

class GiohangController extends Controller
{
    public $gio_hang;
    public function __construct(){
        $this->gio_hang = new Giohang();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listGH = $this->gio_hang->getListGH();
        return view("admins.giohang.index", compact("listGH"));
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
