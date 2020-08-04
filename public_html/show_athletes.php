<?php $host = "localhost"; 
$user = "db1u37";
// Εδώ βάλετε την ομάδα σας --> 
$pass = "MD3V6s9r";
// Εδώ βάλετε τον κωδικό σας --> 
$db = $user; $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n"); 
pg_close($con); ?>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "SELECT * FROM athletes";

$result = pg_query($query);

$i =0;
echo'<html><body><table><tr>';
while($i<pg_num_fields($result))
{
$fieldName = pg_field_name($result, $i);
echo'<td>'.$fieldName.'</td>';
$i = $i +1;
}
echo'</tr>';
$i=0;

while($row=pg_fetch_row($result))
{
echo'<tr>';
$count=count($row);
$y=0;
while($y<$count)
{
$c_row=current($row);
echo '<td>'.$c_row.'</td>';
next($row);
$y = $y+1;
}
echo '</tr>';
$i = $i +1;
}
pg_free_result($result);
echo'</table></body></html><tr>';
?>
