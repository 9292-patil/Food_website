<?php
session_start();

include('hms/include/config.php');

if(isset($_POST['pcode']) && isset($_POST['pname']) && isset($_POST['pimage']) && isset($_POST['pprice'])){
	$code=$_POST['pcode'];
	$name=$_POST['pname'];
	$image=$_POST['pimage'];
	$price=$_POST['pprice'];
	$qty=0;

	$ret=mysqli_query($con,"SELECT product_code FROM addcart WHERE product_code='".$code."'");
	
$num=mysqli_fetch_array($ret);

if (isset($num['product_code'])){
$check_code=$num['product_code'];}else{
$check_code='';
}
if(!$check_code){
	$query=mysqli_query($con,"insert into addcart(product_name,product_price,product_image,quantity,total_price,product_code) values('$name','$price','$image','$qty','$price','$code')");
	if($query)
	{
			echo "Item added to your cart";

		
		
			
	}else{
		echo "Item already added to your cart";
				

	}

}
}
if(isset($_GET['cartItem']) && (isset($_GET['cartItem']) =='cart_item')){
$ret1=mysqli_query($con,"SELECT * FROM addcart");
$num1=mysqli_num_rows($ret1);
echo json_encode($num1);
}

if(isset($_GET['remove'])){
	$id=$_GET['remove'];
$ret2=mysqli_query($con,"DELETE FROM addcart WHERE cart_id='$id'");
$_SESSION["showAlert"] ="block";
$_SESSION["message"] ="Item removed from addcart";
header("location:cart.php");
}

if(isset($_GET['clear'])){
	$id=$_GET['clear'];
$ret2=mysqli_query($con,"DELETE FROM addcart");
$_SESSION["showAlert"] ="block";
$_SESSION["message"] ="All item removed from the cart";
header("location:cart.php");
}

if(isset($_POST['pqty'])){

	$qty=$_POST['pqty'];
	$id=$_POST['pid'];
	
	$price=$_POST['pprice'];
	$total_price=$qty*$price;
	
	$ret=mysqli_query($con,"UPDATE addcart SET quantity='$qty', total_price='$total_price' WHERE cart_id='".$id."'");

}
?>

