<?php 
	require_once 'config.php' ;

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}
	
	$redirectURL = "http://localhost/PHP/FacebookLogin/fbcallback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL,$permissions);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top:20px;">
		<div class="row ">
			<div class="col-md-6 col-md-offset-3" align="center">
				<img src="logo.jpg" width="200px" height="200px"><br><br>
					<form>
						<div class="input-group">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
						</div>
						<input type="text" name="email" placeholder="Email" class="form-control">
						</div><br>
						<div class="input-group">
						<div class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
						</div>
						<input type="password" name="password" placeholder="Password" class="form-control">
						</div><br>
						<input type="submit" value="Log in" class="btn btn-primary">
						<input type="button" onclick="window.location = '<?php echo $loginURL; ?>'" value="Log in with Facebook" class="btn btn-primary">
					</form>

			</div>
		</div>
	</div>


</body>
</html>