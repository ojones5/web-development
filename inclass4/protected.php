<?php
     session_start(); 
      if ($_SERVER['REQUEST_METHOD'] === 'POST')
      {
          
          if (isset($_POST["abandon"]))
          {
            if ($_POST['abandon'] == true)
            {
              unset($_POST['abandon']);
              header("location: login.php");                  
              exit; 
              
              }
              
          }
          
      }
     
     if (!isset($_SESSION["username"]))
     {
         header("location: login.php");                  
         exit; 
     }
?>

<html>
   <head>
      <title>Password Protected Page</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText">

            <h2>Password Protected Page</h2><hr>

            <h2>Welcome <?php echo $_SESSION["username"] ?></h2>
            <img src="vault.jpg" style="width:400px;height:auto;" />
            <br>
                 Your session will timeout
                 after 24 minutes of inactivity.<br><br>

         <form method="post" class="formLayout">
            <div class="formGroup">
               <input type="hidden" name="abandon" value="true">
               <label> </label>
               <button type="submit">Logout</button>
            </div>
         </form>

      </div>
   </body>
</html>