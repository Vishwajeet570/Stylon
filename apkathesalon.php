<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "login_sample_db");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="bookslot.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>bookslot</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/addbookstyle.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Festive&family=Lobster&display=swap" rel="stylesheet">
	</head>
	<style>
		.text-danger {
    float: right;
   
}
.text-info{
	float: right;
}
.back img{
  height: 50px;
  width: 90px;
  margin-top: -31px;
  float : left;
}
.back img:hover{
  filter: invert();
}
.butta{
	
	display:flex;
	justify-content: center;
}
.butta-child{
	width:200px;
	background-color:#0a72b8;
	height: 47px;
	border-radius:10px;
	
}
.butta-child:hover{
	background-color:#0df209;
}
.butta-child a{
	text-decoration: none;
	color : white;
	margin-top:20px;
}
	</style>
	<body>
	<div class="main">	
    <h1>Apka The Salon</h1>
	<div class="back">
    <a href="location.php"><img src="https://img.pngio.com/back-png-image-background-png-arts-back-png-1200_630.png" alt=""></a>
   
  </div>
    <p>"Welcome ,here you can get most amaizing offers at affordable price. you can also rating after the service, THANK YOU"</p>
</div>
<div class="rating">
  
  <div class="rating-head"> <h1>3.0</h1></div>
 <div class="rating-star"> <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star "></span>
  <span class="fa fa-star"></span>
  <p><h3>(176 reviews)</h3></p>
 
  </div>
  
</div>
<div class="cashback"><h3>Use Stylonew: 10% cashback(1st booking) <br>Apply coupon code at checkout</h3></div>
<div class="pro">
<div class="product"><a href="">Products <br>Used</a></div>
<div class="product-item"><a href="">Loreal</a></div>
<div class="product-item"><a href="">Shiseido</a></div>
<div class="product-item"><a href="">Johnson & Johnson.</a></div>
<div class="product-item"><a href="">Unilever</a></div>
<div class="product-item"><a href="">Beiersdorf</a></div>
<div class="product-item"><a href="">Coty</a></div>
</div>

		<br />
		<div class="container">
			<br />
			<br />
			<br />
			
			<br /><br />
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="bookslot.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">Rs <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>Rs <?php echo $values["item_price"]; ?></td>
						<td>Rs <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="bookslot.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">Rs <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	<div class="butta">

		<button class='butta-child' type="button"><a href="booked.php">Book now<a> </button>
	</div>
	</body>
</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>