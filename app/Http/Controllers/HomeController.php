<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Room;

class HomeController extends Controller
{
    public function home(){
    	$students = Student::query()->select('*')->orderBy('id', 'DESC')->get();
    	$number_student = count($students);
        return view('home', compact('number_student'));
    }
}
