<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng kí travel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ $urlLogin }}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ $urlLogin }}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ $urlLogin }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ $urlLogin }}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ $urlLogin }}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ $urlLogin }}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ $urlLogin }}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ $urlLogin }}/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ $urlLogin }}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ $urlLogin }}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ $urlLogin }}/css/main.css">
<!--===============================================================================================-->
<style type="text/css">
	.mau li{
      color: red;
    }
</style>
</head>
<body>
@if ($errors->any())
  <div class="alert alert-danger">
      <ul class="mau">
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{ $urlLogin  }}/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Cập nhật thông tin 
					</span>
				</div>

				<form action="{{ route('travel.dangki.edit',['id'=>$objItem->id]) }}" method="post" class="login100-form validate-form">
					{{ csrf_field() }}
					<div class="wrap-input100 validate-input m-b-26" data-validate="phải nhập họ tên">
						<span class="label-input100">Họ và tên</span>
						<input class="input100" type="text" name="ten" placeholder="Nhập họ và tên" value="{{ $objItem->ten }}">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="phải nhập chứng minh nhân dân">
						<span class="label-input100">CMND</span>
						<input class="input100" type="text" name="cmnd" placeholder="Nhập cmnd" value="{{ $objItem->cmnd }}" >
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="phải nhập địa chỉ">
						<span class="label-input100">Địa chỉ</span>
						<textarea class="input100" name="diachi" placeholder="Nhập địa chỉ">{{ $objItem->diachi }}</textarea>
						
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="phải nhập số điện thoại">
						<span class="label-input100">Số điện thoại</span>
						<input class="input100" type="text" name="sdt" placeholder="nhập số điện thoại" value="{{ $objItem->sdt }}">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "phải nhập email">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Nhập địa chỉ mail" value="{{ $objItem->email }}">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "phải nhập username">
						<span class="label-input100">Tên đăng nhập</span>
						<input class="input100" type="text" name="username" placeholder="nhập tên đăng nhập" value="{{ $objItem->username }}">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "phải nhập mật khẩu">
						<span class="label-input100">Mật khẩu</span>
						<input class="input100" type="password" name="pass" placeholder="nhập mật khẩu">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "phải nhập lại mật khẩu">
						<span class="label-input100">Nhập lại mật khẩu</span>
						<input class="input100" type="password" name="repass" placeholder="nhập lại mật khẩu">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" >
						<span class="label-input100">Ghi chú</span>
						<input class="input100" type="text" name="ghichu" placeholder="nhập ghi chú" value="{{ $objItem->ten }}" >
						<input class="input100" type="hidden" name="chucvu" placeholder="nhập ghi chú" value="{{ $objItem->id_cv }}" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sửa
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="{{ $urlLogin }}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ $urlLogin }}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ $urlLogin }}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{ $urlLogin }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ $urlLogin }}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ $urlLogin }}/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{ $urlLogin }}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{ $urlLogin }}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{ $urlLogin }}/js/main.js"></script>

</body>
</html>