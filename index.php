<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}

?>

<?php
if (isset($_GET['value'])) {
	header('location:logout.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 100px">
			
		<div class="row justify-content-center">
			<div class="col-md-12" style="padding-bottom: 30px;">
				<a href="?value=logout" class="btn btn-primary float-right">Logout</a>
			</div>
			<div class="col-md-3">
				<img src="<?php echo $_SESSION['userData']['picture']['url'] ?>">
			</div>

			<div class="col-md-9">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['userData']['id'] ?></td>
						</tr>
						<tr>
							<td>First Name</td>
							<td><?php echo $_SESSION['userData']['first_name'] ?></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><?php echo $_SESSION['userData']['last_name'] ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $_SESSION['userData']['email'] ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>