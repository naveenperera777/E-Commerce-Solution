<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
  
    public function viewProduct($id){

        
        $product = Product::where('id','=',$id)->first();
        
        // dd($product->name);

        return view('Customer.product',['product'=>$product]);
    }
    
    
}
