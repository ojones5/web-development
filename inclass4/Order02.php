<!DOCTYPE html>
<html>
   <head>
      <title>Order Confirmation</title>
      <link href="style.css" rel="stylesheet" type="text/css">

   </head>
   <body>
      <div >
         <?php
      
      $referrer = $_SERVER['HTTP_REFERER'];
      if (stripos($referrer,'Order01.php') == false)
      header("location:Order01.php");

         //Retrieve inputs (using helper function)
        
         $fname = $_GET['fname'];
       
         
         
         //set validation flag
         $IsValid = true;
         
         if (!isset($_GET['fname']))
         {
             $IsValid = false;
         }
         
  
         if (!isset($_GET['model']))
         {
             $model = "";
             $IsValid = false;
         }


         echo "<p class='centeredNotice'>";
  

         if (!fIsValidLength($fname, 2, 20)) {
            echo "Enter first name (2-20 characters)<br>";
            $IsValid = false;
         }


       if (!fIsValidLength($model, 2, 20) ) {
            echo "Enter model (2-20 characters)<br>";
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
         

 
         echo "</p>";
         if (!$IsValid) {
           
             echo ("Invalid First Name or Model <br/>");
             
            //stop execution. 
            exit();
         }
         //all inputs are valid. 
        
        setcookie("fname",$fname); 
        setcookie("model",$model);  
         ?>
      </div>
      
     <div class="pageContainer">

         <h2 class="centerText">Select Color</h2>

         <form action="Order03.php" class="formLayout">
            <div class="formGroup">
               <label>Auto Color</label>
               <select name="color">
               <option value="Blue">Blue</option>
               <option value="Yellow">Yellow</option>
               <option value="Red">Red</option>               
               </select>
            </div>
            
            <div class="formGroup">
               <label></label>
               <button type="submit"> >> Next >> </button>

            </div>
            
      </div>
      
   </body>
</html>