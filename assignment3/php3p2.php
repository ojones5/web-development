<?php
  $month = array('January','February','March','April','May','June','July',
  'August','September','October','November','December'); 
  
  sort($month); 
  $arraylength = count($month);
  
  
  $sortedMonth = $month;
  for ($index = 0; $index < $arraylength;$index++)
  {
     echo $sortedMonth[$index]  . "<br/>";
  } 
?>
