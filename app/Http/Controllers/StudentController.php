<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Str;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(){
        $students = Student::query()->select('*')->orderBy('id', 'DESC')->paginate(5);
        return view('student.list-student', compact('students'));
    }

    public function add(){
        return view('student.add-student');
    }

    public function store(StudentRequest $request){
        $data = [
            'name' => $request->name,
            'student_code' => $request->student_code,
            'password' => \Hash::make($request->password),
            'email' => $request->email,
            'department_id' => $request->department_id
        ];
        Student::create($data);
        return redirect()->route('student')->with('status','Thêm dữ liệu thành công!');
    }

    public function edit($id){
        $student = Student::query()->where('id', $id)->first();
        return view('student.edit-student', compact('student'));
    }

    public function update(UpdateStudentRequest $request, $id){
       
        $data = [
            'name' => $request->name,
            'student_code' => $request->student_code,
            'email' => $request->email,
            'department_id' => $request->department_id
        ];

        if($request->password){
            $data['password'] = \Hash::make($request->password);
        }

        Student::where('id', $id)->update($data);

        return redirect('student')->with('status','Cập nhật dữ liệu thành công!');
    }

    public function delete($id) {
        $student = Student::find($id);
        $student->delete();
        return redirect('student')->with('status','Xóa dữ liệu thành công!');
    }

}
