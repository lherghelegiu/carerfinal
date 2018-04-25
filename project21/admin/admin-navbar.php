<!DOCTYPE html>
<html>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand">A Caring Hand</a>
				<ul class="nav navbar-nav navbar">
					<li style="margin-top: 15px;"><b><a href="home.php">Home |</a></b></li>
					<li style="margin-top: 15px;"><b><a href="add-account.php">| Add User</a></b></li>
				</ul>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<h4 style="float: right; margin-top: 15px;"><?php if(isset($id)) {echo "Welcome " . $id;} ?> | <a href="../logout.php">Logout</a></h4>			
			</div>
		</div>
	</nav>
</body>
</html>