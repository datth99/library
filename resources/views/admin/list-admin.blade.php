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
          <h3 class="page-header">Danh sách thủ thư</h3>
        </div>
    </div>
    <!--/.row-->

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row">
        <div class="col-lg-12">
          <a href="{{route('admin.add')}}" type="button" class="btn btn-primary"><em class="fa fa-plus">&nbsp;</em> Thêm mới thủ thư</a>
          <hr>
        <table class="table table-hover table-bordered">
        <thead class="thead-light">
        <tr>
          <th scope="col">Mã ID</th>
          <th scope="col">Tên thủ thư</th>
          <th scope="col">Email</th>
          <th scope="col">Quyền</th>
          <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($admins as $admin)
          <tr>
            <th scope="row">{{ $admin->id }}</th>
            <td>{{ $admin->name }}</td>
            <td>{{ $admin->email }}</td>
            <td>
              @if($admin->level == 0)
                Quản trị viên
              @else
                Cộng tác viên
              @endif
            </td>
            <td>
              <a href="admin/{{ $admin->id }}/edit" type="button" class="btn btn-sm btn-primary"><em class="fa fa-edit">&nbsp;</em>Sửa</a>
              <button data-toggle="modal" data-target="#exampleModal{{ $admin->id }}" class="btn btn-sm btn-danger"><em class="fa fa-trash">&nbsp;</em>Xóa</button>
            </td>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $admin->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4>Cảnh báo!</h4>
                  </div>
                  <div class="modal-body">
                    <h5>Bạn có chắc chắn muốn xóa ?</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <a href="admin/{{ $admin->id }}/delete" class="btn btn-primary">Đồng ý</a>
                  </div>
                </div>
              </div>
            </div>
          </tr>
        @endforeach
        </tbody>
      </table>
            <div align='right'>
                {{$admins->links("pagination::bootstrap-4")}}
            </div>
        </div>
        <!-- Button trigger modal -->
        <!-- Modal -->
    </div>

</div>
<!--/.main-->
@endsection
