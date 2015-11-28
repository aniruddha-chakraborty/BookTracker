<!DOCTYPE HTML>
<html>

<!-- Mirrored from www.extracoding.com/demo/adminise/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jun 2014 05:51:52 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adminise - Clean And Corporate Admin Panel Template</title>
<!--// Stylesheets //-->
<link href="/assets/css/style.css" rel="stylesheet" media="screen" />
<link href="/assets/css/bootstrap.css" rel="stylesheet" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/icheck.min.js"></script>
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!-- Wrapper Start -->
<div class="loginwrapper">
	<div class="loginone">



				<?php
						$errorShow = '';
						if ($errors->has()) {

									foreach ($errors->all() as $error){
											$errorShow .= $error .',';
									}
							$errorShow = rtrim($errorShow,',');
						}
				?>
				@if(!empty($errorShow))
						<a class="togglethis">Toggle</a>
						<div class="alert alert-danger">
						<strong>Error!</strong>
									{{ $errorShow }}
						</div>
				@endif

        <form action="{{ URL::route('postRegister') }}" method="POST">

            <div class="username">
        		<input type="text" name="username" class="form-control" placeholder="Enter your username" />
                <i class="glyphicon glyphicon-user"></i>
            </div>
            <div class="username">
            <input type="text" name="first_name" class="form-control" placeholder="Enter your First Name" />
                <i class="glyphicon glyphicon-user"></i>
            </div>
            <div class="username">
            <input type="text" name="last_name" class="form-control" placeholder="Enter your Last Name" />
                <i class="glyphicon glyphicon-user"></i>
            </div>
            <div class="username">
            <input type="text" name="phn_number" class="form-control" placeholder="Enter your Phone Number" />
                <i class="glyphicon glyphicon-user"></i>
            </div>
            <div class="username">
            <input type="text" name="email" class="form-control" placeholder="Enter your Email" />
                <i class="glyphicon glyphicon-user"></i>
            </div>
            <div class="password">
            	<input type="password" name="password" class="form-control" placeholder="Enter your password" />
                <i class="glyphicon glyphicon-lock"></i>
            </div>
            <div class="password">
            	<input type="password" name="password_again" class="form-control" placeholder="Re-Enter your password" />
                <i class="glyphicon glyphicon-lock"></i>
            </div>
            <div class="username">
            <input type="text" name="library_name" class="form-control" placeholder="Enter your Library Name" />
                <i class="glyphicon glyphicon-user"></i>
            </div>

            <input type="submit" class="btn btn-primary style2" value="Register" />

        </form>
        <footer>

            <a href="" class="register pull-right">Want to Login?</a>
            <div class="clear"></div>
        </footer>
    </div>
</div>
<!-- Wrapper End -->


</body>

<!-- Mirrored from www.extracoding.com/demo/adminise/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jun 2014 05:51:52 GMT -->
</html>
