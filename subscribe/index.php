<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Email Subscription</title>
</head>
<body style="text-align: center;">
<h2>Email Subscription using php and jquery</h2>
<input id="email" type="email" placeholder="Enter email here..." name="email">
<button type="submit" id="submit">Submit</button>
<div id="result" style="margin-top:100px;">

</div>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function () {
	$('#email').focus();
	$('#email').keypress(function(event) {
		var email = $('#email').val();
		var keyCode = event.keyCode;
		if (keyCode == 13){
			$.ajax({
				type: 'POST',
				url: 'action.php',
				data: {email: email},
				success: function(data)  {
					$('#result').hide;
					$('#result').html(data);
					$('#result').fadeIn();
				}
			});
		};
	});
	
	$('#submit').clicl(function(){
		var email=$('#email').val();
		$.ajax({
			type: 'POST',
				url: 'action.php',
				data: {email: email},
				success: function(data)  {
					$('#result').hide;
					$('#result').html(data);
					$('#result').fadeIn();
				}
		});
	});
	
});
</script>

</body>
</html>