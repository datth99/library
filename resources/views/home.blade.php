@extends("master.master")
@section("title", "Admin - HRIS")
@section("main")
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <em class="fa fa-home"></em>
                </a>
            </li>
            <li class="active">Trang chủ</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Trang chủ</h3>
        </div>
    </div>
    <!--/.row-->

    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-blue"></em>
                        <div class="large">{{ $number_student ? $number_student : '0' }}</div>
                        <div class="text-muted">SINH VIÊN</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-book color-orange"></em>
                        <div class="large">{{ $number_book ? $number_book : '0' }}</div>
                        <div class="text-muted">SÁCH</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-file color-red"></em>
                        <div class="large">{{ $number_document ? $number_document : '0' }}</div>
                        <div class="text-muted">TÀI LIỆU</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-user color-blue"></em>
                        <div class="large">{{ $number_admin ? $number_admin : '0' }}</div>
                        <div class="text-muted">QUẢN TRỊ VIÊN</div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
</div>
<!--/.main-->
@endsection
