<html>
	<head>
	<title>First jquery example</title>
	<!-- This line will load the bootstrap css file  -->
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<!-- This file will load jquery file so that we can use its function -->
	<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
	</head>
	<body>
	<div class="panel panel-primary">
		<h3 class="text-primary" align="center"> First jquery example</h3>
		<div class="panel panel-primary">
		<p align="center">Click on the this text and it will be hidden</p><br>
		<!-- <p align="center">This is the second text to hide</p> -->
		</div>
	</div>
	</body>
	<script type="text/javascript">
	/*$(document).ready(function(){
  		$("p").click(function(){
    		$(this).hide();
  		});
	});*/

	/*The code above this line also works same as the code below. The code shown below is an alternative code for the above code*/
	$(function(){
		$("p").click(function(){
    		$(this).hide();
  		});
	});
	</script>
</html>