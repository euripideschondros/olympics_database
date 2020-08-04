<html> <head>
        <title>Παρουσίαση Αθλητών και χωρών καταγωγής τους</title>
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

<h3>Παρουσίαση αθλητών και χωρών καταγωγής τους</h3>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$result = pg_exec($link, "select distinct country, lname, fname from athletes, countries where code = borncountry order by country, lname, fname");
$numrows = pg_numrows($result);
?>
<?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                
                $row = pg_fetch_array($result, $ri);

if($row["country"]!=$fromPerson )
{
echo "<pre></pre>";
$fromPerson = $row["country"];
echo "<td>", $row["country"], "</td><br/> ";
echo "<pre></pre>";
}
echo "<td>", $row["lname"], "</td>
				<td>",	$row["fname"], "</td><br/>
				
                		";
        }
        pg_close($link);
        ?>
</body>

</html>
