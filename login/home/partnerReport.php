 <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Pages</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Partner Report</li>
                  </ol>
                </nav>
              </div>

            </div>
            <!--end breadcrumb-->
			

<div class="card shadow-sm radius-10 border-0 mb-3">
<div class="card-body">

<form class="form-body" action="" id="form-validation" name="form-validation" method="post">
<div class="card-body">
	<div class="border p-4 rounded">
		<div class="card-title d-flex align-items-center">
			<h5 class="mb-0">Partner Report</h5>
		</div>
		<hr>
		<div class="row mb-3">
			<label for="inputEnterYourName" class="col-sm-3 col-form-label">Partner </label>
			<div class="col-sm-9">
				<input name="partner" list="partnerList"  type="text" class="form-control" id="inputEnterYourName" placeholder="select Partner" >
				
				
<datalist id="partnerList">
								
									
<?php
$sql1 = "SELECT user_name FROM user where role  = 'Partner'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) 
{
  while($row1 = $result1->fetch_assoc()) 
  {
    echo '<option value="'. $row1["user_name"]. '">';
 }
}
?>

								</datalist>				
				
				
				
				
			</div>
		</div>
		<div class="row">
			<label class="col-sm-3 col-form-label"></label>
			<div class="col-sm-9">
				<input type="submit" class="btn btn-primary px-5" name="select" value="select">
			</div>
		</div>
	</div>
</div>
</form>
</div>
</div>



<?php
$select = $_POST['select'];
$partner = $_POST['partner'];

if($select=="select")
{
?>


             <div class="card shadow-sm radius-10 border-0 mb-3">
                <div class="card-body"><center><h5 class="mb-0"><?php echo $partner; ?></h5></center>
			<div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-3 row-cols-xxl-6">
			
			
			<div class="col">
			<div class="card radius-10">
			<div class="card-body">
			  <div class="d-flex align-items-center">
				  <div>
					  <p class="mb-0 text-secondary">Total Member</p>
					  <center><h4 class="my-3"><?php
			if($role=="Administrator")
			{
				$sql1 = "SELECT COUNT(*) a FROM `member`  where `member_ref`='$partner '";
				$result1 = $conn->query($sql1);
				if ($result1->num_rows > 0) 
				{
				  while($row1 = $result1->fetch_assoc()) 
				  {
					echo  $row1["a"];
				  }
				}
			}
			else {
				echo "<br>";
				}
			?> </h4></center>
				  </div>
				  <div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-people-fill"></i>
				  </div>
			  </div>
			</div>
			</div>
			</div>
			
			<div class="col">
			<div class="card radius-10">
			<div class="card-body">
			  <div class="d-flex align-items-center">
				  <div>
					  <p class="mb-0 text-secondary">last Month Member</p>
					  <center><h4 class="my-3"><?php
			if($role=="Administrator")
			{
				$sql1 = "SELECT COUNT(*) a FROM `member`  where `member_ref`='$partner' and month(`member_dt`)=month(now())-1";
				$result1 = $conn->query($sql1);
				if ($result1->num_rows > 0) 
				{
				  while($row1 = $result1->fetch_assoc()) 
				  {
					echo  $row1["a"];
				  }
				}
			}
			else {
				echo "<br>";
				}
			?> </h4></center>
				  </div>
				  <div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-people-fill"></i>
				  </div>
			  </div>
			</div>
			</div>
			</div>			
			
			<div class="col">
			<div class="card radius-10">
			<div class="card-body">
			  <div class="d-flex align-items-center">
				  <div>
					  <p class="mb-0 text-secondary">This Month Member</p>
					  <center><h4 class="my-3"><?php
			if($role=="Administrator")
			{
				$sql1 = "SELECT COUNT(*) a FROM `member`  where `member_ref`='$partner' and month(`member_dt`)=month(now())";
				$result1 = $conn->query($sql1);
				if ($result1->num_rows > 0) 
				{
				  while($row1 = $result1->fetch_assoc()) 
				  {
					echo  $row1["a"];
				  }
				}
			}
			else {
				echo "<br>";
				}
			?> </h4></center>
				  </div>
				  <div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-people-fill"></i>
				  </div>
			  </div>
			</div>
			</div>
			</div>				




			
			</div>
			</div>
			</div>



<?php
}
?>