@extends("master.master")
@section("main")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="{{route('book.add')}}">
                    <em class="fa fa-user"></em>
                </a>
            </li>
            <li class="active">Thêm sách</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Thêm sách</h3>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
          <form role="form" method="POST" enctype="multipart/form-data" action="{{route('book.store')}}">
              @csrf
              <div class="form-group">
              <label>Tên sách (*)</label>
              <input type="text" class="form-control" name="name" placeholder="Nhập tên sách...">
                @error('name')
                    <div class="text text-danger">{{ $message }}</div>
                @enderror
            </div>
              <div class="form-group">
                  <label>Tác giả (*)</label>
                  <input type="text" class="form-control" name="author" placeholder="Nhập tên tác giả...">
                  @error('author')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <label>Ảnh sách (*)</label>
                  <input type="file" class="form-control" name="image">
                  @error('image')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                  <label>Nhập số lượng (*)</label>
                  <input type="number" class="form-control" name="quantity" placeholder="Nhập số lượng..." >
                  @error('quantity')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
              </div>

            <hr>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Thêm sách</button>
              <a href="{{route('book')}}" class="btn btn-default">Quay lại</a>
            </div>
          </form>
        </div>
    </div>

</div>
<!--/.main-->
@endsection
