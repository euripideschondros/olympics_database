<html> <head>
        <title>4.13. Βρείτε πόσες γυναίκες έχουν πάρει μετάλλιο M με κάθε χώρα στους αγώνες του
έτους Χ. Ταξινομήστε κατά φθίνοντα αριθμό μεταλλίων.</title>
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

<h3>Βρείτε πόσες γυναίκες έχουν πάρει μετάλλιο M με κάθε χώρα στους αγώνες του
έτους Χ. Ταξινομήστε κατά φθίνοντα αριθμό μεταλλίων.</h3>

<form action="pdektria.php" method="POST">
Μετάλλιο: <input type="text" name="medalp" size="40" length="40"><BR> 
Χρονιά: <input type="text" name="yearp" size="40" length="40"><BR> 
<input TYPE = "submit" VALUE = "Αναζήτηση">
</form>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$medalm = $_POST['medalp'];
$yearm = $_POST['yearp'];
$result = pg_exec($link, "select distinct country, count(distinct concat(lname, fname)) as athletes,count(medalp) as medals from countries, athletes, participate where borncountryp = code and lnamep = lname and fnamep = fname and genrep = 'Women' and medalp = '$_POST[medalp]' and  yearp = '$_POST[yearp]' group by country order by medals desc");
$numrows = pg_numrows($result);

?>

<table border="1">
        <tr>
                <th>Χώρα</th>
		<th>Αριθμός Αθλητών</th>
                <th>Αριθμός μεταλλίων</th>
	</tr>
        <?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                echo "<tr>\n";
                $row = pg_fetch_array($result, $ri);
                echo " <td>", $row["country"], "</td>
		<td>", $row["athletes"], "</td>
		<td>", $row["medals"], "</td>
		</tr>
                ";
        }
        pg_close($link);
        ?>
</table>

</body>

</html>
