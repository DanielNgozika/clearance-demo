<?php include("header.php");?>
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Outstanding Fees</li>
			</ol>
		</div><!--/.row-->

				<div class="row">
			<div class="col-lg-12">
			</div>
			
			<div class="col-md-6">
				<div class="panel panel-blue">
					<div class="panel-heading dark-overlay">Security</div>
					<div class="panel-body">
						<p>You have <a style="color:red;" href="security.php">four</a> issues to resolve at Security.</p>
					</div>
				</div>
			</div><!--/.col-->
			
			<div class="col-md-6">
				<div class="panel panel-teal">
					<div class="panel-heading dark-overlay">Library</div>
					<div class="panel-body">
						<p>You have <a  style="color:red;"  href="library.php">five</a> issues to resolve at Library.</p>
					</div>
				</div>
			</div><!--/.col-->
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="panel panel-orange">
					<div class="panel-heading dark-overlay">Alumni ID Card</div>
					<div class="panel-body">

						<p>Click <a onclick="show();" href="#">Here</a> to pay N6,500 for your Alumni ID Card</p>
					</div>
				</div>
			</div><!--/.col-->
			
			
			</div><!--/.col-->
		</div><!--/.row-->	
<script type="text/javascript">
	function show(){
		alert("NOTICE: You Must Be Cleared From All Other Departments Before You Can Pay For Your ID Card!");
	}
</script>r
<?php include("footer.php");?>