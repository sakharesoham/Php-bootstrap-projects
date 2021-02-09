
<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"smartphone");
$Editid=$_REQUEST['id'];

$msg="";

if(isset($_POST['edit']))
  {
      
      $uid=$_POST['userid'];
$Type=$_POST['ipType'];
$ProdName=$_POST['ipProdName'];
$CompanyName=$_POST['ipCompanyName'];
$ColorName=$_POST['ipColorName'];
$gstnongst=$_POST['ipgstnongst'];
$HSNnumber=$_POST['ipHSNnumber'];
$Quantity=$_POST['ipQuantity'];
$Stock=$_POST['ipStock'];
$Purchase=$_POST['ipPurchase'];
$Sale=$_POST['ipSale'];
$MRP=$_POST['ipMRP'];
$MOP=$_POST['ipMOP'];
$ptotalgst=$_POST['totalgst'];
$pcgst=$_POST['cgst'];
$psgst=$_POST['sgst'];



    $query=mysqli_query($con, "update tblproduct set Type='$Type',ProductName='$ProdName',CompanyName='$CompanyName',
	ColorName='$ColorName',GSTorNONGST='$gstnongst',HSNCode='$HSNnumber',Quantity='$Quantity',StockLimit='$Stock',
	PurchaseRate='$Purchase',SalePrice='$Sale',MRP='$MRP',MOP='$MOP',TotalGST='$ptotalgst',CGST='$pcgst',SGST='$psgst'
	where ProductID='$uid'" );
    if ($query) {
    $msg="Product has been Updated.";
     header("location: ProductRegistration.php");
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
 $Editid=$_REQUEST['id'];
$ret=mysqli_query($con,"select ProductID,Type,ProductName,CompanyName,ColorName,GSTorNONGST,HSNCode,Quantity,StockLimit,
PurchaseRate,SalePrice,MRP,MOP,TotalGST,CGST,SGST from tblproduct where ProductID='$Editid'");
while ($row=mysqli_fetch_array($ret)) {

?>

<div class="container" style="margin-top:30px">
<form method="post"  id="insert-form">
<div class="row">
	<div class="col-3">
		<div class="form-group">
		<label style="font-family:cambria">Type</label>
		<select class="browser-default custom-select" style="font-family:cambria" name="ipType">
		<option value="<?php  echo $row['Type'];?>"><b> <?php  echo $row['Type'];?> <b></option>
		<option value="Registered"> <b> Registered </b> </option>
		<option value="UnRegistered"> <b> UnRegistered </b> </option>
		</select>
		</div>
	</div>
		
	<div class="col-5">
		<div class="form-group">
		<label style="font-family:cambria">Product Name</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipProdName" value="<?php  echo $row['ProductName'];?>" required>
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
		<option ><b><?php  echo $row['CompanyName'];?></b></option>
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
		<a href="ProductRegistration.php">
		<button type="button" class="btn btn-success"> + </button></a>
		</div>
	</div>
	
	<div class="col-5">
		<div class="form-group">
		<label style="font-family:cambria">Color</label>
		<select class="browser-default custom-select" style="font-family:cambria" name="ipColorName"  required>
		<option><b> <?php  echo $row['ColorName'];?></b></option>
		<option value="Red">Red</option>
		<option value="Green">Green</option>
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
		<select class="browser-default custom-select ipgstnongst" style="font-family:cambria" name="ipgstnongst"  required>
		<option><b> <?php  echo $row['GSTorNONGST'];?></b></option>
		<option value="GST">GST</option>
		<option value="Non-GST">Non-GST</option>
		</select>
		</div>
	</div>
	
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">HSN Code</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipHSNnumber" value="<?php  echo $row['HSNCode'];?>" required>
		</div>
	</div>
</div>

<div class="row" style="text-align:center">
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">Quantity</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipQuantity" value="<?php  echo $row['Quantity'];?>"required>
		</div>
	</div>
	
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">Stock Limit</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipStock" value="<?php  echo $row['StockLimit'];?>" required>
		</div>
	</div>
</div>

<div class="row" style="text-align:center">
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">Purchase Rate</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipPurchase" value="<?php  echo $row['PurchaseRate'];?>" required>
		</div>
	</div>
	
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">Sale Price</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipSale" value="<?php  echo $row['SalePrice'];?>" required>
		</div>
	</div>
</div>

<div class="row" style="text-align:center">
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">MRP</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipMRP" value="<?php  echo $row['MRP'];?>" required>
		</div>
	</div>
	
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria">MOP</label>
		<input type="text" class="form-control" style="font-family:cambria" name="ipMOP" value="<?php  echo $row['MOP'];?>" required>
		</div>
	</div>
</div>

<div class="row" style="text-align:center">
	<div class="col-5">
		<div class="form-group">
		<label style="font-family:cambria">Total GST</label>
		<select class="browser-default custom-select totalgst" style="font-family:cambria" name="totalgst" id="totalgst" oninput="calgst(this.value);" required>
		<option><b><?php  echo $row['TotalGST'];?></b></option>
		<option value="28">28</option>
		<option value="18">18</option>
		<option value="9">9</option>
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
		<input type="text" class="form-control cgst" style="font-family:cambria" name="cgst" id="cgst" value="<?php  echo $row['CGST'];?>"  required>
		</div>
	</div>
	
	<div class="col-6">
		<div class="form-group">
		<label style="font-family:cambria"> SGST Rate</label>
		<input type="text" class="form-control sgst" style="font-family:cambria" name="sgst" id="sgst" value="<?php  echo $row['SGST'];?>"  required>
		</div>
	</div>
</div>

	<div class="col-12" style="text-align:center">
		<div style="margin-left:auto;margin-right:auto">
		      <input  type="hidden" name="userid" value="<?php echo $Editid; ?>" >
	<button type="submit" class="btn btn-warning" name="edit" style="font-family:cambria">Save Changes</button>
		</div>
	</div>
	
</div>
</body>
</html>
<?php } ?>