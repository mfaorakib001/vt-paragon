<?php 
   error_reporting(0);
   include('dbconnect.php');
   session_start();

  $user_name = $_SESSION['user_name'];
  $role = $_SESSION['role'];
  $user_id = $_SESSION['user_id'];
  
  
  
  if(!isset($_SESSION['user_name']))
{
echo '<meta http-equiv="REFRESH" content="0;url=../index.php">';
exit; 
}
?>

<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favi.png" type="image/png" />
  <!--plugins-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />


  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/light-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />

  <title>Loyalbee | Cpanel </title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    
    

     <?php include ('header.php') ?>
	 <?php include ('menu.php') ?>
       

       <!--start content-->
	   <?php include('page.php'); ?>
          
       <!--end page main-->


       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        
         <!--start switcher-->
       
       <!--end switcher-->

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <!--script src="assets/js/pace.min.js"></script-->
  <!--app-->
  <script src="assets/js/app.js"></script>
  <script src="assets/js/table-datatable.js"></script>
  <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>


<?php 
$today=date("Y/m/d");
$yesterday=date("Y/m/d", strtotime("-1 days"));
$yesterday2=date("Y/m/d", strtotime("-2 days"));
$yesterday3=date("Y/m/d", strtotime("-3 days"));
$yesterday4=date("Y/m/d", strtotime("-4 days"));
$yesterday5=date("Y/m/d", strtotime("-5 days"));
$yesterday6=date("Y/m/d", strtotime("-6 days"));

if($role=="Administrator")
{
$sql1 = "SELECT 
 SUM(case `member_dt` WHEN '$today' THEN 1 ELSE 0 END) T,
 SUM(case `member_dt` WHEN '$yesterday' THEN 1 ELSE 0 END)  Y1,
 SUM(case `member_dt` WHEN '$yesterday1' THEN 1 ELSE 0 END) Y2,
 SUM(case `member_dt` WHEN '$yesterday2' THEN 1 ELSE 0 END) Y3,
 SUM(case `member_dt` WHEN '$yesterday3' THEN 1 ELSE 0 END) Y4,
 SUM(case `member_dt` WHEN '$yesterday4' THEN 1 ELSE 0 END) Y5,
 SUM(case `member_dt` WHEN '$yesterday5' THEN 1 ELSE 0 END) Y6
FROM
member";
}
else {
$sql1 = "SELECT 
 SUM(case `member_dt` WHEN '$today' THEN 1 ELSE 0 END) T,
 SUM(case `member_dt` WHEN '$yesterday' THEN 1 ELSE 0 END)  Y1,
 SUM(case `member_dt` WHEN '$yesterday1' THEN 1 ELSE 0 END) Y2,
 SUM(case `member_dt` WHEN '$yesterday2' THEN 1 ELSE 0 END) Y3,
 SUM(case `member_dt` WHEN '$yesterday3' THEN 1 ELSE 0 END) Y4,
 SUM(case `member_dt` WHEN '$yesterday4' THEN 1 ELSE 0 END) Y5,
 SUM(case `member_dt` WHEN '$yesterday5' THEN 1 ELSE 0 END) Y6
FROM
member where `member_ref` = '$user_name'";
}

				$result1 = $conn->query($sql1);
				if ($result1->num_rows > 0) 
				{
				  while($row1 = $result1->fetch_assoc()) 
				  {
					 $T = $row1["T"];
					 $Y1 = $row1["Y1"];
					 $Y2 = $row1["Y2"];
					 $Y3 = $row1["Y3"];
					 $Y4 = $row1["Y4"];
					 $Y5 = $row1["Y5"];
					 $Y6 = $row1["Y6"];
				  }
				}

?>

<script>
var options = {
    series: [{
        name: "Messages",
        data: [
		<?php echo $T; ?>,
		<?php echo $Y1; ?>,
		<?php echo $Y2; ?>,
		<?php echo $Y3; ?>,
		<?php echo $Y4; ?>,
		<?php echo $Y5; ?>,
		<?php echo $Y6; ?>	
		]
    }],
    chart: {
        foreColor: '#9a9797',
        type: "bar",
        //width: 130,
        height: 320,
        toolbar: {
            show: !1
        },
        zoom: {
            enabled: !1
        },
        dropShadow: {
            enabled: 0,
            top: 3,
            left: 14,
            blur: 4,
            opacity: .12,
            color: "#3461ff"
        },
        sparkline: {
            enabled: 0
        }
    },
    markers: {
        size: 0,
        colors: ["#3461ff"],
        strokeColors: "#fff",
        strokeWidth: 2,
        hover: {
            size: 7
        }
    },
    plotOptions: {
        bar: {
            horizontal: !1,
            columnWidth: "45%",
            // distributed: true,
            //endingShape: "rounded"
        }
    },
    dataLabels: {
        enabled: !1
    },
    legend: {
        show: false
      },
    stroke: {
        show: !0,
        width: 1.5,
        curve: "smooth"
    },
    colors: ["#3461ff"],
    xaxis: {
        categories: ["<?php echo $today; ?>", 
		"<?php echo $yesterday; ?>",
		"<?php echo $yesterday2; ?>",
		"<?php echo $yesterday3; ?>",
		"<?php echo $yesterday4; ?>",
		"<?php echo $yesterday5; ?>",
		"<?php echo $yesterday6; ?>"]
    },
    tooltip: {
        theme: "dark",
        fixed: {
            enabled: !1
        },
        x: {
            show: !1
        },
        y: {
            title: {
                formatter: function(e) {
                    return ""
                }
            }
        },
        marker: {
            show: !1
        }
    }
  };

  var chart = new ApexCharts(document.querySelector("#chart2"), options);
  chart.render();
</script>
</body>

</html>


