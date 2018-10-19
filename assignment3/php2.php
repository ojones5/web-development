<!DOCTYPE html>

<html>
<head> 
<title>Part 2</title>
<style>
  #red {background-color: red;width:35px;border:1px;padding:1px;cellspacing:1px;height:35px;}
  #black {background-color: black;width:35px;border:1px;padding:1px;cellspacing:1px;height:35px}
  table {width:300px;}

</style>
</head>
<body>
<p>

<?php



echo '<table>';
for ($row = 1; $row < 7; $row++)
{
    echo "<tr>";
    
    if ($row %2 == 0)
    {
        for ($column = 1; $column < 7; $column++)
    {
        if  ($column % 2 == 0) 
        {
             echo '<td id="black"> </td>'; 
           
        } 
        else
        {
           echo '<td id="red"> </td>'; 
        }
    } 
    }
    else
    {
        for ($column = 1; $column < 7; $column++)
    {
        if  ($column % 2 == 0) 
        {
            echo '<td id="red"> </td>';
        } 
        else
        {
          echo '<td id="black"> </td>';   
        }
    }  
    }
    
    echo "</tr>";
}
echo "</table>";
?>

</p>
</body>
</html>