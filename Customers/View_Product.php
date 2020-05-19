<?php
session_start();

include("../includes/config.php"); 


$C_ID = $_SESSION['C_Log'];


if (!$_SESSION['C_Log'])
echo '<script language="JavaScript">
 document.location="../Signin_Singup.php";
</script>';


$pro_id = $_GET['pro_id'];


 
					$sql1 = mysqli_query($dbConn,"select * from products where pro_id='$pro_id'");
					$row1 = mysqli_fetch_array($sql1);

						$pro_id = $row1['pro_id'];
						



						$pro_name  = $row1['pro_name'];
						$pro_price  = $row1['pro_price'];
						$pro_image  = $row1['pro_image'];
						$pro_size  = $row1['pro_size'];
						$pro_color  = $row1['pro_color'];
						$pro_desc  = $row1['pro_desc'];
						$pro_quantity  = $row1['pro_quantity'];
						$cat_id  = $row1['cat_id'];
						
						
						
	$sql2 = mysqli_query($dbConn,"select * from categories where cat_id='$cat_id'");
					$row2 = mysqli_fetch_array($sql2);
						
						$cat_name  = $row2['cat_name'];


						
						
						
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
								<a href="About.php">About</a>
							</li>
							
							
							
							<li>
								<a href="allproducts.php">Shop</a>
							</li>
							
							
							
							<li>
								<a href="Contact.php">Contact</a>
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
								<a href="About.php">About</a>
							</li>
							
							
							
							<li>
								<a href="allproducts.php">Shop</a>
							</li>
							
							
							
							<li>
								<a href="Contact.php">Contact</a>
							</li>
							
							
							
							
							
							
							
							
			</ul>
		</div>

		
	</header>
	<br>
		

<!-- Product Detail -->


							
		
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
				
				
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="../Administrator/<?php echo $pro_image; ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="../Administrator/<?php echo $pro_image; ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../Administrator/<?php echo $pro_image; ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								

								<div class="item-slick3" data-thumb="../Administrator/<?php echo $pro_image; ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="../Administrator/<?php echo $pro_image; ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../Administrator/<?php echo $pro_image; ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								
								
								<div class="item-slick3" data-thumb="../Administrator/<?php echo $pro_image; ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="../Administrator/<?php echo $pro_image; ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../Administrator/<?php echo $pro_image; ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								
								
								
								
								
								
							</div>
						</div>
					</div>
				</div>
					
					
							
									
										
									
									
									
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $pro_name; ?>
						</h4>

						<span class="mtext-106 cl2">
							<?php echo $pro_price; ?> JD
						</span>

						<p class="stext-102 cl3 p-t-23">
								Size : <?php echo $pro_size; ?>
								<br><br>
								Color : <?php echo $pro_color; ?>
								<br><br>
								Description :<br>
								<p class="stext-102 cl6">
								<?php echo $pro_desc; ?>
								</p>
						</p>
						
						
						
						
			
<form action="Add_To_Cart.php" method="post">
<input type="hidden" name="pro_id" value="<?php echo $pro_id; ?>"/>
<input type="hidden" name="C_ID" value="<?php     echo $C_ID; ?>"/>
<input type="hidden" name="pro_price" value="<?php echo $pro_price; ?>"/>
<input type="hidden" name="pro_quantity" value="<?php echo $pro_quantity; ?>"/>
											
						
						<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input min="1" class="mtext-104 cl3 txt-center num-product" type="number" name="quantity" value="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>
									
						
						<!--  -->
						<div class="p-t-33">
							

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									


							<input type="submit" value="Add to Cart"  name="Submit" type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail"/>
										</form>
							
									
									
									
								</div>
							</div>	
						</div>

						
					</div>
					
					
					
					
				
					
					
				</div>
			</div>	
</section>		
		
	
		
		
		
		
		<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					
					
					
					
					 <?php
				    

					$sql1 = mysqli_query($dbConn,"SELECT * from products ");
					while ($row1 = mysqli_fetch_array($sql1)){

						$pro_id = $row1['pro_id'];
						



						$pro_name  = $row1['pro_name'];
						$pro_price  = $row1['pro_price'];
						$pro_image  = $row1['pro_image'];
						

						?> 
					
					
					
					
					
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="../Administrator/<?php echo $pro_image; ?>" alt="IMG-PRODUCT">

								<a href="View_Product.php?pro_id=<?php echo $pro_id; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15">
									Quick View
								</a>
							</div>

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="View_Product.php?pro_id=<?php echo $pro_id; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?php echo $pro_name; ?>
									</a>

									<span class="stext-105 cl3">
										<?php echo $pro_price; ?> JD
									</span>
								</div>

								
							</div>
						</div>
					</div>

					
<?php
					}
					?>			
				</div>
			</div>
		</div>
</section>
	

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
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/slick/slick.min.js"></script>
	<script src="../js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="../vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="../vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/sweetalert/sweetalert.min.js"></script>
	
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