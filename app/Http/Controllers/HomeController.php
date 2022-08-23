<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Book;
use App\Models\Admin;
use App\Models\Document;

class HomeController extends Controller
{
    public function home(){
    	$students = Student::query()->select('*')->orderBy('id', 'DESC')->get();
    	$number_student = count($students);
        $books = Book::query()->select('*')->orderBy('id', 'DESC')->get();
    	$number_book = count($books);
        $admins = Admin::query()->select('*')->orderBy('id', 'DESC')->get();
    	$number_admin = count($admins);
        $documents = Document::query()->select('*')->orderBy('id', 'DESC')->get();
    	$number_document = count($documents);
        return view('home', compact('number_student', 'number_book', 'number_admin', 'number_document'));
    }
}
