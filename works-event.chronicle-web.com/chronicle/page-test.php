<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<title>Test API MAGAZINE CHRONICLE PLUS</title>
</head>
<body>
	<div class="container">

		<?php 
			// 736
			
		?>
		
	</div>

	<script>
		$(document).ready(function() {
			var hostAPI = 'http://worksevent.test/api/';
			$.ajax({
				url: hostAPI,
				type: 'POST',
				dataType: 'json',
				data: {nameAPI: 'get_recent_posts'},
			})
			.done(function(data) {
				console.log(data);
			})
			.fail(function(jqXHR, textStatus, error) {
		        console.log("error: " + error);
		    })
			// .always(function() {
			// 	console.log("complete");
			// });

		});
	</script>
</body>
</html>