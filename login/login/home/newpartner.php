<?php
$partner = $_POST['partner'];
$password = md5($_POST['password']);
$add = $_POST['add'];

if($add=='Add'){

	$sql = "INSERT INTO `user`( `user_name`, `password`, `role`) 
	VALUES ('$partner','$password','Partner')";
	if ($conn->query($sql) === TRUE)
	{
		echo '<meta http-equiv="REFRESH" content="0;url=index.php?page=partner">';
	}	


}
?>

 <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Pages</div>
  <div class="ps-3">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb mb-0 p-0">
		<li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Add New Partner
	  </ol>
	</nav>
  </div>
  <div class="ms-auto">
	
  </div>
</div>



<div class="card-body">
   <div class="row">
	 <div class="col-12 col-lg-12 d-flex">
	  <div class="card border shadow-none w-100">
		<div class="card-body">
						<div class="card"><form action="" method="post">
							<div class="card-body">
								<div class="input-group mb-3"> <span class="input-group-text" id="basic-addon1">Partner Name:</span>
									<input name="partner" type="text" class="form-control" placeholder="Partner Name" aria-label="Username" aria-describedby="basic-addon1">
								</div>
								<div class="input-group mb-3"> <span class="input-group-text" id="basic-addon1">Set Password:</span>
									<input name="password" type="text" class="form-control" placeholder="Set Password" aria-label="Username" aria-describedby="basic-addon1">
								</div>
								<div class="input-group mb-3"><input type="submit" value="Add" name="add" class="btn btn-outline-secondary">
								</div>								
								
							</div></form>
						</div>
		</div>
   </div><!--end row-->
</div>



   </div><!--end row-->
</div>