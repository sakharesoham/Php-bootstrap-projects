<?php
error_reporting(0);
E_STRICT;
if(isset($_POST['submit']))
{
$date=$_POST['date'];
$time=$_POST['time'];
$EIOption=$_POST['EIOption'];
$Name=$_POST['Name'];
$Amount=$_POST['Amount'];
$PaymentMode=$_POST['PaymentMode'];
$ReferenceNumber=$_POST['ReferenceNumber'];
$Remark=$_POST['Remark'];


$coon=mysql_connect("localhost","root","");
mysql_select_db("smartphone",$coon);

mysql_query ("insert into ExpInc(Date,Time,ExporInc,Name,Amount,PaymentMode,ReferenceNo,Remark)
 value('$date','$time','$EIOption','$Name','$Amount','$PaymentMode','$ReferenceNumber','$Remark')",$coon);

}	
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title> Expense/Income Records </title>
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
 <span style="margin-left:auto;margin-right:auto;font-size:20px;font-weight:bold;text-align:center;font-family:Candara">Expense/Income Records</span>
</nav>

<div class="container" style="padding-top:35px">
<form method="post" action="ExpenseIncomeRecords.php">
	<div class="row" style="text-align:center">
		<div class="col-3">
			<label style="font-weight:bold">Date</label>
			<input type="date" class="form-control" style="font-family:cambria" name="date">
		</div> &nbsp;&nbsp;&nbsp;
		
		<div class="col-3">
			<label style="font-weight:bold">Time</label>
			<input type="time" class="form-control" style="font-family:cambria font-weight:bold"" name="time">
		</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
		<div class="col-3">
			<img src="inexp.jpg" class="img-thumbnail float-left" style="width:100% height:80px">
		</div>
	</div>
	
	<div class="row" style="padding-top:5px; text-align:center">
		<div class="col-6">
			<label for="name" style="font-family:cambria; font-weight:bold">Expense or Income</label>
			<select class="browser-default custom-select" style="font-family:cambria" name="EIOption">
			<option selected disabled><b> Choose Either Income or Expense</b></option>
			<option><b>Income</b></option>
			<option><b>Expense</b></option>
			</select>
		</div>
		
		<div class="col-6">
			<label for="name" style="font-family:cambria; font-weight:bold"> Name </label>
			<input type="text" class="form-control" style="font-family:cambria" name="Name" id="Name" required>
		</div>
	</div>
		
	<div class="row" style="padding-top:15px;text-align:center">
		<div class="col-6">
			<label for="name" style="font-family:cambria; font-weight:bold"> Amount </label>
			<input type="text" class="form-control" style="font-family:cambria" name="Amount" id="Amount" required>
		</div>
		
		<div class="col-6">
			<label for="name" style="font-family:cambria; font-weight:bold"> Payment Mode </label>
			<input type="text" class="form-control" style="font-family:cambria" name="PaymentMode" id="PaymentMode" required>
		</div>
	</div>
	 
	 <div class="row" style="padding-top:15px;text-align:center">
		<div class="col-6">
			<label for="name" style="font-family:cambria; font-weight:bold"> Reference Number </label>
			<input type="text" class="form-control" style="font-family:cambria" name="ReferenceNumber" id="ReferenceNumber" required>
		</div>
		
		<div class="col-6">
			<label for="name" style="font-family:cambria; font-weight:bold"> Remark </label>
			<input type="text" class="form-control" style="font-family:cambria" name="Remark" id="Remark" required>
		</div>
	</div>
	
	<div class="row" style="padding-top:15px;text-align:center">
		<div class="col-12" style="margin-left:auto;margin-right:auto">
			<button type="submit" class="btn btn-outline-success" name="submit" style="font-family:cambria">Save</button>
		</div>
	</div>
</div>

<hr class="solid" style="border-top:8px solid #bbb">


<div class="container" style="padding-top:10px">	

	<div class="row">
		<label style="font-weight:bold"> From </label>
		<input type="date" class="form-control" style="font-family:cambria" name="fromdate">
		<label style="font-weight:bold"> To </label>
		<input type="date" class="form-control" style="font-family:cambria" name="todate">
	</div>
 
 <div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered" width="100%" cellspacing="0" style="font-family:cambria">
		<thead>
			<tr>
			<th> No</th>
			<th>Date</th>
			<th>Expense/Income </th>
			<th>Name </th>
			<th>Amount </th>
			<th> GST</th>
			<th> Payment Mode</th>
			<th> Reference Number</th>
			<th> Remark</th>
			</tr>
		</thead>
		
		<tbody>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tbody>
		</table>
	</div>
</div>	
</body>
</html>