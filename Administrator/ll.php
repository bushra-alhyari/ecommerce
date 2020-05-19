<?php
session_start();

include("../includes/config.php"); 


$C_ID = $_SESSION['C_Log'];


if (!$_SESSION['C_Log'])
echo '<script language="JavaScript">
 document.location="../Signin_Singup.php";
</script>';

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
						Free shipping for standard order over $100
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
								<a href="Shop.php">Shop</a>
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
						Free shipping for standard order over $100
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
								<a href="Shop.php">Shop</a>
							</li>
							
							
							
							
							
							
							
							
			</ul>
		</div>

		
	</header>

	
		

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(../images/slide-01.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="Shop.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(../images/slide-02.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="Shop.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(../images/slide-03.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="Shop.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	
	<!-- Product -->
		<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Categories
				</h3>
			</div>
			<div class="row isotope-grid">

						

				 <?php
				

					$sql1 = mysqli_query($dbConn,"select * from categories ");
					while ($row1 = mysqli_fetch_array($sql1)){

						$cat_id = $row1['cat_id'];
						



						$cat_name  = $row1['cat_name'];
						$cat_image  = $row1['cat_image'];
						?>

	<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<div class="block2">

					<div class="block2-pic hov-img0">
							<img src="Administrator/<?php echo $cat_image; ?>" alt="IMG-PRODUCT">

							<a href="Shop.php?cat_id=<?php echo $cat_id; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="Shop.php?cat_id=<?php echo $cat_id; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $cat_name; ?>
								</a>

								<span class="stext-105 cl3">
									
								</span>
							</div>

							
						</div>
				
				</div>

								</div>
				<?php
					}
					?>
									
								</div>
<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Latest Collection
				</h3>
			</div>
		<div class="row isotope-grid">

						

				 <?php
					$sql1 = mysqli_query($dbConn,"select * from products where pro_quantity>0 order by pro_date_time DESC limit 6");
					while ($row1 = mysqli_fetch_array($sql1)){

						$pro_id = $row1['pro_id'];
						



						$pro_name  = $row1['pro_name'];
						$pro_price  = $row1['pro_price'];
						$pro_image  = $row1['pro_image'];
						$pro_desc   = $row1['pro_desc']
 
					
						?>

	<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<div class="block2">

					<div class="block2-pic hov-img0">
							<img src="Administrator/<?php echo $pro_image; ?>" alt="IMG-PRODUCT">

							<a href="View_Product.php?pro_id=<?php echo $pro_id; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="View_Product.php?pro_id=<?php echo $pro_id; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $pro_name; ?>
								</a>

								<span class="stext-105 cl3">
									<?php echo $pro_desc; ?>
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

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="Shop.php" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div>
		</div>
	</section>

	<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<div class="block2">

					<div class="block2-pic hov-img0">
							<img src="../Administrator/<?php echo $pro_image; ?>" alt="IMG-PRODUCT">

							<a href="View_Product.php?pro_id=<?php echo $pro_id; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
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

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="Shop.php" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
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
							<a href="Shop.php" class="stext-107 cl7 hov-cl1 trans-04">
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
						Any questions? Let us know in store at Amman / Jordan or call us on +962 6 000 0000
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
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
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
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