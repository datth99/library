<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - THƯ VIỆN SÁCH ĐIỆN TỬ</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Quản lý THƯ VIỆN SÁCH ĐIỆN TỬ</div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{route('login')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                @if(Session::has('message'))
                                    <div class="btn btn-danger">{{ Session::get('message') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="text" autofocus="true" value="{{ old('email') }}">
                            </div>
                            @error('email')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="{{ old('password') }}">
                            </div>
                            @error('password')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror
                            <div class="checkbox">
                                <label>
									<input name="remember" type="checkbox" value="1">Nhớ tài khoản
								</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- /.row -->


    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
