@extends('Admin/layout')

@section('css')
<!-- iCheck -->
<link href="{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
<!-- Datatables -->
<link href="{{ asset('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('js')
<!-- iCheck -->
<script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>
<!-- Datatables -->
<script src="{{ asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('assets/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
@endsection

@section('main-content')
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><span style="font-size: 35px;">Danh Sách Hóa Đơn Đã Hủy</span></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <a href="{{ route('hoa-don.danh-sach') }}"><button type="button" class="btn btn-round btn-primary">Quay Lại</button></a><br /><br />

        @include('Admin.blocks.alert')

        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên Tài Khoản</th>
              <th>Tên Người Nhận</th>
              <th>Ngày Mua</th>
              <th>Địa Chỉ Giao Hàng</th>
              <th>SĐT Giao Hàng</th>
              <th>Tổng Tiền</th>
              <th>Thao Tác</th>
            </tr>
          </thead>

          <tbody>

            @foreach($dsHoaDon ?? '' as $hoadon)
              <tr>
                <td>{{ $hoadon->id }}</td>
                <td>{{ $hoadon->taiKhoan->ten_tai_khoan }}</td>
                <td>{{ $hoadon->ten_nguoi_nhan }}</td>
                <td>{{ $hoadon->ngay_mua }}</td>
                <td>{{ $hoadon->dia_chi_giao_hang }}</td>
                <td>{{ $hoadon->so_dien_thoai_giao_hang }}</td>
                <td>{{ $hoadon->tong_tien }}</td>
                <td>

                  <a href="{{ route('hoa-don.khoi-phuc', $hoadon->id) }}" onclick="return confirm('Bạn Có Muốn Khôi Phục Hóa Đơn Này ?')"><button type="button" class="btn btn-round btn-info">Khôi Phục</button></a>

                </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
