<?php

namespace App\Http\Controllers;

use App\Models\Danhmuc;
use Illuminate\Http\Request;

class DanhmucController extends Controller
{
    public $danh_muc;

    public function __construct(){
       $this->danh_muc = new Danhmuc();
    }
   public function index()
   {
       $Listdanhmuc = $this->danh_muc->getAllDM();
       return view("admins.danhmuc.index", ['danhmuc'=>$Listdanhmuc]);
   }


   public function create()
    {
        $title = "Thêm danh mục";
        return view("admins.danhmuc.create", ["title"=> $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         if($request->isMethod('post')){

            $params = $request->post();
            unset($params['_token']);
 
            $this->danh_muc->createDM($params);

            return redirect()->route('danhmuc.index')->with('success','Thêm thành công');

        }
    }
}
