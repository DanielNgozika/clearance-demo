<?php include("header.php");?>

<?php

$module_address  = $_GET['module_address'];
$module_name = "";


switch($_GET['module_address']){

	case "security_step.php":
			$module_name = "Security Clearance";
			break;

	case "financial_step.php":
			$module_name= "Financial Clearance";
			break;

	case "library_step.php":
			$module_name= "Library Clearance";
			break;

}

?>
		
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
		 
		</div><!--/.row-->
		
		<div class="row">
		<div class="col-lg-12">
 

		<div class='col-md-5 col-md-offset-3' style='margin-top:20px;'>
		<h2 style='text-align:center;'><?php echo $module_name;?> </h2>

		<h3 style='text-align:center;'> Please fill the form below  </h3>
		<form class='form-horizontal' action='<?php echo $module_address;?>'>
			<div class='form-group'>	
			<label class='form-label'> Reg No: </label>
			<input class='form-control' placeholder='Reg No: '/>
			</div>


			<div class='form-group'>
			<label class='form-label'> Payment Receipt No: </label>
			<input class='form-control' placeholder='Receipt No: '/>
			</div>



			<div class='form-group'>
			<label class='form-label'> Payment Date: </label>
			<input class='form-control' placeholder='DD/MM/YY: '/>
			</div>


			<div class='form-group'>
			<label class='form-label'> Upload a Passport of yourself: </label>
			<input class='form-control' type='file' placeholder='Receipt No: '/>
			</div>

			<div style='text-align:center'>
			<input class='btn btn-primary' type='submit' value='submit'/>
			</div>
		</form>	
		</div>
		  
			</div></div>
<?php include("footer.php");?>
