            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Pages</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Home Pages </li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                
              </div>
            </div>
            <!--end breadcrumb-->

              <div class="card shadow-sm radius-10 border-0 mb-3">
                <div class="card-body">


			<div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-3 row-cols-xxl-6">
      
		   
 		 <a href="?page=loyalbee" >                 
			<div class="col">
			<div class="card radius-10">
			<div class="card-body">
			  <div class="d-flex align-items-center">
				  <div>
					  <p class="mb-0 text-secondary">Loyelbee</p>
					  <center><h4 class="my-3"><?php
			if($role=="Administrator")
			{
				$sql1 = "SELECT COUNT(*) a FROM `member` ";
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
           </a>  



 		 <a href="?page=register" >                 
			<div class="col">
			<div class="card radius-10">
			<div class="card-body">
			  <div class="d-flex align-items-center">
				  <div>
					  <p class="mb-0 text-secondary">Register</p>
					  <center><h4 class="my-3"> <br></h4></center>
				  </div>
				  <div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-people-fill"></i>
				  </div>
			  </div>
			</div>
			</div>
			</div>
           </a>


<?php	if($role=="Administrator")
			{?>
 		 <a href="?page=partner" >                 
			<div class="col">
			<div class="card radius-10">
			<div class="card-body">
			  <div class="d-flex align-items-center">
				  <div>
					  <p class="mb-0 text-secondary">Partner</p>
					  <center><h4 class="my-3"> <br></h4></center>
				  </div>
				  <div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-people-fill"></i>
				  </div>
			  </div>
			</div>
			</div>
			</div>
           </a>		   
			<?php } ?>		
             
            </div>


                </div>
              </div>
			  
			  
			  
			  
			  
			  
			  
			<div class="col-12 col-lg-6 col-xl-6">
                <div class="card radius-10">
                  <div class="card-body">
                    <div class="row g-3 align-items-center">
                      <div class="col">
                        <h5 class="mb-0">Weekly Register</h5>
                      </div>
                    </div>
                    <div id="chart2"></div>
                  </div>
                </div>
               </div>		  
			   


