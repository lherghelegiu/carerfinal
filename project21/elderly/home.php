<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<?php include "../config.php"; ?>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title></title>
</head>
<body>
	<form method="POST">
		<div class="container">
			<h3>Welcome<?php if(isset($_GET['id'])) {echo " " . $_GET['id'] . " To A Caring Hand!";} else{echo " To A Caring Hand!";} ?></h3>
			<div id="photo-button">
			  <img src="../photos/shopping.jpg" alt="Shopping">
			  <input type="submit" name="shopping" onclick="myFunction()" value="Shopping" class="btn" />
			</div>
			<div id="photo-button">
			  <img src="../photos/medicine.jpg" alt="Medicine">
			  <input type="submit" name="medicine" onclick="myFunction1()" value="Medicine" class="btn" />
			</div>
			<div id="photo-button">
			  <img src="../photos/cleaning.jpg" alt="Cleaning">
			  <input type="submit" name="cleaning" onclick="myFunction2()" value="Cleaning" class="btn" />
			</div>
			<div id="photo-button">
			  <img src="../photos/excercise.jpg" alt="Excercise">
			  <input type="submit" name="excercise" onclick="myFunction3()" value="Excercise" class="btn" />
			</div>
			<div id="photo-button">
			  <img src="../photos/travelling.jpg" alt="Travelling">
			  <input type="submit" name="travelling" onclick="myFunction4()" value="Travelling" class="btn" />
			</div>
			<div id="photo-button">
			  <img src="../photos/socialise.jpg" alt="Socialise">
			  <input type="submit" name="socialise" onclick="myFunction5()" value="Socialise" class="btn" />
			</div>
			<div class="well" style="margin-top: 500px;">
				<h4><b><u>Requested Services</u></b></h4>
			    <table class="table">
			      <thead>
			        <tr>
			          <th>#</th>
			          <th>Service</th>
			          <th>Carer</th>
			          <th>Time Attending</th>
			        </tr>
			      </thead>
			      <tbody>
			        <?php 
			        	$output = '';
			        	$i = 1;
			        	$sid = $_SESSION['id'];

			        	$sql = "SELECT * FROM elderly WHERE id = '$sid'";
			        	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

			        	while($row = mysqli_fetch_array($result)) {
			        		$eid = $row['id'];

			        		$sql1 = "SELECT * FROM services WHERE elderly_id = '$eid'";
				        	$result1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));

				        	while($row1 = mysqli_fetch_array($result1)) {
				        		$service1 = $row1['service'];
				        		$carer1 = $row1['carer'];
				        		$day = $row1['day_attending'];
				        		$time = $row1['time_attending'];

				        		$output .= '
				        			<tr>
				        				<td>'.$i++.'</td>
				        				<td>'.$service1.'</td>
				        				<td>'.$carer1.'</td>
				        				<td>'.$day.'</td>
				        				<td>'.$time.'</td>
				        			</tr>
				        		';
				        	}
			        	}
			        	echo $output;
			        ?>
			      </tbody>
			    </table>
			</div>
		</div>
	</form>
</body>
</html>

<style type="text/css">
	#photo-button {
	    position: relative;
	    width: 100%;
	    max-width: 300px;
	    float: left;
	}

	#photo-button img {
	    width: 100%;
	    height: 233px;
	}

	#photo-button .btn {
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    transform: translate(-50%, -50%);
	    -ms-transform: translate(-50%, -50%);
	    color: black;
	    font-size: 16px;
	    padding: 12px 24px;
	    border: none;
	    cursor: pointer;
	    border-radius: 5px;
	    text-align: center;
	    overflow: hidden;
	}
    .btn:hover {
         background: #383;
    }
</style>

<script>
	function myFunction() {
	    alert("Carer Alerted! Someone will be with you shortly!");
	}
	function myFunction1() {
	    alert("Carer Alerted! Someone will be with you shortly!");
	}
	function myFunction2() {
	    alert("Carer Alerted! Someone will be with you shortly!");
	}
	function myFunction3() {
	    alert("Carer Alerted! Someone will be with you shortly!");
	}
	function myFunction4() {
	    alert("Carer Alerted! Someone will be with you shortly!");
	}
	function myFunction5() {
	    alert("Carer Alerted! Someone will be with you shortly!");
	}
</script>

<?php
	$eid = $_SESSION['id'];

	if(isset($_POST['shopping'])) {
		$lid = mysqli_insert_id($conn);
		$sql2 = "INSERT INTO services (id, service, elderly_id, carer, day_attending, time_attending, status) VALUE ('" . $lid . "', 'Shopping', '" . $eid . "', '', '', '', 'No')";

		$result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
	}

	if(isset($_POST['medicine'])) {
		$lid = mysqli_insert_id($conn);
		$sql3 = "INSERT INTO services (id, service, elderly_id, carer, day_attending, time_attending, status) VALUE ('" . $lid . "', 'Medicine', '" . $eid . "', '', '', '', 'No')";
	    	
		$result3 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
	}

	if(isset($_POST['cleaning'])) {
		$lid = mysqli_insert_id($conn);
		$sql4 = "INSERT INTO services (id, service, elderly_id, carer, day_attending, time_attending, status) VALUE ('" . $lid . "', 'Cleaning', '" . $eid . "', '', '', '', 'No')";
	    	
		$result4 = mysqli_query($conn, $sql4) or die(mysqli_error($conn));
	}

	if(isset($_POST['excercise'])) {
		$lid = mysqli_insert_id($conn);
		$sql5 = "INSERT INTO services (id, service, elderly_id, carer, day_attending, time_attending, status) VALUE ('" . $lid . "', 'Excercise', '" . $eid . "', '', '', '', 'No')";
	    	
		$result5 = mysqli_query($conn, $sql5) or die(mysqli_error($conn));
	}

	if(isset($_POST['travelling'])) {
		$lid = mysqli_insert_id($conn);
		$sql6 = "INSERT INTO services (id, service, elderly_id, carer, day_attending, time_attending, status) VALUE ('" . $lid . "', 'Travelling', '" . $eid . "', '', '', '', 'No')";
	
		$result6 = mysqli_query($conn, $sql6) or die(mysqli_error($conn));
	}

	if(isset($_POST['socialise'])) {
		$lid = mysqli_insert_id($conn);
		$sql7 = "INSERT INTO services (id, service, elderly_id, carer, day_attending, time_attending, status) VALUE ('" . $lid . "', 'Socialise', '" . $eid . "', '', '', '', 'No')";
	    	
		$result7 = mysqli_query($conn, $sql7) or die(mysqli_error($conn));
	}
?>