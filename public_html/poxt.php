<html> <head>
        <title>4.8. Για τους θερινούς ολυμπιακούς αγώνες, για κάθε αθλητή, βρείτε τον αριθμό των διοργανώσεων που έχει κερδίσει μετάλλιο ταξινομημένες κατά φθίνοντα αριθμό μεταλλίων</title>
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

<h3>Για τους θερινούς ολυμπιακούς αγώνες, για κάθε αθλητή, βρείτε τον αριθμό των διοργανώσεων που έχει κερδίσει μετάλλιο ταξινομημένες κατά φθίνοντα αριθμό μεταλλίων</h3>


<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$result = pg_exec($link, "select lname, fname, count(distinct cityp) as competition, count(medalp) as medals from athletes,participate, competition where lnamep = lname and fnamep = fname and  season='summer' and cityp = city and yearp = year group by lname, fname order by medals desc");
$numrows = pg_numrows($result);
?>

<table border="1">
        <tr>
                <th>Επίθετο</th>
                <th>Όνομα</th>
                <th>Αριθμός διοργανώσεων</th>
                <th>Αριθμός μεταλλίων</th>
	</tr>
        <?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                echo "<tr>\n";
                $row = pg_fetch_array($result, $ri);
                echo " <td>", $row["lname"], "</td>
		<td>", $row["fname"], "</td>
		<td>", $row["competition"], "</td>
		<td>", $row["medals"], "</td>
		</tr>
                ";
        }
        pg_close($link);
        ?>
</table>

</body>

</html>
