<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function actions(){

        return view('Administrator.actions');
    }
    
    public function getReports(){

        return view('Administrator.getReports');
    }

    public function addProduct(){

        return view('Administrator.addProduct');


    }


}
