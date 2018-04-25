<?php
	include "admin-navbar.php"; 
  	include "../config.php";

	if(isset($_POST['submit'])) {
	    $update_id = $_POST['id'];
	    $carer = mysqli_real_escape_string($conn, $_REQUEST['col1']);
	    $timeSet = mysqli_real_escape_string($conn, $_REQUEST['col2']);
	    $daySet = mysqli_real_escape_string($conn, $_REQUEST['col3']);

	    $query = "UPDATE services 
	              SET carer = '$carer', 
	                  time_attending = '$timeSet',
	                  day_attending = '$daySet'
	              WHERE id = '$update_id'";
	    $result_set = mysqli_query($conn, $query);
	}
	if(isset($_POST['remove'])) {
	    $update_id = $_POST['rid'];

	    $query = "DELETE FROM services 
	              WHERE id = '$update_id'";
	    $result_set = mysqli_query($conn, $query);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
</head>
<body>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<h2>Welcome <?php if(isset($id)) {echo $id;} ?></h2>
			<hr>
			<form method="POST">
				<h4>Requested Services</h4>
				<br>
				<div class="col-md-12">
		            <table class="table">
						<tr>
							<th>#</th>
							<th>Service</th>
							<th>Elderly</th>
							<th>Carer</th>
							<th>Day Attending</th>
							<th>Time Attending</th>
							<th>Status</th>
							<th></th>
						</tr>
						<?php
							$i = 0;
							$carers = '';
							$list = '';

							for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
						    for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
						        $list .= '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
						                       .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';

	                       $sql2 = "SELECT * FROM users WHERE account_type = 'carer'";
	                       $result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));

	                       while($row2 = mysqli_fetch_array($result2)) {
	                       		$cid = $row2['id'];
	                       		$cname = $row2['name'];
	                       		$csname = $row2['surname'];

	                       		$carers .= '<option value="'.$cid.'">'.$cname.' '.$csname.'</option>';
	                       }

							$query = "SELECT * FROM services";
							$result_set = mysqli_query($conn, $query);
							while($result = mysqli_fetch_array($result_set)) {
							    $id = $result['id'];
							  	$service1 = $result['service'];
							  	$stat = $result['status'];
							  	$eid = $result['elderly_id'];
							  	$car = $result['carer'];
							  	$day = $result['day_attending'];
							  	$altime = $result['time_attending'];

							  	$i++;


							    $sql1 = "SELECT * FROM elderly WHERE id = '$eid'";
							  	$result1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));

							  	while($row1 = mysqli_fetch_array($result1)) {
							        $elderly1 = $row1['name'];
							        $elderly1a = $row1['surname'];

							        $efullname = $elderly1 . " " . $elderly1a;

							        echo "<form action='home.php' method='POST'>";
								    echo "<tr>
								    		<td>".$i."</td>
								              <td>".$service1."</td>
								              <td>".$efullname."</td>";

								              	$sql4 = "SELECT * FROM users WHERE id = '$car'";
					                        	$result4 = mysqli_query($conn, $sql4) or die(mysqli_error($conn));

					                        	if(mysqli_num_rows($result4) > 0) {
					                        		while($row4 = mysqli_fetch_array($result4)) {
					                        			$carname = $row4['name'];
					                        			$carsname = $row4['surname'];

								              			echo "<td>".$carname." ".$carsname."</td>";
								              		}
					                        	}
					                        	else {
					                        		echo "<td><select style='width: 100px;' id='col1' name='col1'><option value='selected1' selected disabled>SELECT</option>'.$carers.'</select></td>";
					                        	}

				                        	  if(empty($day)) {
								              	echo "<td><input type='date' id='col3' name='col3' /></td>";
								              }
								              else {
								              	echo "<td>".$day."</td>";
								              }

								              if(empty($altime)) {
								              	echo "<td><select style='width: 100px;' id='col2' name='col2'><option value='selected1' selected disabled>SELECT</option>'.$list.'</select></td>";
								              }
								              else {
								              	echo "<td>".$altime."</td>";
								              }

								              if($stat == 'yes' || $stat == 'Yes') {
						                        	echo '<td><span class="label label-success">Completed</span></td>
						                        		<td><input type="submit" name="remove" class="btn btn-danger" value="Remove"/><input type="hidden" name="rid" value="'.$id.'"/></td>';
						                        }
					                  	      else {
					                        	echo '<td><span class="label label-warning">In Process</span></td>';
					                          }

					                          if(empty($car) || empty($altime) && empty($day)) {
					                          	echo "<td><input type='submit' name='submit' class='btn btn-success' value='Update'/><input type='hidden' name='id' value='{$id}'/></td>";
					                          }
					                          else {
					                          	echo "<td></td>";
					                          }
								    
								    echo "</tr>
								    	</form>";
								}
							}
						?>
						</table>
	    	</div>
			</form>	        
		</div>
	</div>
</body>
</html>

<style type="text/css">
	body, html {
		background-repeat: no-repeat;
		background: rgb(185,210,224); /* Old browsers */
		background: -moz-radial-gradient(center, ellipse cover,  rgba(185,210,224,1) 0%, rgba(187,214,228,1) 0%, rgba(186,211,225,1) 15%, rgba(186,211,225,1) 38%, rgba(169,199,215,1) 68%, rgba(169,199,215,1) 68%, rgba(169,199,215,1) 82%, rgba(158,191,208,1) 100%); /* FF3.6-15 */
		background: -webkit-radial-gradient(center, ellipse cover,  rgba(185,210,224,1) 0%,rgba(187,214,228,1) 0%,rgba(186,211,225,1) 15%,rgba(186,211,225,1) 38%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 82%,rgba(158,191,208,1) 100%);
	}
	.table{
		background: white;
	}
</style>