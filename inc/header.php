<?php
$fonts="verdana";
$bgcolor="#444";
$fontcolor="#fff";
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>I Love Program</title>
	<style>
	  .phpcoding{width:900px;margin:0 auto;background:#ddd;padding:20px}
      .headeroption,.footeroption{background:#444;color:#fff;text-align:center;padding:20px;}
      .headeroption h2,.footeroption h2{margin:0}
      .maincontent{min-height:400px;padding:20px;}	  
	  input[type="text"]{width:250px;height:20px;}
	  #myform{width:400px;border:1px solid #fff;padding:10px;}
	  .tblone{width:100%;border:1px solid #fff;margin:20px 0}
	  .tblone td{padding:5px 10px; text-align:center;}
	  table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
	  table.tblone tr:nth-child(2n){background:#flflfl;height:30px;}
	
	</style>
</head>
<body>
   <div class="phpcoding">
        <section class="headeroption">
	    <h2>PHP Fundamantals Training</h2>
	    </section>
		<section class="maincontent">
		</hr>
		PHP Date and Time
		<span style="float:right">
		<?php
		date_default_timezone_set('Asia/Dhaka');
		echo "Time:".date("h:i:sa");
		
		?>
		</span>
		<hr/>