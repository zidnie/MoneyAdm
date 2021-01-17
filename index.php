<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MoneyAdm</title>
	<link type="text/css" href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="asset/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="asset/css/theme.css" rel="stylesheet">
	<link type="text/css" href="asset/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='asset/http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Login Siswa
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="admin/index.php">
							Click Here for Login Admin
						</a></li>

		
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="POST" action="aksi_login.php">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="nis" name="nis" placeholder="NIS">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="password" name="password" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
									
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2021 </b> SMK Muhammadiyah Mungkid
		</div>
	</div>
	<script src="asset/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="asset/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>