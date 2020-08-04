<html> <head>
        <title>Παρουσίαση πόλεων και εποχής</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> </head> <!-- 
http://zetcode.com/db/postgresqlphp/read/ --> 
<body bgcolor="white">
<?php 
$host = "localhost"; 
$user = "db1u37"; // Εδώ βάλετε την ομάδα σας --> 
$pass = "MD3V6s9r"; 
// Εδώ βάλετε τον κωδικό σας --> 
$db = $user; 
$con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to server\n"); 
pg_close($con); 
?>

<h3>Παρουσίαση πόλεων και εποχής</h3>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$result = pg_exec($link, "select distinct season, city, year from competition order by season, city");
$numrows = pg_numrows($result);
?>
<?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                
                $row = pg_fetch_array($result, $ri);

if($row["season"]!=$fromPerson )
{
echo "<pre></pre>";
$fromPerson = $row["season"];
echo "<td>", $row["season"], "</td><br/> ";
echo "<pre></pre>";
}
echo "<td>", $row["city"], "</td>
				<td>",	$row["year"], "</td><br/>
				
                		";
        }
        pg_close($link);
        ?>
</body>

</html>
