<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
      <title>Calendar</title>
      <meta charset = "utf-8" />
      <meta name="keywords" content="homework, school projects, assignments, projects"/> 
      <link href="css/calendar.css" rel="stylesheet" type="text/css">
</head>
<body>


<h2>
<?php
date_default_timezone_set('America/New_York');

if (idate("G") >= 12)
$ext = "pm";
else
$ext = "am";

echo date("F j, Y, g:i a");
?>  
</h2> 
<br/>             
<div>
         
<p>


<table>
<caption> Daily Schedule </caption>


<?php
date_default_timezone_set('America/New_York');
$hours_to_show = rand(0,12);
$counter = intval(get_hour_string( date("Y/m/d")));
$ext="";
$names= array("Jacob","Shakiem","Robert","Laquan","Shannon","Jill","Melenda","David","Peter","Karen","Lisa","John");


if (idate("G") >= 12)
$ext = "pm";
else
$ext = "am";

for ($i = $counter; $i <= $counter+$hours_to_show;$i++)
{
    $person = rand(0,11);
    $j =  ($i > 12 ? $i - 12: $i );
    
    if ($j == 12 && $ext=="am")
        $ext="pm";
    else if($j == 12 && $ext=="pm")
        $ext="am";

    ($i % 2 ? $background='<tr class="even_row"'.">": $background='<tr class="odd_row"'.">");        
    echo $background;
    echo "<th>".$j." ".$ext."</th>";
    echo "<td>".$names[rand(0,11)]."</td>";
    echo "<td>".$names[rand(0,11)]."</td>";
    echo "<td>".$names[rand(0,11)]."</td>";
    echo "</tr>";

}

function get_hour_string($var)
{
      return date("g");
} 

 
    
?>
</table>
<p>
</div>

</body>
</html>