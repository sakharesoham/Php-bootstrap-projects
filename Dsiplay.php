<!DOCTYPE html>
<html lang="en">
<title> Dsiplay </title>
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
<nav class="navbar navbar-expand bg-orange navbar-orange " style="background-color:#1e4e73;">

	<ul class="navbar-nav">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white;font-family:cambria">Master Form</a>
<div class="dropdown-menu">
      <a class="dropdown-item" href="supplier.php">Supplier Registration</a>
      <a class="dropdown-item" href="ProductRegistration.php">Product Registration</a>
</div>
</li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white;font-family:cambria">Transaction</a>
<div class="dropdown-menu">
      <a class="dropdown-item" href="ExpenseIncomeRecords.php">Expense/Income</a>
      <a class="dropdown-item" href="voucher.php">Voucher</a>
      <a class="dropdown-item" href="receipt.php">Receipt</a>
      <a class="dropdown-item" href="banktr.php">Bank Transaction</a>

</div>
</li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white;font-family:cambria">Purchase</a>
<div class="dropdown-menu">
	<a class="dropdown-item" href="purchase.php">Purchase Reg</a>
</div>
</li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white;font-family:cambria">Sale</a>
<div class="dropdown-menu">
	<a class="dropdown-item" href="sale.php">Sale Reg</a>
	<a class="dropdown-item" href="salereturn.php">Sale Return Reg</a>
</div>
</li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white;font-family:cambria">Settings</a>
<div class="dropdown-menu">
	<a class="dropdown-item" href="gst.php">GST Master</a>
	<a class="dropdown-item" href="color.php">Color Master</a>
	<a class="dropdown-item" href="company.php">Company Master</a>
	<a class="dropdown-item" href="bank.php">Bank Master</a>
	<a class="dropdown-item" href="recharge.php">Recharge Master</a>	
	<a class="dropdown-item" href="expinc.php">Expense/Income Master</a>

</div>
</li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white;font-family:cambria">Recharge</a>
<div class="dropdown-menu">
	<a class="dropdown-item" href="recharge.php">Recharge Book</a>
</div>
</li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white;font-family:cambria">Employee</a>
<div class="dropdown-menu">
	<a class="dropdown-item" href="empreg.php">Employee Registration</a>
	<a class="dropdown-item" href="empatten.php">Employee Attendance</a>
	<a class="dropdown-item" href="empadv.php">Employee Advance</a>
	<a class="dropdown-item" href="empsal.php">Employee Salary</a>
</div>
</li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</ul>
</nav>


<div class="container" style="font-family:cambria">

	<div style="float:right">
		<input type="date"  >
		<input type="button" name="search" id="search" class="btn btn-primary" value="Search" style="float:right">
	</div>
	
	<div class="table-responsive" style="text-align:center;height="60px"">
	<table class="table table-bordered" id="dataTable" style="font-family:cambria; margin-top:5px;border-collapse:collapse" width="100%"  cellspacing="0">
	<thead>
	<tr>
		<th>Description of Goods </th>
		<th> Quantity</th>
		<th> Cash/Finance </th>
		<th> Amount </th>
	</tr>
	</thead>
	<tbody>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	</tbody>
	</table>
	
	<div style="text-align:right">
	<label style="color:black;font-family:cambria">Total Sales</label>
	<input type="text" style="width:170px">
	</div>
</div>
</div>

<div class="row" style="padding-top:5px">
			<div class="col-2">
		<a href="ProductRegistration.php" style="text-decoration:none">
		<div class="card" style="background-color:FloralWhite!important;">
		<img src="1.jpg" class="card-img-top" alt="Card image" style="width:100%;height:100px">
		<div class="card-body text-center">
		<p class="card-text" style="font-family:cambria;font-weight:bold">Add Product</p>
		</div></div></a>
			</div>
			
			<div class="col-2">
		<a href="index2.php" style="text-decoration:none">
		<div class="card" style="background-color:FloralWhite! important">
		<img src="purchasebill.png" class="card-img-top" alt="Card image" style="width:100%;height:100px">
		<div class="card-body text-center">
		<p class="card-text" style="font-family:cambria;font-weight:bold"> Purchase Bill </p>
		</div></div></a>
			</div>
			
			<div class="col-2">
		<a href="index2.php" style="text-decoration:none">
		<div class="card" style="background-color:FloralWhite! important">
		<img src="purchasebill.png" class="card-img-top" alt="Card image" style="width:100%;height:100px">
		<div class="card-body text-center">
		<p class="card-text" style="font-family:cambria;font-weight:bold">GST </p>
		</div></div></a>
			</div>
			
			<div class="col-2">
		<a href="index2.php" style="text-decoration:none">
		<div class="card" style="background-color:FloralWhite! important">
		<img src="purchasebill.png" class="card-img-top" alt="Card image" style="width:100%;height:100px">
		<div class="card-body text-center">
		<p class="card-text" style="font-family:cambria;font-weight:bold"> Purchase Bill </p>
		</div></div></a>
			</div>
</div>
</body>

</html>