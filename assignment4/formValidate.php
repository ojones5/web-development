<!DOCTYPE >
<html>

<head>
<title>Form Styles</title>
<meta charset = "utf-8" />
<meta name="keywords" content="homework, school projects, assignments, projects"/> 
<style>

<?php
 
  $fontcolor = $_GET['color'];
  $fontfamily = $_GET['font-family'];
  $fontsize = $_GET['size'];
  $text = $_GET['text'];
echo 'p {color:'.$fontcolor.';font-family:'.$fontfamily.';font-size:'.$fontsize.';}';
?>
</style>     
      
</head>
<body>
      
<h2>Form Styles</h2>
        
<?php
 
    
  echo  '<p>'.$text.'</p>';
?>   

</body>
</html>




