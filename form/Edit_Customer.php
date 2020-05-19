<?php
session_start();

include("../includes/config.php"); 


$A_ID = $_SESSION['A_Log'];


if (!$_SESSION['A_Log'])
echo '<script language="JavaScript">
 document.location="../Admin_Login.php";
</script>';





$C_ID = $_GET['C_ID'];




$sql1 = mysqli_query($dbConn,"select * from customers where customer_id='$C_ID'");
$row1 = mysqli_fetch_array($sql1);



	$Name = $row1['customer_name'];
						$Phone_Number = $row1['mobile'];
						$Email_Address = $row1['customer_email'];
						$Address = $row1['address'];
						$Password = $row1['customer_password'];
						$Status = $row1['customer_status'];

if(isset($_POST['Submit']))
{
$C_ID = $_POST['C_ID'];
	$Name = $_POST['Name'];
						$Phone_Number = $_POST['Phone_Number'];
						$Email_Address = $_POST['Email_Address'];
						$Address = $_POST['Address'];
						$Password = $_POST['Password'];
						$Status = $_POST['Status'];


$update = mysqli_query($dbConn,"update customers set customer_name='$Name', address='$Address', mobile='$Phone_Number', customer_email='$Email_Address', customer_password='$Password', customer_status='$Status' where customer_id='$C_ID'");

echo "<script language='JavaScript'>
			  alert ('Customer Information Has Been Updated !');
      </script>";

	echo "<script language='JavaScript'>
document.location='View_Customers_List.php';
        </script>";

}





?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  
  
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
      <link rel="shortcut icon" href="../img/logo.png"/>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      
    </ul>

   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link"  href="Logout.php">
          Logout	
        </a>
       
      </li>
      <!-- Notifications Dropdown Menu -->
     
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
   
      <span class="brand-text font-weight-light">Administrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			   
			   
			    <li class="nav-item">
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>
		  
		  
		  
		  
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Add_New_Category.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="View_Categories_List.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Categories List</p>
                </a>
              </li>
              
            </ul>
          </li>
		  
		  
		  
		  
		  
		  
		  
		  <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Add_New_Product.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="View_Products_List.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Products List</p>
                </a>
              </li>
              
            </ul>
          </li>
		  
		  
		  
		  
		  
		  
		  
		  
		  <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Customers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="View_Customers_List.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Customers List</p>
                </a>
              </li>
              
            </ul>
          </li>
		  
		  
		  
		  
		  
		  <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Orders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="View_Orders_List.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Orders List</p>
                </a>
              </li>
              
            </ul>
          </li>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Customers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
           
        
		
		<div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit Customer Information</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
			  
			  
			  
			  
			  
			  
			  
			  <form role="form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="C_ID" value="<?php echo $C_ID; ?>"/>
              
			  <div class="card-body">
				
				
				
				
                  
								
								
								
								
								
								
                  <div class="form-group">
                    <label for="exampleInputEmail1">Customer Name</label>
                    <input type="text" class="form-control" value="<?php echo $Name; ?>" name="Name" placeholder="Customer Name">
                  </div>
				  
				  
				  
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">Customer Email</label>
                    <input type="email" class="form-control" value="<?php echo $Email_Address; ?>" name="Email_Address" placeholder="Customer Email Address">
                  </div>
				  
				  
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">Customer Phone Number</label>
                    <input type="text" class="form-control" value="<?php echo $Phone_Number; ?>" name="Phone_Number" placeholder="Phone Number">
                  </div>
				  
				  
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">Customer Address</label>
                    <input type="text" class="form-control" value="<?php echo $Address; ?>" name="Address" placeholder="Address">
                  </div>
				  
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">Customer Phone Number</label>
                    <input type="password" class="form-control" value="<?php echo $Password; ?>" name="Password" placeholder="Password">
                  </div>
				  
				  
                 
				   <div class="form-group">
                    <label for="exampleInputEmail1">Customer Status</label>
<select  name="Status" class="form-control" required>
		<option value="<?php echo $Status; ?>"><?php echo $Status; ?></option>
		<option value="Active">Active</option>
		<option value="Deactive">Deactive</option>
		
		
		</select>

		</div>
				  
				 
				 
				 
				 
								
								
								
								
								
				 
				 
				 
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="Submit" class="btn btn-primary">Edit</button>
                  <button type="reset" class="btn btn-danger">Clear</button>
                </div>
              </form>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
            </div>
            <!-- /.card-body -->
          </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
          </section>
         
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 Coza Store.</strong>
    All Rights Reserved.
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
