<?php
session_start();

include 'includes/config.php';



	


if(isset($_POST['Submit']))
{

$Username = $_POST['Username'];
$Password = md5($_POST['Password']);



$sql=mysqli_query($dbConn,"select * from administrator where Username='$Username' AND Password='$Password'");

if (mysqli_num_rows($sql)>0)
{

$row=mysqli_fetch_array($sql);
$A_ID=$row['ID'];

$_SESSION['A_Log'] = $A_ID;



echo '  <script language="JavaScript">
            document.location="Administrator/";
        </script>';
}
else
{

echo '<script language="JavaScript">
	  alert ("Error ... Please Check Administrator Access Username Or Password !");
      </script>';
	  
	  
	  
echo '  <script language="JavaScript">
            document.location="Admin_Login.php";
        </script>';
		
		
		

}
}


?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cozastore | Admin Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  
      <link rel="shortcut icon" href="img/logo.png"/>



  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="Admin_Login.php"><b>Admin</b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="Username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="Password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
           <center> <button type="submit" name="Submit" class="btn btn-primary btn-block">Sign In</button></center>
          </div>
          <!-- /.col -->
        </div>
      </form>

    

    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
