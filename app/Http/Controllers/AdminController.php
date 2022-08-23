<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Str;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list(){
        $admins = Admin::query()->select('*')->orderBy('id', 'DESC')->paginate(5);
        return view('admin.list-admin', compact('admins'));
    }

    public function add(){
        return view('admin.add-admin');
    }

    public function store(AdminRequest $request){
        $data = [
            'name' => $request->name,
            'password' => \Hash::make($request->password),
            'email' => $request->email,
            'level' => $request->level
        ];
        Admin::create($data);
        return redirect()->route('admin')->with('status','Thêm dữ liệu thành công!');
    }

    public function edit($id){
        $admin = Admin::query()->where('id', $id)->first();
        return view('admin.edit-admin', compact('admin'));
    }

    public function update(UpdateAdminRequest $request, $id){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level
        ];

        if($request->password){
            $data['password'] = \Hash::make($request->password);
        }

        Admin::where('id', $id)->update($data);
        return redirect('admin')->with('status','Cập nhật dữ liệu thành công!');
    }

    public function delete($id) {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('admin')->with('status','Xóa dữ liệu thành công!');
    }

}
