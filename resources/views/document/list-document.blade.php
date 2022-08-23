@extends("master.master")
@section("title", "Admin - HRIS")
@section("main")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="{{route('document')}}">
                    <em class="fa fa-user"></em>
                </a>
            </li>
            <li class="active">Tài liệu</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header">Danh sách tài liệu</h3>
        </div>
    </div>
    <!--/.row-->

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row">
        <div class="col-lg-12">
          <hr>
        <table class="table table-hover table-bordered">
        <thead class="thead-light">
        <tr>
          <th scope="col">Mã tài liệu</th>
          <th scope="col">Tên tài liệu</th>
          <th scope="col">Mô tả</th>
          <th scope="col">Tác giả</th>
          <th scope="col">Trạng thái</th>
          <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
            <div align='right'>
                {{$documents->links("pagination::bootstrap-4")}}
            </div>
        </div>
        <!-- Button trigger modal -->
        <!-- Modal -->
    </div>

</div>
<!--/.main-->
@endsection
