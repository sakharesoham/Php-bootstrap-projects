
<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"smartphone");



if($con->connect_error)
{
	die("connection failed".$con->connect_error);
	
}
$query=mysqli_query($con,"select SupplierName from tblSupplier");

$connect = new PDO("mysql:host=localhost; dbname=smartphone;", "root", "");
if(isset($_POST['submit']))
{
$ipType=$_POST['ipType'];
$ipProdName=$_POST['ipProdName'];
$ipCompanyName=$_POST['ipCompanyName'];
$ipColorName=$_POST['ipColorName'];
$ipgstnongst=$_POST['ipgstnongst'];
$ipHSNnumber=$_POST['ipHSNnumber'];
$ipQuantity=$_POST['ipQuantity'];
$ipStock=$_POST['ipStock'];
$ipPurchase=$_POST['ipPurchase'];
$ipSale=$_POST['ipSale'];
$ipMRP=$_POST['ipMRP'];
$ipMOP=$_POST['ipMOP'];
$totalgst=$_POST['totalgst'];
$cgst=$_POST['cgst'];
$sgst=$_POST['sgst'];
 
$query1 = "insert into tblproduct (Type,ProductName,CompanyName,ColorName,GSTorNONGST,HSNCode,Quantity,StockLimit,
PurchaseRate,SalePrice,MRP,MOP,TotalGST,CGST,SGST)
 values('$ipType','$ipProdName','$ipCompanyName','$ipColorName','$ipgstnongst','$ipHSNnumber','$ipQuantity','$ipStock',
 '$ipPurchase','$ipSale','$ipMRP','$ipMOP','$totalgst','$cgst','$sgst')";

$statement1 = $connect->prepare($query1);

$statement1->execute();

}	
?>

<!DOCTYPE html>
<html lang="en">
<title> Product Registration Page </title>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script>
function calgst(totalgst)
  {
      var data=totalgst;
   var cgst=data/2;
   var sgst=data/2;
   document.getElementById('cgst').value=cgst;
    document.getElementById('sgst').value=sgst;
  }
</script>
</head>


<body style="background-color:lighter">

<nav class="navbar navbar-expand bg-lighter" style="background-color:lighter; width:100%; box-shadow:2px 2px 2px #888888;margin-bottom:5px">
 <a href="Dsiplay.php">
 <i class="fas fa-arrow-left" style="18px"></i></a>
 <span style="margin-left:auto;margin-right:auto;font-size:20px;font-weight:bold;text-align:center;font-family:Candara">Product Registration</span>
</nav>

<div class="container" style="padding-top:35px">
<form method="post" action="ProductRegistration.php">
<div class="row" style="text-align:center" >
	<div class="col-3">
		<div class="form-group">
		<label style="font-family:cambria">Type</label>
		<select class="browser-default custom-select" style="font-family:cambria" name="ipType">
		<option selected disabled><b> Select Type of Product</b></option>
		<option> REG </option>
		<option> URG </option>
		</select>
		</div>
	</div>
		
	<div class="col-5">
		<div class="form-group">
		<label style="font-family:cambria">Product Name</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipProdName" required>
		</div>
	</div>
	
	<div class="col-3">
		<div class="form-group">
		<img src="ProductRegistration.jpg" class="img-thumbnail float-left" style="width:100%;height:80px">
		</div>
	</div>	
</div>

<div class="row" style="text-align:center">
	<div class="col-5">
		<div class="form-group">
		<label style="font-family:cambria">Supplier Name</label>
		<select class="browser-default custom-select" style="font-family:cambria" name="ipCompanyName">
		<option selected disabled><b>Select Supplier Name </b></option>
		<?php while($row1=mysqli_fetch_array($query)):;?>
		<option> <?php echo $row1[0];?></option>
		<?php endwhile; 
				  echo    "<meta charset='utf-8'>";
		?>
		</select>
		</div>
	</div>
	
	<div class="col-1" style="padding-top:30px">
		<div class="form-group">
		<a href="supplier.php">
		<button type="button" class="btn btn-success"> + </button></a>
		</div>
	</div>
	
	<div class="col-5">
		<div class="form-group">
		<label style="font-family:cambria">Color</label>
		<select class="browser-default custom-select" style="font-family:cambria" name="ipColorName" required>
		<option selected disabled><b> Select Color</b></option>
		<option>Red</option>
		<option>Green</option>
		</select>
		</div>
	</div>
	
	<div class="col-1" style="padding-top:30px">
		<div class="form-group">
		<button type="button" class="btn btn-success"> + </button>
		</div>
	</div>
</div>
		
<div class="row" style="text-align:center">
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">GST/Non-GST</label>
		<select class="browser-default custom-select ipgstnongst" style="font-family:cambria" name="ipgstnongst" required>
		<option selected disabled><b> Select</b></option>
		<option>GST</option>
		<option>Non-GST</option>
		</select>
		</div>
	</div>
	
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">HSN Code</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipHSNnumber" required>
		</div>
	</div>
</div>

<div class="row" style="text-align:center">
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">Quantity</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipQuantity" required>
		</div>
	</div>
	
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">Stock Limit</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipStock" required>
		</div>
	</div>
</div>

<div class="row" style="text-align:center">
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">Purchase Rate</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipPurchase" required>
		</div>
	</div>
	
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">Sale Price</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipSale" required>
		</div>
	</div>
</div>

<div class="row" style="text-align:center">
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">MRP</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipMRP" required>
		</div>
	</div>
	
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">MOP</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipMOP" required>
		</div>
	</div>
</div>

<div class="row" style="text-align:center">
	<div class="col-5">
		<div class="form-group">
		<label style="font-family:cambria">Total GST</label>
		<select class="browser-default custom-select totalgst" style="font-family:cambria" name="totalgst" id="totalgst" oninput="calgst(this.value);" required>
		<option selected disabled><b> Select GST Rate</b></option>
		<option>28</option>
		<option>18</option>
		<option>9</option>
		</select>
		</div>
	</div>
	
	<div class="col-1" style="padding-top:30px">
		<div class="form-group">
		<button type="button" class="btn btn-success"> + </button>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria"> CGST Rate</label>
		<input type="text" class="form-control cgst" style="font-family:cambria" name="cgst" id="cgst" readonly required>
		</div>
	</div>
	
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria"> SGST Rate</label>
		<input type="text" class="form-control sgst" style="font-family:cambria" name="sgst" id="sgst" readonly required>
		</div>
	</div>
</div>

<div class="form-group row" style="text-align:center">
	<div class="col-12">
		<div style="margin-left:auto;margin-right:auto">
	<input type="submit" class="btn btn-success" name="submit" style="font-family:cambria" value="Save">
		</div></div>
	
	</div>
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
			<th>Product Name </th>
			<th>Company Name </th>
			<th>Color Name </th>
			<th> GST or NONGST</th>
			<th> HSN Code</th>
			<th> Quantity</th>
			<th> StockLimit</th>
			<th> PurchaseRate</th>
			<th> SalePrice</th>
			<th> MRP </th>
			<th> MOP </th>
			<th> TotalGST </th>
			<th> CGST </th>
			<th> SGST </th>
			<th> Edit </th>
			<th> Delete </th>
			
			</tr>
		</thead>
		
<?php
		  $con=mysqli_connect("localhost","root","","smartphone");
$ret=mysqli_query($con,"select ProductID,Type,ProductName,CompanyName,ColorName,GSTorNONGST,HSNCode,Quantity,StockLimit,PurchaseRate,SalePrice,MRP,MOP,TotalGST,CGST,SGST from tblproduct");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) 
{

?>
		
		<tbody id="myTable">
			<td><?php echo $cnt; ?></td>
			<td><?php echo $row['Type']; ?></td>
			<td><?php echo $row['ProductName']; ?></td>
			<td><?php echo $row['CompanyName']; ?></td>
			<td><?php echo $row['ColorName']; ?></td>
			<td><?php echo $row['GSTorNONGST']; ?></td>
			<td><?php echo $row['HSNCode']; ?></td>
			<td><?php echo $row['Quantity']; ?></td>
			<td><?php echo $row['StockLimit']; ?></td>
			<td><?php echo $row['PurchaseRate']; ?></td>
			<td><?php echo $row['SalePrice']; ?></td>
			<td><?php echo $row['MRP']; ?></td>
			<td><?php echo $row['MOP']; ?></td>
			<td><?php echo $row['TotalGST']; ?></td>
			<td><?php echo $row['CGST']; ?></td>
			<td><?php echo $row['SGST']; ?></td>
			<td><a class="btn btn-outline-primary" href="EditProductRegistration.php?id=<?php echo $row['ProductID'];?>">Edit</a></td>
			<td><a class="btn btn-outline-danger" href="?delete_id=<?php echo $row['ProductID']; ?>" title="click for delete"  ><span class='glyphicon glyphicon-trash'></span> Delete</a></td>
		</tbody>
<?php 
$cnt=$cnt+1;
}?>
</table>
</div></div></div></div>
</body>
</html>