<?php
session_start();

include("../includes/config.php"); 


$C_ID = $_SESSION['C_Log'];


if (!$_SESSION['C_Log'])
echo '<script language="JavaScript">
 document.location="../Signin_Singup.php";
</script>';




$sql3 = mysqli_query($dbConn,"select * from customers where customer_id='$C_ID'");
$row3 = mysqli_fetch_array($sql3);
$customer_name=$row3['customer_name'];
$customer_email=$row3['customer_email'];
$customer_password=$row3['customer_password'];					
$mobile=$row3['mobile'];
$address=$row3['address'];



if(isset($_POST['Submit']))
{
	
	
$C_ID=$_POST['C_ID'];
$customer_name=$_POST['customer_name'];
$customer_email=$_POST['customer_email'];
$customer_password=$_POST['customer_password'];					
$mobile=$_POST['mobile'];
$address=$_POST['address'];

$query = mysqli_query($dbConn,"SELECT * FROM customers WHERE customer_email='$customer_email' AND customer_id!='$C_ID'"); 
		

if (mysqli_num_rows($query)>0)
{


	echo "<script language='JavaScript'>
			  alert ('Sorry ! This Email Address Is Already Exist !');
      </script>";


echo '<script language="JavaScript">
            document.location="My_Account.php";
        </script>';
		
		
	
}
else
{










$insert = mysqli_query($dbConn,"update customers set customer_name='$customer_name', customer_email='$customer_email', customer_password='$customer_password', mobile='$mobile', address='$address' where customer_id='$C_ID'");


	echo "<script language='JavaScript'>
			  alert ('Profile Information Updated !');
      </script>";

echo '<script language="JavaScript">
            document.location="My_Account.php";
        </script>';



}
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

	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="" method="post">
					<input type="hidden" name="C_ID" value="<?php echo $C_ID; ?>"/>
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							My Account
						</h4>
						
						
						
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" value="<?php echo $customer_name; ?>" name="customer_name" placeholder="Your Name">
						</div>



<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" value="<?php echo $customer_email; ?>" name="customer_email" placeholder="Your Email Address">
						</div>



<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" value="<?php echo $customer_password; ?>" name="customer_password" placeholder="Your Password">
						</div>




						
						
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" value="<?php echo $mobile; ?>" name="mobile" placeholder="Your Mobile">
						</div>
						
						
						
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" value="<?php echo $address; ?>" name="address" placeholder="Your Address">
						</div>
						
						
						

						
						<button name="Submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Update
						</button>
					</form>
				</div>
				
				
				
				
				
				
				
				
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					
					
					
					
					
					<div class="hov-img0">
							<img src="../images/about-01.jpg" alt="IMG">
						</div>
					
					
					
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