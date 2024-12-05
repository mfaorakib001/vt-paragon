<?php error_reporting(0);
   include('home/dbconnect.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form 
      
      $user_name = mysqli_real_escape_string($conn,$_POST['user_name']);
      $password = mysqli_real_escape_string($conn,md5($_POST['password'])); 
      
      $sql = "SELECT `user_id`, `user_name`, `password`, `role` FROM `user` where `user_name` = '$user_name' and `password` = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

 $result1 = mysqli_query($conn,$sql);
	if ($result1->num_rows > 0) 
	{  echo 'ok';
	  while($row = $result1->fetch_assoc()) 
	  {
		$user_name = $row["user_name"];
		$role = $row["role"];
		$user_id = $row["user_id"];
		 
	  }
	}


      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['user_name'] = $user_name;
         $_SESSION['role'] = $role;
         $_SESSION['user_id'] = $user_id;
		 
        
         header("location: http://paragonceramicbd.com/virtual-tour-hm/");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="home/assets/images/favi.png" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="home/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="home/assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="home/assets/css/style.css" rel="stylesheet" />
  <link href="home/assets/css/icons.css" rel="stylesheet">
  <!--link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="home/assets/css/pace.min.css" rel="stylesheet" />

  <title>Paragon Ceramic Industries Limited</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">
    
       <!--start content-->
       <main class="authentication-content">
        <div class="container-fluid">
          <div class="authentication-card">
            <div class="card shadow rounded-0 overflow-hidden">
              <div class="row g-0">
                <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                  <img src="home/assets/images/loyalbee.png" class="" alt="">
                </div>
                <div class="col-lg-6">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title">Sign In</h5>
                    <form class="form-body" action="" id="form-validation" name="form-validation" method="POST">

                        <div class="row g-3">
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">User Name</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input type="input" name="user_name" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="User Name" autofocus required>
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" name="password" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Enter Password" required>
                            </div>
                          </div>

                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">Sign In</button><?php echo $error; ?>
                            </div>
                          </div>

                        </div>
                    </form>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </main>
        
       <!--end page main-->

  </div>
  <!--end wrapper-->


  <!--plugins-->
  <!--script src="assets/js/jquery.min.js"></script>
  <!--script src="assets/js/pace.min.js"></script-->


</body>

</html>