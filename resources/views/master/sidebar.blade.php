<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="https://img.playerswiki.com/uploads/biography/2019/07/02/faker.jpg" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><h5>{{Auth::user()->name}}</h5></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Tìm kiếm...">
            </div>
        </form>
        <ul class="nav menu">
            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{route('home')}}"><em class="fa fa-dashboard">&nbsp;</em> Trang chủ</a></li>
            <li class="{{ request()->is('student') ? 'active' : '' }}"><a href="{{route('student')}}"><em class="fa fa-users">&nbsp;</em> Quản lý sinh viên</a></li>
            <li class="{{ request()->is('book') ? 'active' : '' }}"><a href="{{route('book')}}"><em class="fa fa-book">&nbsp;</em> Quản lý sách</a></li>
            <li class="{{ request()->is('document') ? 'active' : '' }}"><a href="{{route('document')}}"><em class="fa fa-file">&nbsp;</em> Quản lý tài liệu</a></li>
            <li class="{{ request()->is('register-book') ? 'active' : '' }}"><a href="{{route('register-book')}}"><em class="fa fa-check">&nbsp;</em> Đăng lý mượn sách</a></li>
            <li class="{{ request()->is('admin') ? 'active' : '' }}"><a href="{{route('admin')}}"><em class="fa fa-user">&nbsp;</em> Quản lý thủ thư</a></li>
            <hr>
            <li><a href="{{route('logout')}}"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>
        </ul>
    </div>
