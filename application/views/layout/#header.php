<!DOCTYPE html>
<html>
  <head>
    <title>Hệ thống quản lý chấm công - Trường Đại học Mở Hà Nội</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{$url}public/images/houlogo.png" type="image/gif" sizes="16x16">

    <!-- =============================================== Mcvp9x =========================================== -->
      <link rel="stylesheet" href="./public/bower_components/bootstrap/dist/css/bootstrap.min.css">
      <!-- daterange picker -->
      <link rel="stylesheet" href="./public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
      <!-- bootstrap datepicker -->
      <link rel="stylesheet" href="./public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
      <!-- iCheck for checkboxes and radio inputs -->
      <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
      <link rel="stylesheet" type="text/css" href="./public/style/fontawesome-5.11.2/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="./public/dist/css/skins/_all-skins.min.css">
      <!-- Select2 -->
      <link rel="stylesheet" href="./public/bower_components/select2/dist/css/select2.min.css">
    <!-- ================================================================================================== -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <link href="{base_url()}public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="{base_url()}public/vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">

    <link href="{base_url()}public/css/styles.css" rel="stylesheet">

    <link href="{base_url()}public/css/buttons.css" rel="stylesheet">

    <link href="{base_url()}public/css/calendar.css" rel="stylesheet">

    <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->

    <link href="{base_url()}public/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">

    <link href="{base_url()}public/vendors/select/bootstrap-select.min.css" rel="stylesheet">

    <link href="{base_url()}public/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="{base_url()}public/css/forms.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./public/style/radio_checkbox_custom.css">
    <link rel="stylesheet" type="text/css" href="./public/style/sweetalert2.min.css">
    <script src="https://code.jquery.com/jquery.js"></script>
    <style type="text/css">
      #swal2-title{
          font-size: 13px !important;
      }
  </style>
  </head>
    <body>
    <div class="header">
       <div class="container-fuild">
          <div class="row">
             <div class="col-md-5">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-left" role="navigation">
                      <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quản lý chấm công<b class="caret"></b></a>
                          <ul class="dropdown-menu animated fadeInUp">
                            <li><a href="chamcongdonvi">Chấm công đơn vị</a></li>
                            <li><a href="thongkechamcong">Thống kê đơn vị</a></li>
                            <li><a href="thongkechamcong">Thống kê chấm công</a></li>
                          </ul>
                        </li>
                      </ul>
                       <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quản lý sự kiện<b class="caret"></b></a>
                          <ul class="dropdown-menu animated fadeInUp">
                            <li><a href="danhsachsukien">Danh sách sự kiện</a></li>
                            <li><a href="taosukien">Tạo sự kiện</a></li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                </div>
             </div>
             <div class="col-md-7">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                      <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{$session['tencb']}<b class="caret"></b></a>
                          <ul class="dropdown-menu animated fadeInUp">
                            <li><a href="">Thông tin cá nhân</a></li>
                            <li><a href="">Đổi mật khẩu</a></li>
                            <li><a href="logout">Đăng xuất</a></li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                </div>
             </div>
          </div>
       </div>
  </div>
  
    <div class="page-content">
      <div class="row">