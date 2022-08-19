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
          <h3 class="page-header">Danh sách sinh viên</h3>
        </div>
    </div>
    <!--/.row-->

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row">
        <div class="col-lg-12">
          <a href="{{route('student.add')}}" type="button" class="btn btn-primary"><em class="fa fa-plus">&nbsp;</em> Thêm mới sinh viên</a>
          <hr>
        <table class="table table-hover table-bordered">
        <thead class="thead-light">
        <tr>
          <th scope="col">Mã sinh viên</th>
          <th scope="col">Tên sinh viên</th>
          <th scope="col">Email</th>
          <th scope="col">Khoa</th>
          <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
          <tr>
            <th scope="row">{{ $student->student_code }}</th>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>
              @if($student->department_id == 1)
                Công nghệ thông tin
              @elseif($student->department_id == 2)
                An toàn thông tin
              @elseif($student->department_id == 3)
                Điện tử viễn thông
              @else
                Kỹ thuật điện tử
              @endif
            </td>
            <td>
              <a href="student/{{ $student->id }}/edit" type="button" class="btn btn-sm btn-primary"><em class="fa fa-edit">&nbsp;</em>Sửa</a>
              <button data-toggle="modal" data-target="#exampleModal{{ $student->id }}" class="btn btn-sm btn-danger"><em class="fa fa-trash">&nbsp;</em>Xóa</button>
            </td>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a href="student/{{ $student->id }}/delete" class="btn btn-primary">Đồng ý</a>
                  </div>
                </div>
              </div>
            </div>
          </tr>
        @endforeach
        </tbody>
      </table>
            <div align='right'>
                {{$students->links("pagination::bootstrap-4")}}
            </div>
        </div>
        <!-- Button trigger modal -->
        <!-- Modal -->
    </div>

</div>
<!--/.main-->
@endsection
