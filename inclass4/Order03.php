
<html>
   <head>
      <title>Car Selection</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
   <?php
   
     $referrer = $_SERVER['HTTP_REFERER'];
      if (stripos($referrer,'Order02.php') == false)
      header("location:Order01.php");
      
       $fname = $_COOKIE["fname"];
       $model = $_COOKIE["model"];
       $color = $_GET["color"];
       
       
  
       if (!fIsValidLength($color, 2, 20)) {
            echo "Enter color (2-20 characters)<br>";
            $IsValid = false;
         }
      
       
                // Validate string length.
function fIsValidLength($input, $minLength, $maxLength) {
   //returns true of false
   //trim empty spaces from beginning and end
   $input = trim($input);
   $IsValid = (strlen($input) >= $minLength && strlen($input) <= $maxLength);
   return $IsValid;
}
       
       
             
   ?>
   
      <div class="pageContainer">

         <h2 class="centerText">Your Choice</h2>
         <a href="Order01.php"> Order01.php </a>
            <div class="formGroup">
               
               
               <?php
               
               echo '<label>First name:</label>&nbsp;&nbsp;<label>'.$fname.'</label><br />';
               echo '<label>Model:</label>&nbsp;&nbsp;<label>'.$model.'</label><br />';
               echo '<label>Color:</label>&nbsp;&nbsp;<label>'.$color.'</label><br /><br />';   
              
               if ($color == "Blue" && $model == "mustang")
               {
                
                   
                   echo "<img src='images/{$model}{$color}.jpg' height='400' width='400' />";
                   
               }
               elseif ($color == "Red" && $model == "mustang")
               {
                   echo "<img src='images/{$model}{$color}.jpg' height='400' width='400' />";
               }
              elseif ($color == "Yellow" && $model == "mustang")
               {
                   echo "<img src='images/{$model}{$color}.jpg' height='400' width='400' />";
                  
               } 
               elseif ($color == "Yellow" && $model ==  "subaru")
               {
                    echo "<img src='images/{$model}{$color}.jpg' height='400' width='400' />";
                  
               } 
               elseif ($color == "Blue" && $model == "subaru")
               {
                   
                   echo "<img src='images/{$model}{$color}.jpg' height='400' width='400' />";
                   
               }
               elseif ($color == "Red" && $model == "subaru")
               {
                  echo "<img src='images/{$model}{$color}.jpg' height='400' width='400' />";
               }
               elseif ($color == "Red" && $model == "corvette")
               {
                    echo "<img src='images/{$model}{$color}.jpg' height='400' width='400' />";
               }
                elseif ($color == "Blue" && $model == "corvette")
               {
                   echo "<img src='images/{$model}{$color}.jpg' height='400' width='400' />";
               }
                elseif ($color == "Yellow" && $model == "corvette")
               {
                   echo "<img src='images/{$model}{$color}.jpg' height='400' width='400' />";
               }
               ?>
             
            </div>


      </div>

</body>
</html>