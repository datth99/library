<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterBook;

class RegisterBookController extends Controller
{
    public function list(){
        $registerBook = RegisterBook::query()->select('*')->orderBy('id', 'DESC')->paginate(5);
        return view('register-book.list-register-book', compact('registerBook'));
    }
}
