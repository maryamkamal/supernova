<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
      public function index()
    {
        $courses = Course::all();
 
        return view('courses.courses', compact('courses'));
    }
	
	public function view( $id){

        $course = Course::find($id);
		 return view('courses.courseDetails', compact('course'));
}

}