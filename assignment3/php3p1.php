<?php
 $month = array('January','February','March','April','May','June','July',
  'August','September','October','November','December'); 
  
  $arraylength = count($month);
  
  for ($index = 0; $index < $arraylength;$index++)
  {
      echo $month[$index]  . "<br/>";
  }
?>
