<html> <head>
        <title>4.1. Βρείτε όλες με τις χώρες με πληθυσμό μεγαλύτερο του Χ</title>
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

<h3>Βρείτε όλες τις χώρες με πληθυσμό μεγαλύτερο του Χ.</h3>

<form action="pena.php" method="POST">
Πληθυσμός: <input type="text" name="population" size="40" length="40"><BR>
<input TYPE = "submit" VALUE = "Αναζήτηση">
</form>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$age = $_POST['age'];
$result = pg_exec($link, "select country, population from countries where population > '$_POST[population]' ORDER BY country");
$numrows = pg_numrows($result);
?>

<table border="1">
        <tr>
                <th>Χώρα</th>
		<th>Πληθυσμός</th>
        </tr>
       <?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                echo "<tr>\n";
                $row = pg_fetch_array($result, $ri);
                echo " <td>", $row["country"], "</td>
		<td>", $row["population"], "</td>
		</tr>
                ";
        }
        pg_close($link);
        ?>
</table>
</body>

</html>
