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
            
 $tmp = array ( 0 => array ('name' => 'Chama Gaucha', 
                                    'cost' => 40.50),
                         1=> array( 'name' => 'Aviva by Kameel',
                                    'cost' => 15.00),
                         2 => array('name' => 'Bone\'s Restaurant',
                                     'cost' => 65.00),
                         3 => array('name' => 'Umi Sushi Buckhead',
                                    'cost'=>40.50),
                         4 => array ('name' =>'Fandangles',
                                     'cost' => 30.00 ),
                         5 => array ('name' => 'Capital Grille',
                                      'cost' => 60.50),
                         6 => array('name' => 'Canoe', 
                                  'cost' => 33.50 ),
                         7 => array('name' => 'Fox Bros. BBQ',
                                     'cost' => 15.00 ),
                         8 => array('name' => 'South Cith Kitchen Midtown',
                                    'cost' => 29.00 ));          

                                    
                                                                     
            
   function restSort($var)
   {
       
       array_multisort( array_column($var, "cost"), SORT_ASC,$var);
        
        return $var;  
   }
    
     $sortedRestaurants = restSort($tmp);
     
    $arraylength = count($sortedRestaurants); 
    
      
    
      
           
    for ($index = 0; $index < $arraylength; $index++)                                                                           
    {
        echo "<tr>"; 
        echo "<td>" .$sortedRestaurants[$index]["name"]."</td>";
         echo "<td>" .$sortedRestaurants[$index]["cost"]."</td>";
        echo "</tr>";
         
    }


?>

</table>
</body>
</html>

