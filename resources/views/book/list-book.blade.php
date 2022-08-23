@extends("master.master")
@section("title", "Admin - HRIS")
@section("main")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="{{route('book')}}">
                    <em class="fa fa-user"></em>
                </a>
            </li>
            <li class="active">Quản lý sách</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header">Danh sách quản lý sách</h3>
        </div>
    </div>
    <!--/.row-->

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row">
        <div class="col-lg-12">
          <a href="{{route('book.add')}}" type="button" class="btn btn-primary"><em class="fa fa-plus">&nbsp;</em> Thêm mới sách</a>
          <hr>
        <table class="table table-hover table-bordered">
        <thead class="thead-light">
        <tr>
          <th scope="col">Mã sách</th>
          <th scope="col">Ảnh</th>
          <th scope="col">Tên sách</th>
          <th scope="col">Tác giả</th>
          <th scope="col">Số lượng</th>
          <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
          <tr>
            <th scope="row">{{ $book->id }}</th>
            <td><img src="../uploads/{{$book->images}}" alt="" height="150px" width="150px"></td>
            <td>{{ $book->name }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->quantity }}</td>
            <td>
              <a href="book/{{ $book->id }}/edit" type="button" class="btn btn-sm btn-primary"><em class="fa fa-edit">&nbsp;</em>Sửa</a>
              <button data-toggle="modal" data-target="#exampleModal{{ $book->id }}" class="btn btn-sm btn-danger"><em class="fa fa-trash">&nbsp;</em>Xóa</button>
            </td>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a href="book/{{ $book->id }}/delete" class="btn btn-primary">Đồng ý</a>
                  </div>
                </div>
              </div>
            </div>
          </tr>
        @endforeach
        </tbody>
      </table>
            <div align='right'>
                {{$books->links("pagination::bootstrap-4")}}
            </div>
        </div>
        <!-- Button trigger modal -->
        <!-- Modal -->
    </div>

</div>
<!--/.main-->
@endsection
