<html> <head>
        <title>4.10. Βρείτε την πόλη, τη χρονολογία, την εποχή και το αγώνισμα που κέρδισε μετάλλιο ο
αθλητής με όνομα Χ και επίθετο Ψ</title>
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

<h3>Βρείτε την πόλη, τη χρονολογία, την εποχή και το αγώνισμα που κέρδισε μετάλλιο ο
αθλητής με όνομα Χ και επίθετο Ψ</h3>

<form action="pdeka.php" method="POST">
Επίθετο: <input type="text" name="lnamep" size="40" length="40"><BR> 
Όνομα: <input type="text" name="fnamep" size="40" length="40"><BR> 
<input TYPE = "submit" VALUE = "Αναζήτηση">
</form>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$lnamep = $_POST['lnamep'];
$fnamep = $_POST['fnamep'];
$result = pg_exec($link, "select city, year, season, eventp from competition, participate where cityp= city and yearp= year and lnamep = '$_POST[lnamep]' and fnamep = '$_POST[fnamep]'");
$numrows = pg_numrows($result);

?>

<table border="1">
        <tr>
                <th>Πόλη</th>
                <th>Έτος</th>
                <th>Σαιζόν</th>
                <th>Άθλημα</th>
	</tr>
        <?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                echo "<tr>\n";
                $row = pg_fetch_array($result, $ri);
                echo " <td>", $row["city"], "</td>
<td>", $row["year"], "</td>
<td>", $row["season"], "</td>
<td>", $row["eventp"], "</td>
		</tr>
                ";
        }
        pg_close($link);
        ?>
</table>

</body>

</html>
