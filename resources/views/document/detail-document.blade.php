@extends("master.master")
@section("title", "Admin - HRIS")
@section("main")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
              <a href="{{route('student')}}">
                    <em class="fa fa-user"></em>
                </a>
            </li>
            <li class="active">Sinh viên</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Chỉnh sửa thông tin sinh viên</h3>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
          <form role="form" method="POST" action="student/{{ $student->id }}/update">
              @csrf
              <div class="form-group">
              <label>Họ và tên (*)</label>
              <input type="text" class="form-control" name="name" placeholder="Nhập họ và tên..." value="{{ $student->name }}">
                @error('name')
                    <div class="text text-danger">{{ $message }}</div>
                @enderror
            </div>
              <div class="form-group">
                  <label>Mã sinh viên (*)</label>
                  <input type="text" class="form-control" name="student_code" placeholder="Nhập mã sinh viên..." maxlength="9" value="{{ $student->student_code }}">
                  @error('student_code')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <label>Mật khẩu mới (*)</label>
                  <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu...">
                  @error('password')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <label>Nhập lại mật khẩu mới (*)</label>
                  <input type="password" class="form-control" name="password_confirmation" placeholder="Xác nhận lại mật khẩu..." >
                  @error('password_confirmation')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
              </div>

            <div class="form-group">
              <label>Email (*)</label>
              <input type="email" name="email" class="form-control" placeholder="Nhập email..." value="{{ $student->email }}">
                  @error('email')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
            </div>
  
            <div class="form-group">
              <label>Khoa (*)</label>
              <select class="form-control custom-select" name="department_id" required>
                  <option @if($student->department_id == 1) selected @endif value="1">Công nghệ thông tin</option>
                  <option @if($student->department_id == 2) selected @endif value="2">An toàn thông tin</option>
                  <option @if($student->department_id == 3) selected @endif value="3">Điện tử viễn thông</option>
                  <option @if($student->department_id == 4) selected @endif value="4">Kỹ thuật điện tử</option>
            </select>
                  @error('department_id')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
            </div>

            <hr>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Cập nhật sinh viên</button>
              <a href="{{route('student')}}" class="btn btn-default">Quay lại</a>
            </div>
          </form>
        </div>
    </div>

</div>
<!--/.main-->
@endsection
