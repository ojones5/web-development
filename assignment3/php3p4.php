<?php
 $month = array('January','February','March','April','May','June','July',
  'August','September','October','November','December'); 
   
  asort($month);
  $arraylength = count($month);
  
  foreach ($month as $value)
  {
     echo $value . "<br/>";
  }   
?>
