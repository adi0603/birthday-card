<?php
session_start();
$key = $_GET['key'];
if ($key!="") {
	$_SESSION['key']=$key;
	echo $key;
	header('Location: birthday.php');
}
else{
	header('Location: fillForm.php');
}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Happy Birthday Isha</title>
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		 <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="icon" type="image/ico" href="image/icon.png">
		<style type="text/css">
			body {
			  	background: white;
			}
			img {   
			   	left: 45%;
			   	position: absolute;
			   	top: 40%;
			}
			@media only screen and (max-width: 360px) {
			  	img {		   
				  	left: 35%;
				  	position: absolute;
				  	top: 40%;
				}
			}
		</style>
	</head>
	<body onload="myFunction()">
		<div id="loader">
			<img class="preloader" src="https://www.animatedimages.org/data/media/1033/animated-cake-image-0006.gif" border="0" alt="animated-cake-image-0006">		
		</div>
		<script>
			var myVar;
			function myFunction() {
			  myVar = setTimeout(showPage,8000);
			}
			function showPage() {
			  window.open("fillForm.php","_self");
			}
		</script>
	</body>
</html>