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
		<p align="center">Click on the this text and it will be hidden</p>
		</div>
	</div>
	<div align="center">
		<button name="button" value="Click here to show" class="btn btn-md btn-primary">Click here to show</button>
	</div>
	</body>
	<script type="text/javascript">
	$(document).ready(function(){
  		$("p").click(function(){
    		$(this).hide(50000);
  		});

  		$("button").click(function(){
  			$("p").show();
  		});
	});
	</script>
</html>