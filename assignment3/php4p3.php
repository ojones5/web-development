<!DOCTYPE html>
<head> 
<title>Part 4</title>
<style>
  th {width:40px;border:3px solid black;text-align: center;}
  td {width:40px;border:3px solid black;text-align: center;}
  table {width:300px;}
</style>
</head>
<html>
<body>
<table>
<tr>
<th>
Restuarant
</th>
<th>
Average Cost
</th>

</tr>

<?php
 $restaurants = array(
            array('Chama Gaucha',40.50),
            array ('Aviva by Kameel',15.00),
            array('Bone\'s Restaurant',65.00),
            array('Umi Sushi Buckhead',40.50),
            array('Fandangles',30.00),
            array('Capital Grille',60.50),
            array('Canoe',33.50),
            array('Fox Bros. BBQ',15.00),
            array('South Cith Kitchen Midtown',29.00));
            
   function restSort($var)
   {
        array_multisort($var);
        return $var;  
   }
    
    $arraylength = count($restaurants); 
    
      
    
    $sortedRestaurants = restSort($restaurants);   
           
    for ($index = 0; $index < $arraylength; $index++)
    {
        echo "<tr>"; 
        echo "<td>" .$sortedRestaurants[$index][0]."</td>";
        echo "<td>" .$sortedRestaurants[$index][1]."</td>";
        echo "</tr>";
         
    }


?>

</table>
</body>
</html>

