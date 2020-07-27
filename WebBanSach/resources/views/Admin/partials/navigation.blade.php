<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>

        <nav class="nav navbar-nav">
        <ul class=" navbar-right">
          @foreach($dsQuanTriVien as $quantrivien)
            <li class="nav-item dropdown open" style="padding-left: 15px;">
              <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('images/admin/'.$quantrivien->anh_dai_dien_admin) }}" alt="">{{ $quantrivien->ho_ten_admin }}
              </a>
              <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"  href="{{ route('cap-nhat-admin', $quantrivien->id) }}">Cập Nhật Thông Tin</a>
                <hr />
                <a class="dropdown-item"  href="{{ route('dang-xuat-admin') }}"><i class="fa fa-sign-out pull-right"></i>Đăng Xuất</a>
              </div>
            </li>
          @endforeach

          <li role="presentation" class="nav-item dropdown open">
            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-green">6</span>
            </a>
            <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
              <li class="nav-item">
                <a class="dropdown-item">
                  <span class="image"><img src="{{ asset('assets/Admin/images/img.jpg') }}" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="dropdown-item">
                  <span class="image"><img src="{{ asset('assets/Admin/images/img.jpg') }}" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="dropdown-item">
                  <span class="image"><img src="{{ asset('assets/Admin/images/img.jpg') }}" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="dropdown-item">
                  <span class="image"><img src="{{ asset('assets/Admin/images/img.jpg') }}" alt="Profile Image" /></span>
                  <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                  </span>
                  <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <div class="text-center">
                  <a class="dropdown-item">
                    <strong>See All Alerts</strong>
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
</div>
<!-- /top navigation -->
