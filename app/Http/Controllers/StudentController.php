<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function showMessage(){

dd("welcome to StudentController.You are inside showMessage Function");

}

public function showStudent (Request $req){
	$student = Student::find($req->id);

	//dd($student);

	return view('showstudent')->with('studentdata',$student);

}
}