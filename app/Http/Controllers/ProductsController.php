<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request){
        $getProducts = Products::select('*')->get();
        if(!$getProducts){
            return response()->json([
                "status" => true,
                "code"  => 200,
                "msg" => "RecordNotFound!",
                "data" => []
            ], 200);
        }
        
        $res = [
            "status" => true,
            "code"  => 200,
            "data" => $getProducts
        ];
        return response()->json($res, 200);
    }
}
