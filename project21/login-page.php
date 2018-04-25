<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<?php include "config.php"; ?>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://use.typekit.net/ayg4pcz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>
    <div class="container">
    <h1 class="welcome text-center">Welcome to <br> Services</h1>
        <div class="card card-container">
        <h2 class='login_title text-center'>Login</h2>
        <hr>
            <form class="form-signin" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Username</p>
                <input type="text" id="username" name="username" class="login_box" placeholder="Username" required autofocus>
                <p class="input_title">Password</p>
                <input type="password" id="password" name="password" class="login_box" placeholder="Password" required>
                <div id="remember" class="checkbox">
                </div>
                <button class="btn btn-lg btn-primary" name="submit" type="submit">Login</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</html>

<style type="text/css">
	
body, html {
    height: 100%;
    background-repeat: no-repeat;
	background: rgb(185,210,224); /* Old browsers */
	background: -moz-radial-gradient(center, ellipse cover,  rgba(185,210,224,1) 0%, rgba(187,214,228,1) 0%, rgba(186,211,225,1) 15%, rgba(186,211,225,1) 38%, rgba(169,199,215,1) 68%, rgba(169,199,215,1) 68%, rgba(169,199,215,1) 82%, rgba(158,191,208,1) 100%); /* FF3.6-15 */
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(185,210,224,1) 0%,rgba(187,214,228,1) 0%,rgba(186,211,225,1) 15%,rgba(186,211,225,1) 38%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 82%,rgba(158,191,208,1) 100%); /* Chrome10-25,Safari5.1-6 */
	background: radial-gradient(ellipse at center,  rgba(185,210,224,1) 0%,rgba(187,214,228,1) 0%,rgba(186,211,225,1) 15%,rgba(186,211,225,1) 38%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 68%,rgba(169,199,215,1) 82%,rgba(158,191,208,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b9d2e0', endColorstr='#9ebfd0',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

	}

	.login_box{
	    background:#f7f7f7;
	    border:3px solid #F4F4F4;
	    padding-left: 15px;
	    margin-bottom:25px;
	    }
	.input_title{
	    color:rgba(164, 164, 164, 0.9);
	    padding-left:3px;
	        margin-bottom: 2px;
	    }

	hr{
	    width:100%;
	}
	    
	.welcome{
	    font-family: "myriad-pro",sans-serif;
	    font-style: normal;
	    font-weight: 100;
	    color:#FFFFFF;
	    margin-bottom:25px;
	    margin-top:50px;

	}

	.login_title{
	    font-family: "myriad-pro",sans-serif;
	    font-style: normal;
	    font-weight: 100;
	    color:rgba(164, 164, 164, 0.44);
	}

	.card-container.card {
	    max-width: 350px;

	}

	.btn {
	    font-weight: 700;
	    height: 36px;
	    -moz-user-select: none;
	    -webkit-user-select: none;
	    user-select: none;
	    cursor: default;
	    border-radius:0;
	    background:#43A6EB;
	    height: 55px;
	    margin-bottom:10px;
	}

	/*
	 * Card component
	 */
	.card {
	    background-color: #FFFFFF;
	    /* just in case there no content*/
	    padding: 1px 25px 30px;
	    margin: 0 auto 25px;
	    margin-top: 15%x;
	    /* shadows and rounded borders */
	    -moz-border-radius: 2px;
	    -webkit-border-radius: 2px;
	    border-radius: 2px;
	    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	}

	.profile-img-card {
	    width: 96px;
	    height: 96px;
	    margin: 0 auto 10px;
	    display: block;
	    -moz-border-radius: 50%;
	    -webkit-border-radius: 50%;
	    border-radius: 50%;
	}

	/*
	 * Form styles
	 */
	.profile-name-card {
	    font-size: 16px;
	    font-weight: bold;
	    text-align: center;
	    margin: 10px 0 0;
	    min-height: 1em;
	}

	.reauth-email {
	    display: block;
	    color: #404040;
	    line-height: 2;
	    margin-bottom: 10px;
	    font-size: 14px;
	    text-align: center;
	    overflow: hidden;
	    text-overflow: ellipsis;
	    white-space: nowrap;
	    -moz-box-sizing: border-box;
	    -webkit-box-sizing: border-box;
	    box-sizing: border-box;
	}

	.form-signin #inputEmail,
	.form-signin #inputPassword {
	    direction: ltr;
	    height: 44px;
	    font-size: 16px;
	}

	.form-signin input[type=email],
	.form-signin input[type=password],
	.form-signin input[type=text],
	.form-signin button {
	    width: 100%;
	    display: block;

	    z-index: 1;
	    position: relative;
	    -moz-box-sizing: border-box;
	    -webkit-box-sizing: border-box;
	    box-sizing: border-box;
	}

	.form-signin .form-control:focus {
	    border-color: rgb(104, 145, 162);
	    outline: 0;
	    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
	    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
	}

	.btn.btn-signin {
	    /*background-color: #4d90fe; */
	    background-color: rgb(104, 145, 162);
	    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
	    padding: 0px;
	    font-weight: 700;
	    font-size: 14px;
	    height: 36px;
	    -moz-border-radius: 3px;
	    -webkit-border-radius: 3px;
	    border-radius: 3px;
	    border: none;
	    -o-transition: all 0.218s;
	    -moz-transition: all 0.218s;
	    -webkit-transition: all 0.218s;
	    transition: all 0.218s;
	}

	.btn.btn-signin:hover,
	.btn.btn-signin:active,
	.btn.btn-signin:focus {
	    background-color: rgb(12, 97, 33);
	}

	.forgot-password {
	    color: rgb(104, 145, 162);
	}

	.forgot-password:hover,
	.forgot-password:active,
	.forgot-password:focus{
	    color: rgb(12, 97, 33);
	}
</style>

<?php
  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass'";
    $result = mysqli_query($conn, $sql)  or die("Could not connect database " .mysqli_error($conn));

    if (!$row = $result->fetch_assoc()) {
      // ERROR MESSAGE SHOWS AT THE TOP OF THE PAGE
    } else {
      $_SESSION['id'] = $row['username'];

      if($row['account_type'] == 'Coordinator' || $row['account_type'] == 'coordinator' || $row['account_type'] == 'Carer' || $row['account_type'] == 'carer') {

        $_SESSION['account_type'] = $row['account_type'];

        if(isset($_SESSION['account_type'])) {
          if($_SESSION['account_type'] == 'Coordinator' || $row['account_type'] == 'coordinator') {
            ?>

            <script type="text/javascript">
				window.location.href = 'admin/home.php';
			</script>

            <?php
          }
          else if($_SESSION['account_type'] == 'Carer' || $row['account_type'] == 'carer') {
            ?>

            <script type="text/javascript">
				window.location.href = 'carers/home.php';
			</script>

            <?php
          }
        }
      }
      else {
        echo "Role not found.";
      }
    }
  }
?>