<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
            $products = Product::all();

            // dd($products);

        return view('dashboards/home',['products'=>$products]);
    }
    public function dashboard()
    {
        return view('dashboards/dashboard');
    }

    // public function index()
    // {
    //     return view('dashboards/home');
    // }
}
