<html> <head>
        <title>17. Βρείτε τους αθλητές που έχουν κερδίσει μετάλλιο με χώρα διαφορετική από την κατα-
γωγή τους. Να παρουσιάσετε τα ονοματεπώνυμα των αθλητών, την εθνικότητά τους,
το άθλημα και τη διοργάνωση.</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> </head> <!-- 
http://zetcode.com/db/postgresqlphp/read/ --> 
<body bgcolor="white">
<?php 
$host = "localhost"; 
$user = "db1u37"; // Εδώ βάλετε την ομάδα σας --> 
$pass = "MD3V6s9r"; 
// Εδώ βάλετε τον κωδικό σας --> 
$db = $user; $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n"); 
pg_close($con); ?>

<h3>17. Βρείτε τους αθλητές που έχουν κερδίσει μετάλλιο με χώρα διαφορετική από την κατα-
γωγή τους. Να παρουσιάσετε τα ονοματεπώνυμα των αθλητών, την εθνικότητά τους,
το άθλημα και τη διοργάνωση.</h3>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$result = pg_exec($link, "select distinct lname, fname, country, disciplinep, city, year from athletes, participate,competition,countries,matches where borncountry = code and lnamep = lname and fnamep = fname and yearp = year and cityp = city and  borncountryp <> borncountry order by lname, fname");
$numrows = pg_numrows($result);
?>

<table border="1">
        <tr>
                <th>Επίθετο</th>
		<th>Όνομα</th>
		<th>Χώρα καταγωγής</th>
		<th>Άθλημα</th>
		<th>Πόλη</th>
		<th>Έτος</th>
        </tr>
       <?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                echo "<tr>\n";
                $row = pg_fetch_array($result, $ri);
                echo " <td>", $row["lname"], "</td>
		<td>", $row["fname"], "</td>
		<td>", $row["country"], "</td>
		<td>", $row["disciplinep"], "</td>
                <td>", $row["city"], "</td>
		<td>", $row["year"], "</td>
		</tr>
                ";
        }
        pg_close($link);
        ?>
</table>
</body>

</html>
