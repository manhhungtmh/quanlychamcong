<!DOCTYPE html>
<html>
  <head>
    <title>Hệ thống quản lý chấm công - Trường Đại học Mở Hà Nội</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{base_url()}public/images/houlogo.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap -->
    <link href="{base_url()}public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="{base_url()}public/css/styles.css" rel="stylesheet">
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo text-center">
	                 <h1><a href="#">Hệ thống theo dõi chấm công Trường Đại học Mở Hà Nội</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
	<br> <br>
	<form method="post" action="">
		<div class="page-content container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-wrapper">
				        <div class="box">
				            <div class="content-wrap">
				                <h6>Đăng nhập</h6>
				                <input class="form-control" type="text" name="username" placeholder="E-mail address">
				                <input class="form-control" type="password" name="password" placeholder="Password">
				                {if (!empty($tb))}
				                <h5 class="text-center" style="color: red">{$tb}</h5>
				                {/if}
				                <div class="action">
				                    <button class="btn btn-primary" type="submit" name="dangnhap" value="dangnhap">Đăng nhập</button>
				                </div>                
				            </div>
				        </div>

				        <div class="already">
				            <p>Bạn cần hỗ trợ ?</p>
				            <a href="#">0383443681</a>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{base_url()}public/bootstrap/js/bootstrap.min.js"></script>
    <script src="{base_url()}public/js/custom.js"></script>
  </body>
</html>