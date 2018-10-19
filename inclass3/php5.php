<!DOCTYPE html>
<head> 
<title>Problem 5 </title>
</head>
<html>
<body>
<p>

<?php
 
 $haystack = "WDWWLWWWLDDWDL";
 $needle = "WWW";
 $location = strpos($haystack,$needle);
 $character = substr($haystack,$location+strlen($needle),1);
 
 echo "The character is ".$character;
?>

</p>
</body>
</html>