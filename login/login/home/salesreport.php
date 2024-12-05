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
										<th>Email</th>
										<th>Date</th>
										<th>Bill</th>
										<th>Discount</th>
										<th>Net Bill</th>
										<th>Brand</th>
									</tr>
								</thead>
								<tbody>			
			
			
<?php			
				$sql1 = "SELECT `member_name`, `member_phone`, `member_email` , 
b.conduct_bill, b.conduct_discount, b.net_bill, b.conduct_dt, b.conduct_ref 
FROM `member` a, conduct b
WHERE b.conduct_phone=a.member_phone
";
				$result1 = $conn->query($sql1);
				if ($result1->num_rows > 0) 
				{
				  while($row1 = $result1->fetch_assoc()) 
				  {
					echo '<tr>';
					echo '<td>'.$row1["member_name"].'</td>';
					echo '<td>'.$row1["member_phone"].'</td>';
					echo '<td>'.$row1["member_email"].'</td>';
					echo '<td>'.$row1["conduct_dt"].'</td>';
					echo '<td>'.$row1["conduct_bill"].'</td>';
					echo '<td>'.$row1["conduct_discount"].'</td>';
					echo '<td>'.$row1["net_bill"].'</td>';
					echo '<td>'.$row1["conduct_ref"].'</td>';
					  echo '</tr>';
				  }
				}			
?>			

									
								</tbody>
								<tfoot>
									<tr>
										<th>Name</th>
										<th>Phone</th>
										<th>Email</th>
										<th>Date</th>
										<th>Bill</th>
										<th>Discount</th>
										<th>Net Bill</th>
										<th>Brand</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>			