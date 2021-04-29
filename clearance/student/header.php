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

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style='background-color:green; height:10%;'>
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src='unn_logo.jpg' style='width:40px; height:40px; padding:5px;'/><span>E</span>-Clearance</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><img src='passport.jpg' width:30px;/><use xlink:href="#stroked-male-user"></use></svg> <br/> <svg class="glyph stroked male-user"></svg> Profile</a></li>
							
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active" style=><a href="indexbackup.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="financial.php"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"></use></svg>Start Clearance</a></li>
 			
			 	<li><a href="outstanding.php"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"></use></svg>Outstanding Fees</a></li>
 			<li><a href="alumni_id_card.php"  ><svg class="glyph stroked open-folder"><use xlink:href="#stroked-open-folder"></use></svg>Alumni ID Card</a></li>
			<li><a href="help.php"><svg class="glyph stroked clock"><use xlink:href="#stroked-clock"></use></svg>Help Desk</a></li>

 		 <li><a href="#"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Log Out</a></li>
		
			<li role="presentation" class="divider"></li>
 		</ul>

	</div><!--/.sidebar--><script type="text/javascript">function show(){alert("NOTICE: You must clear every other section before applying for an Alumni ID Card!");}</script>
		
