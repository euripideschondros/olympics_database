<html> <head>
        <title>4.15. Βρείτε τους αθλητές που έχουν κερδίσει μετάλλιο στο στίβο στα 100μ αλλά δεν έχουν
κερδίσει μετάλλιο στη σκυταλοδρομία 4 επί 100μ στην ίδια διοργάνωση. Παρουσιάστε
τα ονοματεπώνυμα των αθλητών και τη διοργάνωση</title>
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

<h3>Βρείτε τους αθλητές που έχουν κερδίσει μετάλλιο στο στίβο στα 100μ αλλά δεν έχουν
κερδίσει μετάλλιο στη σκυταλοδρομία 4 επί 100μ στην ίδια διοργάνωση. Παρουσιάστε
τα ονοματεπώνυμα των αθλητών και τη διοργάνωση</h3>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$result = pg_exec($link, "select lname, fname from athletes, participate where lnamep= lname and fnamep = fname and eventp='100M' except (select lname, fname from athletes, participate where lnamep= lname and fnamep = fname and eventp = '4X100M Relay') order by lname, fname");
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
