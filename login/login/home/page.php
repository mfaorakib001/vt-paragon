		<main class="page-content">
            <!--breadcrumb-->
<?php 
$page = $_GET['page']; 

if($page==''){include('home.php');}
if($page=='loyalbee'){include('loyalbee.php');}
if($page=='register'){include('register.php');}
if($page=='partner'){include('partner.php');}

if($page=='partnerReport'){include('partnerReport.php');}
if($page=='allpartnerReport'){include('allpartnerReport.php');}
if($page=='webReport'){include('webReport.php');}
if($page=='userReport'){include('userReport.php');}

if($page=='newpartner'){include('newpartner.php');}
if($page=='datareport'){include('datareport.php');}
if($page=='salesreport'){include('salesreport.php');}

?>

          </main>