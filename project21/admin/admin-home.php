<!DOCTYPE html>
<html>
<head>
	<?php 
		include "admin-navbar.php";
	?>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title></title>
</head>
<body>
    <div class="sidebar-nav">
	    <div class="well" style="width:300px; padding: 50px 15px;">
			<ul class="nav nav-list"> 
			  <li class="nav-header">Admin Menu</li>        
			  <li><a href="index"><i class="icon-home"></i> Home</a></li>
	          <li><a href="#"><i class="icon-envelope"></i> Alerts</a></li>
			  <li class="active"><a href="#"><i class="icon-user"></i> Users</a></li>
	          <li class="divider"></li>
			  <li><a href="#"><i class="icon-share"></i> Logout</a></li>
			</ul>
		</div>
	</div>
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-primary">
	                <div class="panel-heading">
	                    <span class="glyphicon glyphicon-list"></span>Users
	                    <div class="pull-right action-buttons">
	                        <div class="btn-group pull-right">
	                            <ul class="dropdown-menu slidedown">
	                                <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span>Edit</a></li>
	                                <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-trash"></span>Delete</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel-body">
	                    <ul class="list-group">
	                        <li class="list-group-item">
	                            <div class="checkbox">
	                                <input type="checkbox" id="checkbox" />
	                                <label for="checkbox">
	                                    List group item heading
	                                </label>
	                            </div>
	                            <div class="pull-right action-buttons">
	                                <a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
	                                <a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
	                                <a href="http://www.jquery2dotnet.com" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
	                            </div>
	                        </li>
	                        <li class="list-group-item">
	                            <div class="checkbox">
	                                <input type="checkbox" id="checkbox2" />
	                                <label for="checkbox2">
	                                    List group item heading 1
	                                </label>
	                            </div>
	                           <div class="pull-right action-buttons">
	                                <a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
	                                <a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
	                                <a href="http://www.jquery2dotnet.com" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
	                            </div>
	                        </li>
	                        <li class="list-group-item">
	                            <div class="checkbox">
	                                <input type="checkbox" id="checkbox3" />
	                                <label for="checkbox3">
	                                    List group item heading 2
	                                </label>
	                            </div>
	                            <div class="pull-right action-buttons">
	                                <a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
	                                <a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
	                                <a href="http://www.jquery2dotnet.com" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
	                            </div>
	                        </li>
	                        <li class="list-group-item">
	                            <div class="checkbox">
	                                <input type="checkbox" id="checkbox4" />
	                                <label for="checkbox4">
	                                    List group item heading 3
	                                </label>
	                            </div>
	                            <div class="pull-right action-buttons">
	                                <a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
	                                <a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
	                                <a href="http://www.jquery2dotnet.com" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
	                            </div>
	                        </li>
	                        <li class="list-group-item">
	                            <div class="checkbox">
	                                <input type="checkbox" id="checkbox5" />
	                                <label for="checkbox5">
	                                    List group item heading 4
	                                </label>
	                            </div>
	                           <div class="pull-right action-buttons">
	                                <a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
	                                <a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
	                                <a href="http://www.jquery2dotnet.com" class="flag"><span class="glyphicon glyphicon-flag"></span></a>
	                            </div>
	                        </li>
	                    </ul>
	                </div>
	                <br>
	            </div>
	        </div>
	    </div>
	</div>
</body>
</html>

<style type="text/css">
	.trash { 
		color:rgb(209, 91, 71); 
	}
	.flag { 
		color:rgb(248, 148, 6); 
	}
	.panel-body { 
		padding:0px; 
	}
	.panel-footer .pagination { 
		margin: 0; 
	}
	.panel .glyphicon,.list-group-item .glyphicon { 
		margin-right:5px; 
	}
	.panel-body .radio, .checkbox { 
		display:inline-block;margin:0px; 
	}
	.panel-body input[type=checkbox]:checked + label { 
		text-decoration: line-through;color: rgb(128, 144, 160); 
	}
	.list-group-item:hover, a.list-group-item:focus {
		text-decoration: none;background-color: rgb(245, 245, 245);
	}
	.list-group { 
		margin-bottom:0px; 
	}
	.navbar-login
	{
	    width: 305px;
	    padding: 10px;
	    padding-bottom: 0px;
	}

	.navbar-login-session
	{
	    padding: 10px;
	    padding-bottom: 0px;
	    padding-top: 0px;
	}

	.icon-size
	{
	    font-size: 87px;
	}
</style>