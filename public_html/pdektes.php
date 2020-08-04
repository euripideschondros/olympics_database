<html> <head>
        <title>4.14. Βρείτε τους αθλητές που έχουν κερδίσει περισσότερα από N μετάλλια για τη χώρα Χ.
Οι αθλητές να εμφανίζονται με φθίνοντα αριθμό μεταλλίων.</title>
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

<h3>Βρείτε τους αθλητές που έχουν κερδίσει περισσότερα από N μετάλλια για τη χώρα Χ.
Οι αθλητές να εμφανίζονται με φθίνοντα αριθμό μεταλλίων.</h3>

<form action="pdektes.php" method="POST">
Αριθμός μεταλλίων: <input type="text" name="medalp" size="40" length="40"><BR> 
Χώρα: <input type="text" name="country" size="40" length="40"><BR> 
<input TYPE = "submit" VALUE = "Αναζήτηση">
</form>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$medalp = $_POST['medalp'];
$country = $_POST['country'];
$result = pg_exec($link, "select lname, fname, count(medalp) as medals from athletes,participate,countries where borncountryp = code and lnamep = lname and fnamep= fname and country = '$_POST[country]'  group by lname, fname, country having  count(medalp) > '$_POST[medalp]' order by medals desc");
$numrows = pg_numrows($result);

?>

<table border="1">
        <tr>
                <th>Επίθετο</th>
		<th>Όνομα</th>
		<th>Αριθμός μεταλλίων</th>
		
	</tr>
        <?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                echo "<tr>\n";
                $row = pg_fetch_array($result, $ri);
                echo " <td>", $row["lname"], "</td>
		<td>", $row["fname"], "</td>
		<td>", $row["medals"], "</td>
		
		</tr>
                ";
        }
        pg_close($link);
        ?>
</table>

</body>

</html>
