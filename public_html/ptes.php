<html> <head>
        <title>4.4. Βρείτε για κάθε χώρα πόσα μετάλλια έχει κερδίσει. Ταξινομήστε κατά φθίνοντα αριθμό μεταλλίων</title>
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

<h3>Βρείτε για κάθε χώρα πόσα μετάλλια έχει κερδίσει. Ταξινομήστε κατά φθίνοντα αριθμό μεταλλίων</h3>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$result = pg_exec($link, "select distinct country, count(medalp) as medals  from countries, participate where borncountryp = code  group by country order by medals desc");
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
