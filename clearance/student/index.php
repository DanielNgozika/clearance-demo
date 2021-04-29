<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>E-Clearance</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body style="background-image:url('home.jpg');">
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><span>E</span>-Clearance</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
	



<div class="col-md-6 col-md-offset-3   main"  style='padding:10%;'>			
		   
				<h1 style='text-align:center;'>Log In</h1> 
				<div class="panel panel-default" style="padding:1em;">
				<form role="form" action="financial.php">
					
								<div class="form-group has-success">
								<label>Reg No</label>
									<input class="form-control" placeholder="Reg No">
								</div>
								<div class="form-group has-success">
								<label>password</label>
									<input class="form-control" placeholder="password" type='password'>
								</div>
								<div style='text-align:center;'>
									<input type="submit" class="btn btn-primary" value="Login">
								</div>
								</form>
				</div> 
			</div> 

			
			 
			 
			 
<div class="col-lg-4"></div>

	<!--/.row-->
 </div>			
			<?php include("footer.php");?>