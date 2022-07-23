<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductBid;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * @return view
     */
    public function show()
    {
        $products = Product::all();
        return view("home",['products' => $products]);
    }

    /**
     * @return view
     */
    public function showDetail($id){
        $product = Product::find($id);
        return view("productDetail",['product' => $product]);
    }

    /**
     * @return view
     */
    public function showProductBid(Request $request){
        $input = $request->all();
        $product = Product::find($input['id']);
        return view("productBid",['product' => $product]);
    }

}
