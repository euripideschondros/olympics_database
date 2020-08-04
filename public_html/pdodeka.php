<html> <head>
        <title>4.12. Βρείτε πόσα μετάλλια έχει κερδίσει κάθε χώρα στο στίβο (Athletics) από τη χρονιά
Χ έως και τη χρονιά Ψ. Ταξινομήστε κατά φθίνοντα αριθμό μεταλλίων.</title>
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

<h3>Βρείτε πόσα μετάλλια έχει κερδίσει κάθε χώρα στο στίβο (Athletics) από τη χρονιά
Χ έως και τη χρονιά Ψ. Ταξινομήστε κατά φθίνοντα αριθμό μεταλλίων.</h3>

<form action="pdodeka.php" method="POST">
Χρονιά: <input type="text" name="yearp" size="40" length="40"><BR> 
Χρονιά: <input type="text" name="yearpp" size="40" length="40"><BR> 
<input TYPE = "submit" VALUE = "Αναζήτηση">
</form>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$yearp = $_POST['yearp'];
$yearpp = $_POST['yearpp'];
$result = pg_exec($link, "select distinct country, count(medalp) as medals from countries, participate where borncountryp = code and yearp >= '$_POST[yearp]' and sportp = 'Athletics' and  yearp <= '$_POST[yearpp]' group by country order by medals desc");
$numrows = pg_numrows($result);

?>

<table border="1">
        <tr>
                <th>Χώρα</th>
                <th>Αριθμός μεταλλίων</th>
	</tr>
        <?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                echo "<tr>\n";
                $row = pg_fetch_array($result, $ri);
                echo " <td>", $row["country"], "</td>
		<td>", $row["medals"], "</td>
		</tr>
                ";
        }
        pg_close($link);
        ?>
</table>

</body>

</html>
