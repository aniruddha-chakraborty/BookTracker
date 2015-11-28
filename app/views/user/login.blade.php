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

        <form action="{{ URL::route('postLogin') }}" method="POST">

            <div class="username">
        		<input type="text" name="email" class="form-control" placeholder="Enter your Email" />
                <i class="glyphicon glyphicon-user"></i>
            </div>

            <div class="password">
            	<input type="password" name="password" class="form-control" placeholder="Enter your password" />
                <i class="glyphicon glyphicon-lock"></i>
            </div>

            <input type="submit" class="btn btn-primary style2" value="Sign In" />

        </form>
        <footer>
            <a href="{{ URL::route('register') }}" class="register pull-right">Create account</a>
            <div class="clear"></div>
        </footer>
    </div>
</div>
<!-- Wrapper End -->


</body>

<!-- Mirrored from www.extracoding.com/demo/adminise/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jun 2014 05:51:52 GMT -->
</html>
