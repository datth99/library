<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function list(){
        $documents = Document::query()->select('*')->orderBy('id', 'DESC')->paginate(5);
        return view('document.list-document', compact('documents'));
    }

    public function add(){
        return view('document.add-document');
    }

    public function store(Request $request){
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

        document::create($data);
        return redirect()->route('document')->with('status','Thêm dữ liệu thành công!');
    }

    public function edit($id){
        $document = Document::query()->where('id', $id)->first();
        return view('document.edit-document', compact('document'));
    }

    public function update(Request $request, $id){
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

        document::where('id', $id)->update($data);
        return redirect('document')->with('status','Cập nhật dữ liệu thành công!');
    }

    public function delete($id) {
        $document = document::find($id);
        $document->delete();
        return redirect('document')->with('status','Xóa dữ liệu thành công!');
    }

}
