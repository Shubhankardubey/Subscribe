<?php
if(isset($_POST['email'])) {
	$email=$_POST['email'];
	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$file= file_get_contents(__DIR__.'/subscribers.php');
		$file=explode(', ', $file);
		if(in_array($email, $file)){
			echo "You have alreay subscribed";
		}
		else{
			$fopen=fopen(__DIR__.'/subscribers.php', 'a');
			fwrite($fopen, $email.', ');
			fclose($fopen);
			echo "Thnk you";
		}
	}else{
		echo "Please enter valid email";
	}
}


?>