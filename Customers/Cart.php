<?php
session_start();

include("../includes/config.php"); 


$C_ID = $_SESSION['C_Log'];


if (!$_SESSION['C_Log'])
echo '<script language="JavaScript">
 document.location="../Signin_Singup.php";
</script>';





$sql4 = mysqli_query($dbConn,"select * from orders where customer_id='$C_ID' AND order_status='Pending'");
$row4 = mysqli_fetch_array($sql4);
$order_number=$row4['order_number'];
$total_price=$row4['total_price'];

$sql5 = mysqli_query($dbConn,"select * from sub_orders where order_number='$order_number'");
$row5 = mysqli_num_rows($sql5);








$sql654 = mysqli_query($dbConn,"select * from orders where order_number='$order_number' AND order_status='Pending'");
if (mysqli_num_rows($sql654)<1){
	
	
	
	echo '<script language="JavaScript">
 document.location="index.php";
</script>';	
	
	
	
	
	
}









if(isset($_POST['Submit']))
{


$sub_order_id = $_POST['sub_order_id'];
$pro_id = $_POST['pro_id'];
$pro_quantity = $_POST['pro_quantity'];
$sub_price = $_POST['sub_price'];
$sub_quantity = $_POST['sub_quantity'];
$new_quantity = $_POST['new_quantity'];
$order_number = $_POST['order_number'];
$sub_total_price = $_POST['sub_total_price'];
$total_price = $_POST['total_price'];



$new_total_price = $total_price - $sub_total_price;


$pro_quantity = $pro_quantity + $sub_quantity;


$pro_quantity = $pro_quantity - $new_quantity;

$sub_quantity = $new_quantity;

$sub_total_price = $sub_price * $sub_quantity;

mysqli_query($dbConn,"update products set pro_quantity='$pro_quantity' where pro_id='$pro_id'");


mysqli_query($dbConn,"update sub_orders set sub_quantity='$sub_quantity', sub_total_price='$sub_total_price' where sub_order_id='$sub_order_id'");		


$new_total_price_2 = $new_total_price + $sub_total_price;



mysqli_query($dbConn,"update orders set total_price='$new_total_price_2' where order_number='$order_number'");		



echo '<script language="JavaScript">
 document.location="Cart.php";
</script>';	


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="../image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						
					</div>

					<div class="right-top-bar flex-w h-full">
						

						
						
						<a href="My_Account.php" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>
						
						
						<a href="Cart.php" class="flex-c-m trans-04 p-lr-25">
							Cart
						</a>
						
						
						<a href="Logout.php" class="flex-c-m trans-04 p-lr-25">
							Logout
						</a>
						
						

						
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="../images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
						
						
						<li>
								<a href="index.php">Home</a>
							</li>
							
							
							
						
							
							
							<li>
								<a href="allproducts.php">Shop</a>
							</li>
							
							
						
							
							
							
							
							
						</ul>
					</div>	

					
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.php"><img src="../images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="My_Account.php" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>
						
						
						<a href="Logout.php" class="flex-c-m p-lr-10 trans-04">
							Logout
						</a>

						
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				
				
				<li>
								<a href="index.php">Home</a>
							</li>
							
							
							
							
							
							
							<li>
								<a href="allproducts.php">Shop</a>
							</li>
							
							
							
							
							
							
							
							
			</ul>
		</div>

		
	</header>
	
	<br><br>

	

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
									<th class="column-5">Update</th>
								</tr>



<?php
					$sql6 = mysqli_query($dbConn,"select * from sub_orders where order_number='$order_number' order by sub_order_id DESC");
					while ($row6 = mysqli_fetch_array($sql6)){
					
					
						$sub_order_id = $row6['sub_order_id'];
						$pro_id = $row6['pro_id'];
						$sub_quantity = $row6['sub_quantity'];
						$sub_price = $row6['sub_price'];
						$sub_total_price = $row6['sub_total_price'];
						$order_number = $row6['order_number'];
						
						
						$sql7 = mysqli_query($dbConn,"select * from products where pro_id='$pro_id'");
						$row7 = mysqli_fetch_array($sql7);
						$pro_name = $row7['pro_name'];
						$pro_image = $row7['pro_image'];					
						$pro_quantity = $row7['pro_quantity'];					
					
					?>





			<form action="" method="post">
			
			
					<input type="hidden" name="sub_order_id" value="<?php echo $sub_order_id; ?>"/>
					<input type="hidden" name="pro_id" value="<?php echo $pro_id; ?>"/>
					<input type="hidden" name="pro_quantity" value="<?php echo $pro_quantity; ?>"/>
					<input type="hidden" name="sub_price" value="<?php echo $sub_price; ?>"/>
					<input type="hidden" name="sub_quantity" value="<?php echo $sub_quantity; ?>"/>
					<input type="hidden" name="order_number" value="<?php echo $order_number; ?>"/>
					<input type="hidden" name="sub_total_price" value="<?php echo $sub_total_price; ?>"/>
					<input type="hidden" name="total_price" value="<?php echo $total_price; ?>"/>
					
					
					
					
					
					

								<tr class="table_row">
									<td class="column-1">
									<a href="Remove.php?pro_id=<?php echo $pro_id; ?>&total_price=<?php echo $total_price; ?>&sub_total_price=<?php echo $sub_total_price; ?>&order_number=<?php echo $order_number; ?>&sub_quantity=<?php echo $sub_quantity; ?>&pro_quantity=<?php echo $pro_quantity; ?>&sub_order_id=<?php echo $sub_order_id; ?>">
										<div class="how-itemcart1">
											<img src="../Administrator/<?php echo $pro_image; ?>" alt="IMG">
										</div>
										
									</a>	
									</td>
									<td class="column-2"><?php echo $pro_name; ?></td>
									<td class="column-3"><?php echo $sub_price; ?> JD</td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input min="1" class="mtext-104 cl3 txt-center num-product" type="number" name="new_quantity" value="<?php echo $sub_quantity; ?>">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5"><?php echo $sub_total_price; ?> JD</td>
									<td class="column-5"><input type="submit" name="Submit" value="Update" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10"/>
								</tr>
								
								
								
								</form>
								
							<?php
							}
							?>					
								
								
								
								
								
								
								
								
								
								

								
							</table>
						</div>

						
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									<?php echo $total_price; ?> JD
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Payment Type:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									Cash On Delivery
								</p>
								
								
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									<?php echo $total_price; ?> JD
								</span>
							</div>
						</div>

						<a href="Checkout.php?order_number=<?php echo $order_number; ?>" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</a>
					</div>
				</div>
			</div>
		</div>
		
	
		

<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				

				<div class="col-sm-12 col-lg-6 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Main Menu
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="index.php" class="stext-107 cl7 hov-cl1 trans-04">
								Home
							</a>
						</li>

						

						<li class="p-b-10">
							<a href="allproducts.php" class="stext-107 cl7 hov-cl1 trans-04">
								Shop
							</a>
						</li>
						
						
						<li class="p-b-10">
							<a href="My_Account.php" class="stext-107 cl7 hov-cl1 trans-04">
								My Account
							</a>
						</li>

						
					</ul>
				</div>

				<div class="col-sm-12 col-lg-6 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						 Call us on +962798169917
					</p>

					<div class="p-t-27">
					
					</div>
				</div>

				
			</div>

			<div class="p-t-40">
				

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>


<!--===============================================================================================-->	
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="../vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>