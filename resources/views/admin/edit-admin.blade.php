@extends("master.master")
@section("title", "Admin - LIBARY")
@section("main")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
              <a href="{{route('admin')}}">
                    <em class="fa fa-user"></em>
                </a>
            </li>
            <li class="active">Thủ thư</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Chỉnh sửa thông tin thủ thư</h3>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
          <form role="form" method="POST" action="admin/{{ $admin->id }}/update">
              @csrf
              <div class="form-group">
              <label>Họ và tên</label>
              <input type="text" class="form-control" name="name" placeholder="Nhập họ và tên..." value="{{ $admin->name }}">
                @error('name')
                    <div class="text text-danger">{{ $message }}</div>
                @enderror
            </div>

              <div class="form-group">
                  <label>Mật khẩu </label>
                  <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu..." value="{{ $admin->password }}">
                  @error('password')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <label>Nhập lại mật khẩu</label>
                  <input type="password" class="form-control" name="password_confirmation" placeholder="Xác nhận lại mật khẩu..."  value="{{ $admin->password }}">
                  @error('password_confirmation')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
              </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" placeholder="Nhập email..." value="{{ $admin->email }}">
                  @error('email')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
            </div>
  
            <div class="form-group">
              <label>Quyền</label>
                <select class="form-control custom-select" name="level" required>
                  <option @if($admin->level == 0) selected @endif value="0">Quản trị viên</option>
                  <option @if($admin->level == 1) selected @endif value="1">Cộng tác viên</option>
                </select>
                  @error('level')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
            </div>

            <hr>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Cập nhật thủ thư</button>
              <a href="{{route('admin')}}" class="btn btn-default">Quay lại</a>
            </div>
          </form>
        </div>
    </div>

</div>
<!--/.main-->
@endsection
