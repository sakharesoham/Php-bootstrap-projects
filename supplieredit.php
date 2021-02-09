
<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"smartphone");
$Eid=$_REQUEST['id'];

$msg="";

if(isset($_POST['edit']))
  {
      
      $uid=$_POST['userid'];
$regtype=$_POST['regtype'];
$Cname=$_POST['Cname'];
$Date=$_POST['Date'];
$time=$_POST['time'];
$Sname=$_POST['Sname'];
$CPname=$_POST['CPname'];
$CompanyGSTNo=$_POST['CompanyGSTNo'];
$ContactNo=$_POST['ContactNo'];
$CompanyAddress=$_POST['CompanyAddress'];
$State=$_POST['State'];
$City=$_POST['City'];
$SBalance=$_POST['SBalance'];
$BName=$_POST['BName'];
$Account=$_POST['Account'];
$IFSC=$_POST['IFSC'];
$MICR=$_POST['MICR'];


    $query=mysqli_query($con, "update tblSupplier set RegType='$regtype',CompanyName='$Cname',Date='$Date',Time='$time',
	SupplierName='$Sname',ContactPersonName='$CPname',CompanyGST='$CompanyGSTNo',ContactNo='$ContactNo',
	CompAddress='$CompanyAddress',State='$State',City='$City',SupplierBalance='$SBalance',BankName='$BName',
	AccNo='$Account',IFSC='$IFSC',MICR='$MICR' where SupplierID='$uid'" );
    if ($query) {
    $msg="Product has been Updated.";
     header("location: supplier.php");
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
  
    }

  
}

  ?>

<!DOCTYPE html>
<html lang="en">
<title>Edit Supplier Registration </title>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body style="background-color:lighter">
<nav class="navbar navbar-expand bg-lighter" style="background-color:lighter; width:100%; box-shadow:2px 2px 2px #888888;margin-bottom:5px">
 <a href="supplier.php">
 <i class="fas fa-arrow-left" style="18px"></i></a>
 <span style="margin-left:auto;margin-right:auto;font-size:20px;font-weight:bold;text-align:center;font-family:Candara">Edit Supplier Registration</span>
</nav>
   <?php
 $Eid=$_REQUEST['id'];
$ret=mysqli_query($con,"select SupplierID,RegType,CompanyName,Date,Time,SupplierName,ContactPersonName,CompanyGST,ContactNo,CompAddress,State,City,SupplierBalance,BankName,AccNo,IFSC,MICR from tblSupplier where SupplierID='$Eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<div class="container" style="margin-top:30px">
<form method="post"  id="insert-form">
<div class="row">
	<div class="col-2">
		<div class="form-group">
		<label for="name" style="font-family:cambria">Registration Type</label>
		<select class="browser-default custom-select" style="font-family:cambria" name="regtype">
		<option value="<?php  echo $row['RegType'];?>"><b> <?php  echo $row['RegType'];?> <b></option>
		<option value="Registered"> <b> Registered </b> </option>
		<option value="UnRegistered"> <b> UnRegistered </b> </option>
		</select>
		</div>
	</div> &nbsp;
	
	<div class="col-3">
		<div class="form-group">
		<label for="name" style="font-family:cambria"> Company Name </label>
		<input type="text" class="form-control" style="font-family:cambria" name="Cname"  value="<?php  echo $row['CompanyName'];?>" required>
		</div>
	</div> &nbsp;
	
	<div class="col-3">
		<div class="form-group">
		<label for="name" style="font-family:cambria">Date n Time</label>
		<input type="date" value="<?php  echo $row['Date'];?>" class="form-control" style="font-family:cambria" name="Date"  >
		<input type="time" value="<?php  echo $row['Time'];?>" class="form-control" style="font-family:cambria" name="time"  >
		</div>
	</div>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<div class="col-2">
		<div class="form-group">
		<img src="supplier.png" class="img-thumbnail float-left" style="width:100%;height:150px">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-6" style="text-align:center">
		<div class="form-group">
			<label for="name" style="font-family:cambria">Supplier Name</label>
			<input type="text" value="<?php  echo $row['SupplierName'];?>" class="form-control" style="font-family:Candara" name="Sname"  required>
		</div>
	</div>
	
	<div class="col-6" style="text-align:center">
		<div class="form-group">
			<label for="name" style="font-family:cambria">Contact Person Name</label>
			<input type="text" value="<?php  echo $row['ContactPersonName'];?>" class="form-control" style="font-family:Candara" name="CPname"  required>
		</div>
	</div>
</div>

<div class="row">
		<div class="col-6" style="text-align:center">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> Company GST No </label>
				<input type="text" value="<?php  echo $row['CompanyGST'];?>" class="form-control" style="font-family:cambria" name="CompanyGSTNo"  required>
				</div>
		</div>
			
		<div class="col-6">
			<div class="form-group" style="text-align:center"> 
				<label for="name" style="font-family:cambria"> Contact No </label>
				<input type="text" value="<?php  echo $row['ContactNo'];?>" class="form-control" style="font-family:cambria" name="ContactNo"  required>
			</div>
		</div>
</div>

<div class="row">
		<div class="col-6" style="text-align:center">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> Company Address </label>
				<input type="text" value="<?php  echo $row['CompAddress'];?>" class="form-control input-lg" style="font-family:cambria" name="CompanyAddress"  required>
				</div>
		</div>
			
		<div class="col-6">
			<div class="form-group" style="text-align:center"> 
				<label for="name" style="font-family:cambria"> State </label>
				<input type="text" value="<?php  echo $row['State'];?>" class="form-control" style="font-family:cambria" name="State"  required>
			</div>
		</div>
</div>

<div class="row">
		<div class="col-6" style="text-align:center">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> City </label>
				<input type="text" value="<?php  echo $row['City'];?>" class="form-control input-lg" style="font-family:cambria" name="City"  required>
				</div>
		</div>
			
		<div class="col-6">
			<div class="form-group" style="text-align:center"> 
				<label for="name" style="font-family:cambria"> Supplier Balance </label>
				<input type="text" value="<?php  echo $row['SupplierBalance'];?>" class="form-control" style="font-family:cambria" name="SBalance"  required>
			</div>
		</div>
</div>

<div class="row";"text-leftS" style="text-align:center;font-family:Candara;font-weight:bold;font-size:25px">
	<div class="col-12">
		
<label style="font-family:cambria"> Add Bank Account Details </label>
		
	</div>
</div>


<div class="row">
		<div class="col-6" style="text-align:center">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> Bank Name </label>
				<input type="text" value="<?php  echo $row['BankName'];?>" class="form-control input-lg" style="font-family:cambria" name="BName" required>
				</div>
		</div>
			
		<div class="col-6">
			<div class="form-group" style="text-align:center"> 
				<label for="name" style="font-family:cambria"> Account No </label>
				<input type="text" value="<?php  echo $row['AccNo'];?>" class="form-control" style="font-family:cambria" name="Account"  required>
			</div>
		</div>
</div>

<div class="row">
		<div class="col-6" style="text-align:center">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> IFSC Code </label>
				<input type="text" value="<?php  echo $row['IFSC'];?>" class="form-control input-lg" style="font-family:cambria" name="IFSC"  required>
				</div>
		</div>
			
		<div class="col-6">
			<div class="form-group" style="text-align:center"> 
				<label for="name" style="font-family:cambria"> MIRC Code </label>
				<input type="text" value="<?php  echo $row['MICR'];?>" class="form-control" style="font-family:cambria" name="MICR"  required>
			</div>
		</div>
</div>
	
	<div class="col-12" style="text-align:center">
		<div style="margin-left:auto;margin-right:auto">
		      <input  type="hidden" name="userid" value="<?php echo $Eid; ?>" >
	<button type="submit" class="btn btn-warning" name="edit" style="font-family:cambria">Save Changes</button>
		</div>
	</div>
	
</div>
</body>
</html>
<?php } ?>