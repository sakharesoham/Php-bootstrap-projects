<?php

if(isset($_POST['submit']))
{
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

$coon=mysql_connect("localhost","root","");
mysql_select_db("smartphone",$coon);

mysql_query ("insert into tblSupplier(RegType,CompanyName,Date,Time,SupplierName,ContactPersonName,CompanyGST,ContactNo,CompAddress,State,City,SupplierBalance,BankName,AccNo,IFSC,MICR)
 value('$regtype','$Cname','$Date','$time','$Sname','$CPname','$CompanyGSTNo','$ContactNo','$CompanyAddress','$State','$City','$SBalance','$BName','$Account','$IFSC','$MICR')",$coon);

}	
?>


<!DOCTYPE html>
<html lang="en">
<title> Supplier Registration </title>
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
 <a href="Dsiplay.php">
 <i class="fas fa-arrow-left" style="18px"></i></a>
 <span style="margin-left:auto;margin-right:auto;font-size:20px;font-weight:bold;text-align:center;font-family:Candara">Supplier Registration</span>
</nav>

<div class="container" style="margin-top:30px">
<form method="post" id="insert-form">
<div class="row">
	<div class="col-2">
		<div class="form-group">
		<label for="name" style="font-family:cambria">Registration Type</label>
		<select class="browser-default custom-select" style="font-family:cambria" name="regtype">
		<option selected disabled ><b> Select Type of Registration <b></option>
		<option> <b> Registered </b> </option>
		<option> <b> UnRegistered </b> </option>
		</select>
		</div>
	</div> &nbsp;
	
	<div class="col-3">
		<div class="form-group">
		<label for="name" style="font-family:cambria"> Company Name </label>
		<input type="text" class="form-control" style="font-family:cambria" name="Cname" id="Cname" required>
		</div>
	</div> &nbsp;
	
	<div class="col-3">
		<div class="form-group">
		<label for="name" style="font-family:cambria">Date n Time</label>
		<input type="date" class="form-control" style="font-family:cambria" name="Date" id="Date" >
		<input type="time" class="form-control" style="font-family:cambria" name="time" id="time" >
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
			<input type="text" class="form-control" style="font-family:Candara" name="Sname" id="Sname" required>
		</div>
	</div>
	
	<div class="col-6" style="text-align:center">
		<div class="form-group">
			<label for="name" style="font-family:cambria">Contact Person Name</label>
			<input type="text" class="form-control" style="font-family:Candara" name="CPname" id="CPname" required>
		</div>
	</div>
</div>

<div class="row">
		<div class="col-6" style="text-align:center">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> Company GST No </label>
				<input type="text" class="form-control" style="font-family:cambria" name="CompanyGSTNo" id="CompanyGSTNo" required>
				</div>
		</div>
			
		<div class="col-6">
			<div class="form-group" style="text-align:center"> 
				<label for="name" style="font-family:cambria"> Contact No </label>
				<input type="text" class="form-control" style="font-family:cambria" name="ContactNo" id="ContactNo" required>
			</div>
		</div>
</div>

<div class="row">
		<div class="col-6" style="text-align:center">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> Company Address </label>
				<input type="text" class="form-control input-lg" style="font-family:cambria" name="CompanyAddress" id="CompanyAddress" required>
				</div>
		</div>
			
		<div class="col-6">
			<div class="form-group" style="text-align:center"> 
				<label for="name" style="font-family:cambria"> State </label>
				<input type="text" class="form-control" style="font-family:cambria" name="State" id="State" required>
			</div>
		</div>
</div>

<div class="row">
		<div class="col-6" style="text-align:center">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> City </label>
				<input type="text" class="form-control input-lg" style="font-family:cambria" name="City" id="City" required>
				</div>
		</div>
			
		<div class="col-6">
			<div class="form-group" style="text-align:center"> 
				<label for="name" style="font-family:cambria"> Supplier Balance </label>
				<input type="text" class="form-control" style="font-family:cambria" name="SBalance" id="SBalance" required>
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
				<input type="text" class="form-control input-lg" style="font-family:cambria" name="BName" id="BName" required>
				</div>
		</div>
			
		<div class="col-6">
			<div class="form-group" style="text-align:center"> 
				<label for="name" style="font-family:cambria"> Account No </label>
				<input type="text" class="form-control" style="font-family:cambria" name="Account" id="Account" required>
			</div>
		</div>
</div>

<div class="row">
		<div class="col-6" style="text-align:center">
			<div class="form-group">
				<label for="name" style="font-family:cambria"> IFSC Code </label>
				<input type="text" class="form-control input-lg" style="font-family:cambria" name="IFSC" id="IFSC" required>
				</div>
		</div>
			
		<div class="col-6">
			<div class="form-group" style="text-align:center"> 
				<label for="name" style="font-family:cambria"> MIRC Code </label>
				<input type="text" class="form-control" style="font-family:cambria" name="MICR" id="MICR" required>
			</div>
		</div>
</div>


	<div class="form-group row" style="text-align:center">
	<div class="col-12">
		<div style="margin-left:auto;margin-right:auto">
	<button type="submit" class="btn btn-success" name="submit" style="font-family:cambria">Save</button>
		</div></div>
	
	</div>

<div class="container" style="padding-top:50px">
<input type="text" class="form-control" style="font-family:cambria" id="myInput" placeholder="Search.."><br></br>
	<div class="card-shadow mb-4" style="font-family:cambria">
		<div class="card-header py-3">
		</div>
	<div class="card-body">
		<div class="table-responsive">
		<table class="table table-bordered" width="100%" cellspacing="0" style="font-family:cambria">
		<thead>
			<tr>
			<th> No</th>
			<th>Type</th>
			<th>Company Name </th>
			<th>Supplier Name </th>
			<th>Contact Person Name </th>
			<th> GST</th>
			<th> Contact No</th>
			<th> Address</th>
			<th> State</th>
			<th> City</th>
			<th> Edit</th>
			<th> Delete </th>
			</tr>
		</thead>

<?php
		  $con=mysqli_connect("localhost","root","","smartphone");
$ret=mysqli_query($con,"select SupplierID,RegType,CompanyName,SupplierName,ContactPersonName,CompanyGST,ContactNo,CompAddress,State,City from tblSupplier");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) 
{

?>
		

		<tbody id="myTable">
			<td><?php echo $cnt; ?></td>
			<td><?php echo $row['RegType']; ?></td>
			<td><?php echo $row['CompanyName']; ?></td>
			<td><?php echo $row['SupplierName']; ?></td>
			<td><?php echo $row['ContactPersonName']; ?></td>
			<td><?php echo $row['CompanyGST']; ?></td>
			<td><?php echo $row['ContactNo']; ?></td>
			<td><?php echo $row['CompAddress']; ?></td>
			<td><?php echo $row['State']; ?></td>
			<td><?php echo $row['City']; ?></td>
			<td><a class="btn btn-outline-primary" href="supplieredit.php?id=<?php echo $row['SupplierID'];?>">Edit</a></td>
        <td><a class="btn btn-outline-danger" href="?delete_id=<?php echo $row['SupplierID']; ?>" title="click for delete"  ><span class='glyphicon glyphicon-trash'></span> Delete</a>
                </tbody>
				
			

<?php 
$cnt=$cnt+1;
}?> 
      
		</table>
		</div>
	</div>
	</div>
</div>
</div>
</body>
</html>