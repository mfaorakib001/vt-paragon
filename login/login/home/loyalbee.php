 <?php
 
$action = $_GET['a129n'];
$mob = $_GET['19mo75'];
$member = $_GET['member'];

$pieces = explode("58", $mob);
$mob = $pieces[1]; 

$mobile = $_POST['mobile'];
$member_id = $_GET['m912i'];
if($mobile!='') 
{
      $sql = "SELECT member_id, member_name FROM member where member_phone = '$mobile'";

$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) 
{
  while($row = $result->fetch_assoc()) 
  {
   $yes='1';
  }
}


else {?>
	<div class="alert border-0 bg-light-danger alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                      <div class="fs-3 text-danger"><i class="bi bi-x-circle-fill"></i>
                      </div>
                      <div class="ms-3">
                        <div class="text-danger">No Member</div>
                      </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div><?php
}



/*
	if (mysqli_query($conn, $sql)) 
	{
		//echo '<meta http-equiv="REFRESH" content="0;url=index.php?page=brand">';	
		?><script>window.location="?page=brand";</script><?php
	}
	*/
}
 ?>

 <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Pages</div>
  <div class="ps-3">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb mb-0 p-0">
		<li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">loyalbee</li>
	  </ol>
	</nav>
  </div>
  <div class="ms-auto">
	
  </div>
</div>
            <!--end breadcrumb-->

<div class="card shadow-sm radius-10 border-0 mb-3">
<div class="card-body">

<form class="form-body" action="" id="form-validation" name="form-validation" method="post">
<div class="card-body">
	<div class="border p-4 rounded">
		<div class="card-title d-flex align-items-center">
			<h5 class="mb-0">loyalbee's Info</h5>
		</div>
		<hr>
		<div class="row mb-3">
			<label for="inputEnterYourName" class="col-sm-3 col-form-label">loyalbee Mobile</label>
			<div class="col-sm-9">
				<input name="mobile" type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Mobile Number">
			</div>
		</div>
		<div class="row">
			<label class="col-sm-3 col-form-label"></label>
			<div class="col-sm-9">
				<input type="submit" class="btn btn-primary px-5" value="Search">
			</div>
		</div>
	</div>
</div>
</form>
</div>
</div>





<?php 
if($yes=='1'){
?>
<div class="card-body">
   <div class="row">
	 <div class="col-12 col-lg-12 d-flex">
	  <div class="card border shadow-none w-100">
		<div class="card-body">
		  <div class="table-responsive">
		  
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
				   <th style="width:120px">OTP Request</th>
				   <th>Name</th>
				   <th>Phone</th>
				 </tr>
				</thead>
				<tbody>

<?php
$sql1 = "SELECT member_id,member_name,member_phone FROM member where member_phone = '$mobile'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) 
{
while($row1 = $result1->fetch_assoc()) 
{
echo '<tr>
<td><center><a href="?page=loyalbee&&member='.$row1["member_name"].'&&m912i='. $row1["member_id"].'&&a129n=g418563e&&19mo75=58'. $row1["member_phone"].'"><div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i></div></a></center></td>
<td>'. $row1["member_name"]. '</td>
<td>' . $row1["member_phone"]. '</td>
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

<?php 
}
?>







<?php 
if($action=='g418563e'){
	
	$gotp =  rand ( 1000 , 9999 ); //generate 4 digit
	$conduct_dt = date("Y/m/d");
	//$sql = "INSERT INTO `conduct`(`conduct_phone`, `conduct_otp`,`conduct_bill`, `flag`, `conduct_dt`, `conduct_ref`) 
	//VALUES ('$mob','$gotp','0','0','$conduct_dt','$user_name')";
	//if ($conn->query($sql) === TRUE)
	//{
		echo $gotp;
	//}	
	
	
?>
<div class="card-body">
   <div class="row">
	 <div class="col-12 col-lg-12 d-flex">
	  <div class="card border shadow-none w-100">
		<div class="card-body">
		  <div class="table-responsive">
		  <form  action="?page=loyalbee" method="post">
		    <input type="hidden" id="password" value="<?php echo $gotp;?>">
		<table><tr>
			<td>Name:</td><td> <?php echo $member;?></td>
			<td>Mobile:</td><td> <?php echo $mob;?></td></tr>
			
	<input type="hidden" name="member" value="<?php echo $member;?>">
	<input type="hidden" name="mob" value="<?php echo $mob;?>">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
			<tr><td>
			OTP:</td><td> <input type="text" name="otp" id="confirm_password" required></td>
			<td> Bill:</td><td>  <input type="text" name="conduct_bill" id="val1" required onchange="myFunction()"></td>
			<td>Discount:</td><td> <select id="mySelect" name="conduct_discount" onchange="myFunction()"> 
			<option value=""></option>
					<option value=".1">10%</option>
					<option value=".15">15%</option>
				</select></td></tr>
				<tr><td>Discount Amount:</td><td><input id="val2" name="conduct_discount" disabled></td>
				<td>Net Bill:</td><td><input id="val3" name="net_bill" disabled></td>
			</td><td>	
			<td><input type="submit" value="Submit" name="otp_submit"></td></tr></table>
			</form>
		  </div>
		</div>
	   </div><!--end row-->
	 </div>
   </div><!--end row-->
</div>

<script>
function myFunction() {
  first = Number($('#val1').val());
  second = Number($('#mySelect').val());
  if(first && second && !isNaN(first) && !isNaN(second)){
    $('#val2').val(first * second);
	  third = Number($('#val2').val());
	$('#val3').val(first - third);
  }
  else {
    $('#val2').val(0);
    $('#val3').val(0);
  }
}
</script>



<?php 
}
?>


<?php 
$otp_submit = $_POST['otp_submit'];
$bill = $_POST['bill'];
$conduct_bill=$_POST['conduct_bill'];
$mob=$_POST['mob'];
$member=$_POST['member'];
$conduct_discount=$_POST['conduct_discount'];
$conduct_dt = date("Y/m/d");
$bill1 = $conduct_bill*$conduct_discount;
$bill2 = ($conduct_bill-($conduct_bill*$conduct_discount));

if($otp_submit=='Submit'){
	
	$sql = "INSERT INTO `conduct`( `conduct_phone`, `conduct_bill`, `conduct_discount`, `net_bill`, `conduct_dt`, `conduct_ref`) 
	VALUES ('$mob','$conduct_bill','$bill1','$bill2','$conduct_dt','$user_name')";
	if ($conn->query($sql) === TRUE)
	{
		//echo '<meta http-equiv="REFRESH" content="0;url=index.php?page=loyalbee">';


///////////////email//////////////////////
$to = $member_email;
$subject = "Welcome to the loyalbee Family";

$message = '<html><body>';


$message .= "        
		<font color='red'>**This is an auto generated e-mail. Please do not reply to this e-mail.</font>
		<br /><br />
        <div style='font-size:14px'>

       Dear ".$member_name.", <br><br>

Thank you for signing up. Your account has been created. Your Mobile is ".$member_phone."
        </div>
        <br />";
        
        

$message .= '<br /><br />
        <div style="font-size:14px">
        Thanks
		<br />
		Loyalbee
        </div>';


$message .= "</body></html>";


// It is mandatory to set the content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers. From is required, rest other headers are optional
$headers .= 'From: <info@loyalbeebd.com>' . "\r\n";
//$headers .= 'Cc: sales@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
///////////////email//////////////////////



	}	



?>
<div class="card-body">
   <div class="row">
	 <div class="col-12 col-lg-12 d-flex">
	  <div class="card border shadow-none w-100">
		<div class="card-body">
		  <div class="table-responsive">
		  <form  action="?page=loyalbee" method="post">
			
	
					<div class="row row-cols-1 row-cols-xl-2 row-cols-xxl-3">
                       <div class="col">
                         <div class="card border shadow-none radius-10">
                           <div class="card-body">
                            <div class="d-flex align-items-center gap-3">
                              <div class="icon-box bg-light-primary border-0">
                                <i class="bi bi-person text-primary"></i>
                              </div>
                              <div class="info">
                                 <h6 class="mb-2">Loyalbee Member</h6>
                                 <p class="mb-1"><?php echo $member; ?></p>
                                 <p class="mb-1"><?php echo $mob; ?></p>
                              </div>
                           </div>
                           </div>
                         </div>
                       </div>
                       <div class="col">
                        <div class="card border shadow-none radius-10">
                          <div class="card-body">
                            <div class="d-flex align-items-center gap-3">
                              <div class="icon-box bg-light-success border-0">
                                <i class="fadeIn animated bx bx-dollar-circle"></i>
                              </div>
                              <div class="info">
                                 <h6 class="mb-2">Invoice</h6>
                                 <p class="mb-1"><strong>Bill</strong> : TK. <?php echo $conduct_bill; ?></p>
                                 <p class="mb-1"><strong>Discount</strong> : TK. <?php echo $conduct_bill*$conduct_discount; ?></p>
                                 <p class="mb-1"><strong>Net Bill</strong> : TK. <?php echo ($conduct_bill-($conduct_bill*$conduct_discount)); ?></p>
                              </div>
                           </div>
                           </div>
                          </div>
                       </div>
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
?>







<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("OTP NOT MATCH");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>