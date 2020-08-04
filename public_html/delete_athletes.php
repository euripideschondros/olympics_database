<html> <head>
        <title>Διαγραφή Αθλητών</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
</head> <!-- 
http://zetcode.com/db/postgresqlphp/read/ --> 
<body bgcolor="white">
<?php $host = "localhost"; 
$user = "db1u37";
// Εδώ βάλετε την ομάδα σας --> 
$pass = "MD3V6s9r";
// Εδώ βάλετε τον κωδικό σας -->
$db = $user; $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n"); 
pg_close($con); ?>

<form action="delete_athletes.php" method="POST">
Επώνυμο: <input type="text" name="lname" size="40" length="40"><BR> 
Όνομα: <input type="text" name="fname" size="40" length="40"><BR> 
<input TYPE = "submit" VALUE = "Διαγραφή">
</form>

<FORM METHOD = "LINK" ACTION = "index.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Επιστροφή στην Αρχική Σελίδα">
</FORM>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$lname = $_POST['lname']; 
$fname = $_POST['fname']; 
$query = "DELETE FROM athletes where lname='$lname' AND fname='$fname'";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
pg_close($link);
?>

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

</body>
</html>
