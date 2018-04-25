<?php
  session_start();
  include "navbar.php"; 
  include "../config.php";

  if(isset($_POST['submit'])) {
      $update_id = $_POST['id'];

      $query = "UPDATE services 
                SET status = 'Yes'
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
  <title></title>
</head>
<body>
  <form method="POST">
    <div class="container" style="margin-top: 100px;">   
    <div class="widget stacked widget-table action-table">    
    <div class="widget-header">
    <i class="icon-th-list"></i>
    <h3>Current Allocated Services</h3>
    </div>
    <div class="widget-content">
    <table class="table table-striped table-bordered">
            <tr>
              <th>#</th>
              <th>Service</th>
              <th>Elderly</th>
              <th>Location</th>
              <th>Attending</th>
              <th>Completed?</th>
            </tr>
            <?php
              $i = 0;
              $cid = $_SESSION['id'];

              $query2 = "SELECT * FROM users WHERE username = '$cid'";
              $result2 = mysqli_query($conn, $query2);

              while($row = mysqli_fetch_array($result2)) {
                $carid = $row['id'];

              $query = "SELECT * FROM services WHERE carer = '$carid'";
              $result_set = mysqli_query($conn, $query);
              while($result = mysqli_fetch_array($result_set)) {
                  $id = $result['id'];
                  $service1 = $result['service'];
                  $stat = $result['status'];
                  $eid = $result['elderly_id'];
                  $car = $result['carer'];
                  $day = $result['day_attending'];
                  $altime = $result['time_attending'];

                  $sql1 = "SELECT * FROM elderly WHERE id = '$eid'";
                  $result1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));

                  while($row1 = mysqli_fetch_array($result1)) {
                    $elderly1 = $row1['name'];
                    $elderly1a = $row1['surname'];
                    $location = $row1['address'];

                    $efullname = $elderly1 . " " . $elderly1a;

                    $i++;

                    if($stat == 'No' || $stat == 'no') {
                      echo "<form action='home.php' method='POST'>";
                      echo "<tr>
                          <td>".$i."</td>
                                <td>".$service1."</td>
                                <td>".$efullname."</td>
                                <td>".$location."</td>";
                      echo "<td><b>Day:</b> ".$day.' <b>Time:</b> '.$altime."</td>";
                      echo "<td><input type='submit' name='submit' value='Completed'/><input type='hidden' name='id' value='{$id}'/></td>";
                      
                      echo "</tr>
                        </form>";
                    }
                }
              }
            }
            ?>
        </table>
    </div> 
    </div> 
    </div>
  </form>
</body>
</html>

<style type="text/css">
  .table-bordered {
    border: 1px solid #dddddd;
    border-collapse: separate;
    border-left: 0;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
  }

  .table {
    width: 100%;
    margin-bottom: 20px;
    background-color: transparent;
    border-collapse: collapse;
    border-spacing: 0;
    display: table;
  }

  .widget.widget-table .table {
    margin-bottom: 0;
    border: none;
  }

  .widget.widget-table .widget-content {
    padding: 0;
  }

  .widget .widget-header + .widget-content {
    border-top: none;
    -webkit-border-top-left-radius: 0;
    -webkit-border-top-right-radius: 0;
    -moz-border-radius-topleft: 0;
    -moz-border-radius-topright: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

  .widget .widget-content {
    padding: 20px 15px 15px;
    background: #FFF;
    border: 1px solid #D5D5D5;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
  }

  .widget .widget-header {
    position: relative;
    height: 40px;
    line-height: 40px;
    background: #E9E9E9;
    background: -moz-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fafafa), color-stop(100%, #e9e9e9));
    background: -webkit-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
    background: -o-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
    background: -ms-linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
    background: linear-gradient(top, #fafafa 0%, #e9e9e9 100%);
    text-shadow: 0 1px 0 #fff;
    border-radius: 5px 5px 0 0;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1),inset 0 1px 0 white,inset 0 -1px 0 rgba(255,255,255,0.7);
    border-bottom: 1px solid #bababa;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
    border: 1px solid #D5D5D5;
    -webkit-border-top-left-radius: 4px;
    -webkit-border-top-right-radius: 4px;
    -moz-border-radius-topleft: 4px;
    -moz-border-radius-topright: 4px;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    -webkit-background-clip: padding-box;
  }

  thead {
    display: table-header-group;
    vertical-align: middle;
    border-color: inherit;
  }

  .widget .widget-header h3 {
    top: 2px;
    position: relative;
    left: 10px;
    display: inline-block;
    margin-right: 3em;
    font-size: 14px;
    font-weight: 600;
    color: #555;
    line-height: 18px;
    text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
  }

  .widget .widget-header [class^="icon-"], .widget .widget-header [class*=" icon-"] {
    display: inline-block;
    margin-left: 13px;
    margin-right: -2px;
    font-size: 16px;
    color: #555;
    vertical-align: middle;
  }
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