<!DOCTYPE html>
<html>
<head>
	<?php include "admin-navbar.php"; 
		  include "../config.php"; ?> 
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title></title>
</head>
<body>
	<br>
	<br>
	<div class="container">
	    <div class="row">
			<form role="form" id="add" method="POST" class="col-md-8 go-right">
				<h2>Add Account</h2>
				<div class="form-group">
					<input id="name" name="name" type="text" class="form-control" required>
					<label for="name">Name</label>
				</div>
				<div class="form-group">
					<input id="surname" name="surname" type="text" class="form-control" required>
					<label for="surname">Surname</label>
				</div>
				<div class="form-group">
					<input id="phone" name="phone" type="tel" class="form-control" required>
					<label for="phone">Phone Number</label>
				</div>				
				<div class="form-group">
					<select id="account" class="form-control" name="account" required>
	              		<option value="" selected disabled>-- ACCOUNT --</option>
	              		<option value="one">Coordinator</option>
	              		<option value="two">Carer</option>
	              		<option value="three">Elderly</option>
               	    </select>
				</div>
				<div class="form-group" id="hideDiv5" style="display: none;">
					<input id="username" name="username" type="username" class="form-control" required>
					<label for="username">Username</label>
				</div>
				<div class="form-group" id="hideDiv6" style="display: none;">
					<input id="password" name="password" type="password" class="form-control" required>
					<label for="password">Password</label>
				</div>
				<div class="form-group" id="hideDiv" style="display: none;">
					<input id="age" name="age" type="number" class="form-control">
					<label for="age">Age</label>
				</div>
				<div class="form-group" id="hideDiv1" style="display: none;">
					<textarea id="address" name="address" class="form-control" style="resize: none;"></textarea>
					<label for="message">Address</label>
				</div>
				<div class="form-group" id="hideDiv2" style="display: none;">
					<textarea id="medical" name="medical" type="text" class="form-control" style="resize: none;"></textarea>
					<label for="medical">Medical History</label>
				</div>
				<button class="btn btn-success" type="submit" name="submit" id="submit">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>

<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600);
	body, html {
		background-repeat: no-repeat;
		background: rgb(185,210,224); /* Old browsers */
		background: -moz-radial-gradient(center, ellipse cover,  rgba(185,210,224,1) 0%, rgba(187,214,228,1) 0%, rgba(186,211,225,1) 15%, rgba(186,211,225,1) 38%, rgba(169,199,215,1) 68%, rgba(169,199,215,1) 68%, rgba(169,199,215,1) 82%, rgba(158,191,208,1) 100%); /* FF3.6-15 */
		background: -webkit-radial-gradient(center, ellipse cover,  rgba(185,210,224,1) 0%,rgba(187,214,228,1) 0%,rgba(186,211,225,1) 15%,rgba(186,211,225,1) 38%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 82%,rgba(158,191,208,1) 100%);
	}

	.form-control{
	    background: transparent;
	}
	form {
		width: 320px;
		margin: 20px;
		height: 360px;
		background: white;
	}
	form > div {
		position: relative;
		overflow: hidden;
	}
	form input, form textarea {
		width: 100%;
		border: 2px solid gray;
		background: none;
		position: relative;
		top: 0;
		left: 0;
		z-index: 1;
		padding: 8px 12px;
		outline: 0;
	}
	form input:valid, form textarea:valid {
		background: white;
	}
	form input:focus, form textarea:focus {
		border-color: #357EBD;
	}
	form input:focus + label, form textarea:focus + label {
		background: #357EBD;
		color: white;
		font-size: 70%;
		padding: 1px 6px;
		z-index: 2;
		text-transform: uppercase;
	}
	form label {
		-webkit-transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
		transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
		position: absolute;
		color: #999;
		padding: 7px 6px;
		font-weight: normal;
	}
	form textarea {
		display: block;
		resize: vertical;
	}
	form.go-bottom input, form.go-bottom textarea {
		padding: 12px 12px 12px 12px;
	}
	form.go-bottom label {
		top: 0;
		bottom: 0;
		left: 0;
		width: 100%;
	}
	form.go-bottom input:focus, form.go-bottom textarea:focus {
		padding: 4px 6px 20px 6px;
	}
	form.go-bottom input:focus + label, form.go-bottom textarea:focus + label {
		top: 100%;
		margin-top: -16px;
	}
	form.go-right label {
		border-radius: 0 5px 5px 0;
		height: 100%;
		top: 0;
		right: 100%;
		width: 100%;
		margin-right: -100%;
	}
	form.go-right input:focus + label, form.go-right textarea:focus + label {
		right: 0;
		margin-right: 0;
		width: 40%;
		padding-top: 5px;
	}
</style>

<script type="text/javascript">
	$(function() {
		$('#hideDiv').hide(); 
		$('#hideDiv1').hide(); 
		$('#hideDiv2').hide(); 
	    $('#account').change(function(){
	        if($('#account').val() == 'three') {
	        	$('#hideDiv').show(); 
	        	$('#hideDiv1').show(); 
	        	$('#hideDiv2').show(); 
	        	$('#hideDiv5').hide(); 
	        	$('#hideDiv6').hide(); 
	        	document.getElementById("age").required = true; 
	        	document.getElementById("address").required = true; 
	        	document.getElementById("medical").required = true;
	        	document.getElementById("add").style.height = "550px";
	        	document.getElementById("username").required = false;
	        	document.getElementById("password").required = false;
	        } 
	        else {
	        	$('#hideDiv').hide(); 
	        	$('#hideDiv1').hide(); 
	        	$('#hideDiv2').hide();
	        	$('#hideDiv5').show(); 
	        	$('#hideDiv6').show();  
	        	document.getElementById("age").required = false; 
	        	document.getElementById("address").required = false; 
	        	document.getElementById("medical").required = false;
	        	document.getElementById("add").style.height = "400px";
	        	document.getElementById("username").required = true;
	        	document.getElementById("password").required = true;
	        }
	    });
	});
</script>

<?php 
	if(isset($_POST['submit'])) {
		$uid = mysqli_insert_id($conn);
		$name1 = mysqli_real_escape_string($conn, $_REQUEST['name']);
		$sname1 = mysqli_real_escape_string($conn, $_REQUEST['surname']);
		$phone1 = mysqli_real_escape_string($conn, $_REQUEST['phone']);
		$acc1 = mysqli_real_escape_string($conn, $_REQUEST['account']);

		if($acc1 == 'one' || $acc1 == 'two') {
			$user1 = mysqli_real_escape_string($conn, $_REQUEST['username']);
			$pass1 = mysqli_real_escape_string($conn, $_REQUEST['password']);
		}
		else {
			$age1 = mysqli_real_escape_string($conn, $_REQUEST['age']);
			$add1 = mysqli_real_escape_string($conn, $_REQUEST['address']);
			$med1 = mysqli_real_escape_string($conn, $_REQUEST['medical']);
		}

		if($acc1 == 'one') {
			$query = "INSERT INTO users (id, name, surname, phone_number, account_type, username, password) VALUES ('" . $uid . "', '" . $name1 . "', '" . $sname1 . "', '" . $phone1 . "', 'Coordinator', '" . $user1 . "', '" . $pass1 . "')";
		}

		if($acc1 == 'two') {
			$query = "INSERT INTO users (id, name, surname, phone_number, account_type, username, password) VALUES ('" . $uid . "', '" . $name1 . "', '" . $sname1 . "', '" . $phone1 . "', 'Carer', '" . $user1 . "', '" . $pass1 . "')";
		}

		if($acc1 == 'three') {	
			$query = "INSERT INTO elderly (id, name, surname, age, phone_number, address, medical) VALUES ('" . $uid . "', '" . $name1 . "', '" . $sname1 . "', '" . $age1 . "', '" . $phone1 . "', '" . $add1 . "', '" . $med1 . "')";
		}

		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		mysqli_close($conn);
		echo '<script>window.location = "home.php"</script>';
	}
?>