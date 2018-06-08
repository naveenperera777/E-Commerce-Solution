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

        if ( $request->has( 'attachment' ) ) {

			$fileNameWithExt = $request->file( 'attachment' )->getClientOriginalName();
			$fileName        = pathinfo( $fileNameWithExt, PATHINFO_FILENAME );
			// $courseID        = $course->course_id;
			// $assignmentID    = $assignment->assignment_id;
			$path            = 'public/storage/Admin Uploads/Product Uploads/';

			$request->file( 'attachment' )->storeAs( $path, $fileNameWithExt );

		// return dd($request->productname);

		$storeProduct = new Product();
		$storeProduct->name =$request->productname;
		$storeProduct->product_id =$request->productid;
		$storeProduct->attachment=$fileName;
		$storeProduct->save();

		}

		// 	$storeProduct->name    = $request->productname;
		// 	$submitAssignment->course_id     = $courseid;
		// 	$submitAssignment->assignment_id = $assignmentid;
		// 	$submitAssignment->title         = $request->title;
		// 	$submitAssignment->description   = $request->description;
		// 	$submitAssignment->attachment    = $fileName;
		// 	$submitAssignment->save();
		// } else {

		// 	$storeProduct = new Product();
		// 	$storeProduct->name    = $request->productname;

		// 	$submitAssignment                = AssignmentSubmission::find( $assignmentid );
		// 	$submitAssignment->student_id    = $student->id;
		// 	$submitAssignment->course_id     = $courseid;
		// 	$submitAssignment->assignment_id = $assignmentid;
		// 	$submitAssignment->title         = $request->title;
		// 	$submitAssignment->description   = $request->description;
		// 	$submitAssignment->attachment    = null;
		// 	$submitAssignment->save();

		// }
            // $a = $request->validationCustom01;
           
        // return $a;


		}


	}

