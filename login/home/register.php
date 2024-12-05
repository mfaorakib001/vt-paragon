 <?php
   error_reporting(0);
   include('dbconnect.php');
$submit = $_POST['submit'];
$member_name = $_POST['member_name'];
$member_phone = $_POST['member_phone'];
$member_email = $_POST['member_email'];
$member_dt = date("Y/m/d");
$member_gender = $_POST['member_gender'];
$member_profession = $_POST['member_profession'];
$member_address = $_POST['member_address'];
$member_dob = $_POST['member_dob'];
$do59ne = $_GET['do59ne'];

if($submit=='Register') 
{
	$sql = "INSERT INTO `member`(`member_name`, `member_phone`, `member_email`, `member_dt`, `member_gender`, `member_profession`, `member_address`, `member_ref`,`member_dob`) 
	VALUES ('$member_name','$member_phone','$member_email','$member_dt','$member_gender','$member_profession','$member_address','$user_name','$member_dob')";


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

	if ($conn->query($sql) === TRUE)
	{
		?><script>window.location="?page=register&&do59ne=4o8k";</script><?php
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
		<li class="breadcrumb-item active" aria-current="page"><a href="?page=register">Register</a></li>
	  </ol>
	</nav>
  </div>
  <div class="ms-auto">
  </div>
</div>



<div class="card shadow-sm radius-10 border-0 mb-3">
<div class="card-body">
<?php if($do59ne=='4o8k'){	?>			
				<div class="alert border-0 bg-light-success alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                      <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                      </div>
                      <div class="ms-3">
                        <div class="text-success">Registration Successful</div>
                      </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
	<?php	}?>
<form class="form-body" action="" id="form-validation" name="form-validation" method="post">
<div class="card-body">
	<div class="border p-4 rounded">
		<div class="card-title d-flex align-items-center">
			<h5 class="mb-0">Register</h5>
		</div>
		<hr>
		<div class="row mb-3">
			<label for="inputEnterYourName" class="col-sm-3 col-form-label">Name:</label>
			<div class="col-sm-9">
				<input name="member_name" type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Name" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="inputEnterYourName" class="col-sm-3 col-form-label">Phone:</label>
			<div class="col-sm-9">
				<input name="member_phone" type="number" class="form-control" id="inputEnterYourName" placeholder="Enter Phone" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="inputEnterYourName" class="col-sm-3 col-form-label">Email:</label>
			<div class="col-sm-9">
				<input name="member_email" type="text" class="form-control" id="inputEnterYourName" placeholder="Enter Email" required>
			</div>
		</div>
		<div class="row mb-3">
			<label for="inputEnterYourName" class="col-sm-3 col-form-label">Date of Birth:</label>
			<div class="col-sm-9">
				<input name="member_dob" type="date" class="form-control" required> 
			</div>
		</div>

		<div class="row mb-3">
			<label class="col-sm-3 col-form-label">Gender:</label>
			<div class="col-sm-9">
				<select class="form-select mb-3" name="member_gender" required>
					<option value=""></option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
				</select>
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label">Profession:</label>
			<div class="col-sm-9">
				<select class="form-select mb-3" name="member_profession" required>
					<option value=""></option>
					<option value="Private">Private Job</option>
					<option value="Govt">Govt. Job</option>
					<option value="Business">Business</option>
					<option value="Student">Student</option>
				</select>
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label">Area of Residence:</label>
			<div class="col-sm-9">
				<select class="form-select mb-3" name="member_address" required>
					<option value=""></option>
						<option value="Adabar">Adabar</option>
						<option value="Badda">Badda</option>
						<option value="Bangshal">Bangshal</option>
						<option value="Bhashantek">Bhashantek</option>
						<option value="Bhatara">Bhatara</option>
						<option value="Biman Bandar">Biman Bandar</option>
						<option value="Cantonment">Cantonment</option>
						<option value="Chalkbazar">Chalkbazar</option>
						<option value="Dakhinkhan">Dakhinkhan</option>
						<option value="Darus Salam">Darus Salam</option>
						<option value="Demra">Demra</option>
						<option value="Dhanmondi">Dhanmondi</option>
						<option value="Gendaria">Gendaria</option>
						<option value="Gulshan">Gulshan</option>
						<option value="Hazaribagh">Hazaribagh</option>
						<option value="Jatrabari">Jatrabari</option>
						<option value="Kadamtoli">Kadamtoli</option>
						<option value="Kafrul">Kafrul</option>
						<option value="Kamrangirchar">Kamrangirchar</option>
						<option value="Kamringir  Char">Kamringir  Char</option>
						<option value="Khilgaon">Khilgaon</option>
						<option value="Kotwali">Kotwali</option>
						<option value="Lalbagh">Lalbagh</option>
						<option value="Mirpur">Mirpur</option>
						<option value="Mohammadpur">Mohammadpur</option>
						<option value="Motijheel">Motijheel</option>
						<option value="Pallabi">Pallabi</option>
						<option value="Paltan Model">Paltan Model</option>
						<option value="Ramna Model">Ramna Model</option>
						<option value="Rampura">Rampura</option>
						<option value="Rupnagar">Rupnagar</option>
						<option value="Sabujbag">Sabujbag</option>
						<option value="Shah Ali">Shah Ali</option>
						<option value="Shahjahanpur">Shahjahanpur</option>
						<option value="Sherebangla Nagar">Sherebangla Nagar</option>
						<option value="Shyampur">Shyampur</option>
						<option value="Sutrapur">Sutrapur</option>
						<option value="Tejgaon Industrial">Tejgaon Industrial</option>
						<option value="Tejgaon Model">Tejgaon Model</option>
						<option value="Turag">Turag</option>
						<option value="Uttara Model">Uttara Model</option>
						<option value="Uttarkhan">Uttarkhan</option>
				</select>
			</div>
		</div>		
		
		<div class="row">
			<label class="col-sm-3 col-form-label"></label>
			<div class="col-sm-9">
				<input type="submit" class="btn btn-primary px-5" value="Register" name="submit">
			</div>
		</div>
	</div>
</div>
</form>
</div>
</div>