<?php 
 
  
  
  if($role!='Administrator')
{
echo '<meta http-equiv="REFRESH" content="0;url=../index.php">';

}

 
$reset = $_GET['reset'];
$partner_id = $_GET['45id78'];
$partner_name = $_GET['45part78'];
$reset_submit = $_POST['reset_submit'];


if($reset=='password'){
?>
<div class="card-body">
   <div class="row">
	 <div class="col-12 col-lg-12 d-flex">
	  <div class="card border shadow-none w-100">
		<div class="card-body">
		  <div class="table-responsive">
		  
		  
			<form method="post" action="?page=partner">		  
				<div class="input-group mb-3"> <span class="input-group-text" id="basic-addon3">Partner Name</span>
					<input name="partner_name" type="display" class="form-control" value="<?php echo $partner_name; ?>" disabled>
					<input name="partner_id" type="hidden" class="form-control" value="<?php echo $partner_id; ?>" >
				</div>		  
				<div class="input-group mb-3"> <span class="input-group-text" id="basic-addon3">New Password</span>
					<input type="text" name="password_n" class="form-control" id="basic-url" aria-describedby="basic-addon3" required>
				</div>	
			<div class="col-sm-9">
				<input type="submit" class="btn btn-primary px-5" value="Set" name="reset_submit">
			</div>								
			</form>		  
			
		  </div>
		</div>
   </div><!--end row-->
</div>



   </div><!--end row-->
</div>

<?php 
}


if($reset_submit=='Set'){
$partner_id = $_POST['partner_id'];	
$password_n = md5($_POST['password_n']);	
	$sql = "update `user` set password = '$password_n' where user_id='$partner_id'";


	if ($conn->query($sql) === TRUE)
	{
		
	}
?>



				<div class="alert border-0 bg-light-success alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                      <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                      </div>
                      <div class="ms-3">
                        <div class="text-success">Password Reset Successful</div>
                      </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>

<?php 
}
?>



 <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Pages</div>
  <div class="ps-3">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb mb-0 p-0">
		<li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Partner <a href="?page=newpartner" class="btn btn-primary px-3" style="padding:0">ADD</a>
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
		  <div class="table-responsive">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
				   <th>Partner id</th>
				   <th>Partner name</th>
				   <th></th>
				   <th></th>
				 </tr>
				</thead>
				<tbody>

<?php
$sql1 = "SELECT user_id,user_name FROM user where role  = 'Partner'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) 
{
while($row1 = $result1->fetch_assoc()) 
{
echo '<tr>
<td>'. $row1["user_id"]. '</td>
<td>' . $row1["user_name"]. '</td>
<td><a href="index.php?page=partner&&reset=password&&45id78='.$row1["user_id"].'&&45part78='.$row1["user_name"].'">Edit</a></td>
<td><a href="index.php?page=partner&&reset=password&&45id78='.$row1["user_id"].'&&45part78='.$row1["user_name"].'">Reset Password</a></td>
</tr>';




}
}
?>
				</tbody>

			</table>
		  </div>
		</div>
   </div><!--end row-->
</div>



   </div><!--end row-->
</div>			