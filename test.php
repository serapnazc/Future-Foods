
<?php

	include('./includes-website/html_header.php');

	if(isset($_POST['test-submit'])){
		$to = "serapnazc@gmail.com";
	 $subject = "This is subject";

	 $message = "<b>This is HTML message.</b>";
	 $message .= "<h1>This is headline.</h1>";

	 $from ="futurefoodsforum.com";

	 SendEmail($to,$subject,$message,$from);
	}
?>
----------------------------------------------------


<form action="test.php" method="post">

	<div class="form-group">
		<button class="btn apply-btn pull-right" type="submit" name="test-submit">GÖNDER</button>
	</div>
</form>
