<?php include("header.php"); ?>



<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">New Alumni ID Card</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Fill Form Below to Create Alumni ID Card</h1>
				<div>
					<form>
						<div class="form-group">
						<label>Student Name:</label>
							<select ><option>Select Student to Assign ID</option><option>Okonkwo 	Beatrice 	Susanna</option><option>Craig 	Oputa 	Keneya</option><option>Ehizokhale 	Blessing 	Ehis</option><option>Savage 	Johnson 	Oprima</option></select>
						</div>
						<div class="form-group">
						<label>Select Passport:</label>
						<input type="file" name="">
						</div>
						<div class="form-group">
						
						<input onclick="show();" type="submit" class="btn btn-primary" value="Print ID" name="">
						</div>
					</form>
				</div>
			</div>
		</div><!--/.row-->
		
						
<script type="text/javascript">
	function show()
	{
		alert("ID Card Printed Succcessfully!"); 
	}
</script>