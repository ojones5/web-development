<!DOCTYPE html>
<head> 
<title>Problem 6 </title>
</head>
<html>
<body>
<p>

<?php
 
 $string =  "Hannah";
 $revstring =   strtolower(strrev($string));
 
 if (strcmp(strtolower($string),$revstring) == 0)
 {
     echo $string." is a palindrome" ;
 }
 

?>

</p>
</body>
</html>