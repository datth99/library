<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Str;
use App\Models\Book;

class BookController extends Controller
{
    public function list(){
        $books = Book::query()->select('*')->orderBy('id', 'DESC')->paginate(5);
        return view('book.list-book', compact('books'));
    }

    public function add(){
        return view('book.add-book');
    }

    public function store(BookRequest $request){
        $data = [
            'name' => $request->name,
            'author' => $request->author,
            'quantity' => $request->quantity,
            'status' => 1
        ];

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = Str::slug($request->name,'-').'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path,$file_name);
            $data['images'] = $file_name;
        } else{
            $data['images'] = 'no-image.jpg';
        }

        Book::create($data);
        return redirect()->route('book')->with('status','Thêm dữ liệu thành công!');
    }

    public function edit($id){
        $book = Book::query()->where('id', $id)->first();
        return view('book.edit-book', compact('book'));
    }

    public function update(BookRequest $request, $id){
        $data = [
            'name' => $request->name,
            'author' => $request->author,
            'quantity' => $request->quantity,
            'status' => 1
        ];

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = Str::slug($request->name,'-').'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path,$file_name);
            $data['images'] = $file_name;
        } 

        Book::where('id', $id)->update($data);
        return redirect('book')->with('status','Cập nhật dữ liệu thành công!');
    }

    public function delete($id) {
        $book = Book::find($id);
        $book->delete();
        return redirect('book')->with('status','Xóa dữ liệu thành công!');
    }

}
