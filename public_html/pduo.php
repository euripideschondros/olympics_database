<html> <head>
        <title>4.2. Βρείτε σε ποιες πόλεις έχουν γίνει αγώνες(θερινοί ή χειμερινοί) πάνω από μια φορά. Οι πόλεις να εμφανίζονται κατά φθίνοντα αριθμό αγώνων</title>
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

<h3>Βρείτε σε ποιες πόλεις έχουν γίνει αγώνες(θερινοί ή χειμερινοί) πάνω από μια φορά. Οι πόλεις να εμφανίζονται κατά φθίνοντα αριθμό αγώνων</h3>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$result = pg_exec($link, "select city, count(city) as count from competition group by city having count(city)>1 order by count(city) desc");
$numrows = pg_numrows($result);
?>

<table border="1">
        <tr>
                <th>Πόλη</th>
		<th>Αριθμός αγώνων</th>
        </tr>
       <?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                echo "<tr>\n";
                $row = pg_fetch_array($result, $ri);
                echo " <td>", $row["city"], "</td>
		<td>", $row["count"], "</td>
		</tr>
                ";
        }
        pg_close($link);
        ?>
</table>
</body>

</html>
