<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class CourseController extends Controller
{
   public function showMessage(){

dd("welcome to CourseController.You are inside showMessage Function");

}

public function showCourse (Request $req){
	$course = Course::find($req->id);
	return view('showcourse')->with('coursedata',$course);
}
}