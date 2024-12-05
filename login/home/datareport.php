 <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Pages</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Report</li>
                  </ol>
                </nav>
              </div>

            </div>
            <!--end breadcrumb-->
			
			
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Name</th>
										<th>Phone</th>
										<th>email</th>
										<th>Ref</th>
										<th>Gender</th>
										<th>Profession</th>
										<th>Birthdate</th>
										<th>Address</th>
										<th>Marital</th>
										<th>Anniversary</th>
									</tr>
								</thead>
								<tbody>			
			
			
<?php			
				$sql1 = "SELECT `member_name`, `member_phone`, `member_email`, `member_ref`, `member_gender`, 
				`member_profession`, `member_dob`, `member_address`, `member_marital`, `member_anniversary` 
				FROM `member`";
				$result1 = $conn->query($sql1);
				if ($result1->num_rows > 0) 
				{
				  while($row1 = $result1->fetch_assoc()) 
				  {
					echo '<tr>';
					echo '<td>'.$row1["member_name"].'</td>';
					echo '<td>'.$row1["member_phone"].'</td>';
					echo '<td>'.$row1["member_email"].'</td>';
					echo '<td>'.$row1["member_ref"].'</td>';
					echo '<td>'.$row1["member_gender"].'</td>';
					echo '<td>'.$row1["member_profession"].'</td>';
					echo '<td>'.$row1["member_dob"].'</td>';
					echo '<td>'.$row1["member_address"].'</td>';
					echo '<td>'.$row1["member_marital"].'</td>';
					echo '<td>'.$row1["member_anniversary"].'</td>';
					  echo '</tr>';
				  }
				}			
?>			

									
								</tbody>
								<tfoot>
									<tr>
										<th>Name</th>
										<th>Phone</th>
										<th>email</th>
										<th>Ref</th>
										<th>Gender</th>
										<th>Profession</th>
										<th>Birthdate</th>
										<th>Address</th>
										<th>Marital</th>
										<th>Anniversary</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>			