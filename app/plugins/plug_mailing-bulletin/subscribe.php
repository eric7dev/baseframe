<?php
$email = $_GET['email'];
file_put_contents('mailinglist', $email.PHP_EOL , FILE_APPEND );
?>
<h1>Subscribed</h1>
<p>Your email "<?php echo $email;?>" has been added to our mailing list for a regular bulletin.</p>
<br/>
<p>Thank you.</p>