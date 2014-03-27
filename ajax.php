<html>
	<head>
		<title> ajax demo</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="bootstrap.js"></script>

	</head>
	<body>
		this is ajax demo
		<input class= "form-control" type="text" name="usn">
		<p id="gha"> </p>

		
		<script >
		$(document).ready(function(){
	/*	  var gh =$.ajax({
		  	url: "https://api.github.com/users/Ankit-Kulkarni",
		  	 statusCode: {
		  	404: function() {
		  	alert( "page not found" );
		  	}
		  	},
		  	context: document.body
		  }).done(function() {
		  alert("hello");
		  $("#gha").innerHTML(gh);*/





	
		}) ;


		  function add(){
		  $.ajax({
		  url: "https://api.github.com/users/Ankit-Kulkarni"
		  })
		  .done(function( text ) {
		  	alert("hello");
		  
		  $("gha").innerHTML("hii");
		  }); 
		  }

	/*	  console.log(gh);*/

		 
		</script>

		<button class="btn btn-primary" onclick="add()">add a field</button>
	</body>
</html>

<!-- 
$.ajax({
		  url: "test.html",
		  cache: false
		  })
		  .done(function( html ) {
		  $( "#gha" ).append( html );
		  }); 

-->