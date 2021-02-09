
<?php

if(isset($_POST['submit']))
{
$joindate=$_POST['joindate'];
$EmpId=$_POST['EmpId'];
$Designation=$_POST['Designation'];
$PromotedBy=$_POST['PromotedBy'];
$EmployeeName=$_POST['EmployeeName'];
$Address=$_POST['Address'];
$Contact=$_POST['Contact'];
$Gender=$_POST['Gender'];
$Qualification=$_POST['Qualification'];
$Salary=$_POST['Salary'];
$Provident=$_POST['Provident'];
$Reference=$_POST['Reference'];



$coon=mysql_connect("localhost","root","");
mysql_select_db("smartphone",$coon);

mysql_query ("insert into employee(JoinDate,EmpID,Designation,PromotedBy,EmployeeName,Address,Contact,Gender,Qualification,Salary,ProvidentFund,ReferenceDetails)
 value('$joindate','$EmpId','$Designation','$PromotedBy','$EmployeeName','$Address','$Contact','$Gender','$Qualification','$Salary','$Provident','$Reference')",$coon);

}	
?>


<!DOCTYPE html>
<html>
<title> Employee Registration </title>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expnad-lg bg-lighter fixed top" style="background-color:offwhite;width:100%;box-shadow:5px 5px 5px #888888;margin-bottom:5px;">
<a href=gstpage.php>
<i class="fas fa-arrow-left" style="18px"></i></a>
<span style="margin-left:auto;margin-right:auto;font-size:20px;font-weight:bold;text-align:center;font-family:Candara">Employee Registration</span>
</nav>

<div class="container" style="padding-top:50px">
<p id="error"></p>

<form method="post" id="insert_form">
	<div class="row">
		<div class="col-6">
			<div class="form-group">
		<!--	<label for="name" style="font-family:cambria font-size:15px"> Logo</label> &nbsp;&nbsp;&nbsp;  -->
				<img src="user1.jpg" class="img-thumbnail float-left" style="width:200px;height:160px" alt="firm"> 
				
				
				</div>
			</div>
			
		<div class="col-6">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> Joining Date </label> &nbsp;&nbsp;&nbsp;
				<input type="date" id="joindate" name="joindate" required>
			</div>
		</div>
	</div>
	
	<div class="row" style="text-align:center">
		<div class="col-6">
			<div class="form-group">
				<label for="name" style="fonr-family:cambria"> Employee ID No</label> 
				<input type="text" class="form-control" name="EmpId" id="EmpId" style="font-family:cambria" required>
			</div>
		</div>
		
		<div class="col-6">
			<div class="form-group">
				<label for="name" style="fonr-family:cambria"> Designation</label> 
				<input type="text" class="form-control" name="Designation" id="Designation" style="font-family:cambria" required>
			</div>
		</div>
	</div>
	
	<div class="row" style="text-align:center">
		<div class="col-12">
			<div class="form-group">
				<label for="name" style="fonr-family:cambria text-align:center"> Promoted By</label> 
				<input type="text" class="form-control" name="PromotedBy" id="PromotedBy" style="font-family:cambria text-align:center" required><br></br>
			</div>
		</div>
	</div>	
	
	<div class="row" style="text-align:center">
		<div class="col-6">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> Employee Name</label> 
				<input type="text" class="form-control" name="EmployeeName" id="EmployeeName" style="font-family:cambria" required>
			</div>
		</div>
		
		<div class="col-6">
			<div class="form-group">
				<label for="name" style="font-family:cambria">Address</label>
				<input type="text" class="form-control input-lg" name="Address" id="Address" style="font-family:cambria" required >
			</div>
		</div>
	</div>
	
		<div class="row" style="text-align:center">
		<div class="col-6">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> Contact</label> 
				<input type="text" class="form-control" name="Contact" id="Contact" style="font-family:cambria" required>
			</div>
		</div>
		
		<div class="col-6">
			<div class="form-group">
				<label for="name" style="font-family:cambria">Gender</label>
				<select class="browser-default custom-select" style="font-family:cambria" name="Gender" id="Gender">
		<option selected disabled> <b> Select Gender </b> </option>
		<option> <b> Male </b> </option>
		<option> <b> Female </b> </option>
				</select>
			</div>
		</div>
	</div>
	
	<div class="row" style="text-align:center">
		<div class="col-6">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> Qualification</label> 
				<input type="text" class="form-control" name="Qualification" id="Qualification" style="font-family:cambria" required>
			</div>
		</div>
		
		<div class="col-6">
			<div class="form-group">
				<label for="name" style="font-family:cambria">Salary</label>
				<input type="text" class="form-control" name="Salary" id="Salary" style="font-family:cambria" required >
			</div>
		</div>
	</div>
	
	<div class="row" style="text-align:center">
		<div class="col-6">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> Provident Fund No</label> 
				<input type="text" class="form-control" name="Provident" id="Provident" style="font-family:cambria" required>
			</div>
		</div>
		
		<div class="col-6">
			<div class="form-group">
				<label for="name" style="font-family:cambria">Reference Details</label>
				<input type="text" class="form-control input-lg" name="Reference" id="Reference" style="font-family:cambria" required >
			</div>
		</div>
	</div>
	
	<!--<div class="row" style="text-align:center">
		<div class="col-6">
			<div class="form-group">
				<label	style="font-family:cambria"> Upload ID </label> <br></br>
				<input type="file" name="imageid" id="imageid" class="file" accept="image/* " required>
			</div>
		</div>
		
		<div class="col-6">
			<div class="form-group">
				<label	style="font-family:cambria"> Upload Image </label> <br></br>
				<input type="file" name="imageimage" id="imageimage" class="file" accept="image/* " required>
			</div>
		</div>
		
	</div>-->
	
	<div class="row">
		<div class="form-group " style="margin-left:auto;margin-right:auto;">
    <button type="submit" style="font-family:cambria margin-left:auto;margin-right:auto;" class="btn btn-outline-primary" name="submit">Save</button>
		</div>
	</div>
</div>
</body>
</html>










































