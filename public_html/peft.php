<html> <head>
        <title>4.7. Βρείτε ποσοι διαφορετικοί αθλητές έχουν κερδίσει χρυσό μετάλλιο σε οποιοδήποτε αγώνισμα από τη χρονιά Χ και μετά.</title>
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

<h3>Βρείτε ποσοι διαφορετικοί αθλητές έχουν κερδίσει χρυσό μετάλλιο σε οποιοδήποτε αγώνισμα από τη χρονιά Χ και μετά</h3>

<form action="peft.php" method="POST">
Χρονιά: <input type="text" name="yearp" size="40" length="40"><BR>
<input TYPE = "submit" VALUE = "Αναζήτηση">
</form>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$yearp = $_POST['yearp'];
$result = pg_exec($link, "select count(distinct concat(lname, fname)) as count from  athletes, participate where lnamep = lname and fnamep = fname and  medalp = 'Gold' and yearp >=  '$_POST[yearp]'");
$numrows = pg_numrows($result);
?>

<table border="1">
        <tr>
                <th>Πλήθος αθλητών</th>
	</tr>
        <?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                echo "<tr>\n";
                $row = pg_fetch_array($result, $ri);
                echo " <td>", $row["count"], "</td>
		</tr>
                ";
        }
        pg_close($link);
        ?>
</table>

</body>

</html>
