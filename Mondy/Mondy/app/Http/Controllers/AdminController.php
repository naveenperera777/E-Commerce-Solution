<?php

namespace App\Http\Controllers;
use App\Product;
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

    public function storeProduct(Request $request){

		// dd($request->size);

        if ( $request->has( 'attachment' ) ) {

			$fileNameWithExt = $request->file( 'attachment' )->getClientOriginalName();
			$fileName        = pathinfo( $fileNameWithExt, PATHINFO_FILENAME );
			$extension =  $request->file( 'attachment' )->getClientOriginalExtension();
			// dd($extension);
			// $courseID        = $course->course_id;
			// $assignmentID    = $assignment->assignment_id;
			$path            = 'public/storage/Admin Uploads/Product Uploads';

			$request->file( 'attachment' )->storeAs( $path, $fileNameWithExt );

		
		$storeProduct = new Product();
		$storeProduct->name =$request->productname;
		$storeProduct->product_id =$request->productid;
		$storeProduct->brand =$request->brand;
		$storeProduct->category =$request->category;
		$storeProduct->price =$request->price;
		$storeProduct->Quantity =$request->qty;
		$storeProduct->description =$request->description;
		// $storeProduct->size =$request->size[5];
		$storeProduct->attachment=$fileName;
		$storeProduct->ext=$extension;
		$storeProduct->save();

		} else {

		
			$storeProduct = new Product();
			$storeProduct->name =$request->productname;
			$storeProduct->product_id =$request->productid;
			$storeProduct->brand =$request->brand;
			$storeProduct->category =$request->category;
			$storeProduct->price =$request->price;
			$storeProduct->Quantity =$request->qty;
			$storeProduct->description =$request->description;
			$storeProduct->size =$request->size[1];
			$storeProduct->attachment=$fileName;
			$storeProduct->save();
           
       

		}
		return redirect (route('admin-add-new-product'));

		}


	}

