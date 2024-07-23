<?php

namespace App\Http\Controllers;

use App\Models\Donhang;
use Illuminate\Http\Request;

class DonhangController extends Controller
{
    public $don_hang;
    public function __construct(){
        $this->don_hang = new Donhang();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listDH = $this->don_hang->getListDH();
        return view("admins.donhang.index", compact("listDH"));
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
