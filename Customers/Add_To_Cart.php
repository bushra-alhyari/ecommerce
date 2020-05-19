<?php


session_start();

$C_ID=$_POST['C_ID'];
$pro_id=$_POST['pro_id'];
$pro_price=$_POST['pro_price'];
$quantity=$_POST['quantity'];
$pro_quantity=$_POST['pro_quantity'];


require_once('../includes/config.php');


$query1 = mysqli_query($dbConn,"select * from orders where customer_id='$C_ID' AND order_status='Pending'");
if (mysqli_num_rows($query1)>0){
	
	
		$data = mysqli_fetch_array($query1);
		$order_id = $data['order_id'];
		$order_number = $data['order_number'];
		$total_price = $data['total_price'];
		
		
$query2 = mysqli_query($dbConn,"select * from sub_orders where order_number='$order_number' AND pro_id='$pro_id'");
if (mysqli_num_rows($query2)>0){
	
		$data1 = mysqli_fetch_array($query2);
		$sub_quantity = $data1['sub_quantity'];
		$sub_total_price = $data1['sub_total_price'];
		$New_QNT = $sub_quantity + $quantity;
		$New_Total_Price = $sub_total_price + ($pro_price*$quantity);
	
mysqli_query($dbConn,"update sub_orders set sub_quantity='$New_QNT', sub_total_price='$New_Total_Price' where order_number='$order_number' AND pro_id='$pro_id'");		
	
$New_Total_Amount = $total_price + ($pro_price*$quantity);

mysqli_query($dbConn,"update orders set total_price='$New_Total_Amount' where order_number='$order_number'");

$new_pro_quantity = $pro_quantity - $quantity;

mysqli_query($dbConn,"update products set pro_quantity='$new_pro_quantity' where pro_id='$pro_id'");





}else{
	
	
	$sub_total_price = $pro_price*$quantity;
	
	mysqli_query($dbConn,"insert into sub_orders (order_number,order_id,pro_id,sub_quantity,sub_price,sub_total_price)
values ('$order_number','$order_id','$pro_id','$quantity','$pro_price','$sub_total_price')");	
	
	$New_Total_Amount = $total_price + ($pro_price*$quantity);

mysqli_query($dbConn,"update orders set total_price='$New_Total_Amount' where order_number='$order_number'");	
	
	$new_pro_quantity = $pro_quantity - $quantity;

mysqli_query($dbConn,"update products set pro_quantity='$new_pro_quantity' where pro_id='$pro_id'");




}

}else{

$query3 = mysqli_query($dbConn,"select * from orders order by order_id DESC");
if (mysqli_num_rows($query3)>0){
	
	$row = mysqli_fetch_array($query3);
	$order_number = $row['order_number'] + 1;
	$order_id = $row['order_id'] + 1;
	
			$sub_total_price = $pro_price*$quantity;

	
	
	mysqli_query($dbConn,"insert into orders (order_number,total_price,order_status,customer_id)
values ('$order_number','$sub_total_price','Pending','$C_ID')");
mysqli_query($dbConn,"insert into sub_orders (order_number,order_id,pro_id,sub_quantity,sub_price,sub_total_price)
values ('$order_number','$order_id','$pro_id','$quantity','$pro_price','$sub_total_price')");

$new_pro_quantity = $pro_quantity - $quantity;

mysqli_query($dbConn,"update products set pro_quantity='$new_pro_quantity' where pro_id='$pro_id'");
	
}else{
	
		$order_number = 1;
		
		
					$sub_total_price = $pro_price*$quantity;


mysqli_query($dbConn,"insert into orders (order_number,total_price,order_status,customer_id)
values ('$order_number','$sub_total_price','Pending','$C_ID')");


$query4 = mysqli_query($dbConn,"select * from orders where order_number='$order_number'");
$data5 = mysqli_fetch_array($query4);
$order_id = $data5['order_id'];

		
		mysqli_query($dbConn,"insert into sub_orders (order_number,order_id,pro_id,sub_quantity,sub_price,sub_total_price)
values ('$order_number','$order_id','$pro_id','$quantity','$pro_price','$sub_total_price')");
	
	$new_pro_quantity = $pro_quantity - $quantity;

mysqli_query($dbConn,"update products set pro_quantity='$new_pro_quantity' where pro_id='$pro_id'");

}	
	
}



	  

	echo "<script language='JavaScript'>
document.location='Cart.php';
        </script>";


?>