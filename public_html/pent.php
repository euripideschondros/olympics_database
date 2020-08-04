<html> <head>
        <title>4.11. Βρείτε τα ονοματεπώνυμα των Ελλήνων αθλητών που έχουν κερδίσει χρυσό μετάλλιο
σε αγώνες από τη χρονιά Χ και μετά.</title>
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

<h3>Βρείτε τα ονοματεπώνυμα των Ελλήνων αθλητών που έχουν κερδίσει χρυσό μετάλλιο
σε αγώνες από τη χρονιά Χ και μετά.</h3>

<form action="pent.php" method="POST">
Χρονιά: <input type="text" name="yearp" size="40" length="40"><BR>
<input TYPE = "submit" VALUE = "Αναζήτηση">
</form>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$country = $_POST['country'];
$result = pg_exec($link, "select lname, fname from athletes, participate where lnamep = lname and fnamep = fname and borncountry = 'GRE' and medalp = 'Gold' and yearp >= '$_POST[yearp]'");
$numrows = pg_numrows($result);
?>

<table border="1">
        <tr>
                <th>Επίθετο</th>
                <th>Όνομα</th>
	</tr>
        <?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                echo "<tr>\n";
                $row = pg_fetch_array($result, $ri);
                echo " <td>", $row["lname"], "</td>
		<td>", $row["fname"], "</td>
		</tr>
                ";
        }
        pg_close($link);
        ?>
</table>

</body>

</html>
