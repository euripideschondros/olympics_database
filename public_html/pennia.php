<html> <head>
        <title>4.9. Βρείτε τους αθλητές που έχουν κερδίσει μετάλλιο στο στίβο στα Χ μέτρα και στα Ψ
μέτρα όχι απαραίτητα στην ίδια διοργάνωση.</title>
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

<h3>Βρείτε τους αθλητές που έχουν κερδίσει μετάλλιο στο στίβο στα Χ μέτρα και στα Ψ
μέτρα όχι απαραίτητα στην ίδια διοργάνωση.</h3>

<form action="pennia.php" method="POST">
Μέτρα: <input type="text" name="eventp" size="40" length="40"><BR> 
Μέτρα: <input type="text" name="eventp" size="40" length="40"><BR> 
<input TYPE = "submit" VALUE = "Αναζήτηση">
</form>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$eventm = $_POST['eventm'];
$eventm= $_POST['eventm'];
$result = pg_exec($link, "select lname, fname from  athletes, participate where lname= lnamep and fname= fnamep and sportp = 'Athletics' AND eventp = '$_POST[eventp]' AND eventp = '$_POST[eventp]'");
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
