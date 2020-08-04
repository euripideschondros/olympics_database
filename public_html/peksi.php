<html> <head>
        <title>4.6. Βρείτε ποιες χώρες πήραν μετάλλιο στους ολυμπιακούς αγώνες της χρονιάς Χ</title>
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

<h3>Βρείτε ποιες χώρες πήραν μετάλλιο στους ολυμπιακούς αγώνες της χρονιάς Χ</h3>

<form action="peksi.php" method="POST">
Χρονιά: <input type="text" name="yearp" size="40" length="40"><BR>
<input TYPE = "submit" VALUE = "Αναζήτηση">
</form>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$yearp = $_POST['yearp'];
$result = pg_exec($link, "select distinct country from countries, competition, participate where  borncountryp = code and cityp = city and yearp = '$_POST[yearp]'");
$numrows = pg_numrows($result);
?>

<table border="1">
        <tr>
                <th>Χώρα</th>
	</tr>
        <?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                echo "<tr>\n";
                $row = pg_fetch_array($result, $ri);
                echo " <td>", $row["country"], "</td>
		</tr>
                ";
        }
        pg_close($link);
        ?>
</table>

</body>

</html>
