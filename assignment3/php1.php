<!DOCTYPE html>
<head> 
<title>Part 1</title>
</head>
<html>
<body>
<p>

<?php

function isBitten()
{
  return rand(0,1); 
}

if  (isBitten())
{
    echo "Charlie ate my lunch!" . "<br/>";   
}
else
{
        echo "Charlie did not eat my lunch!" . "<br/>";   
}

?>

</p>
</body>
</html>