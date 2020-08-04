<html> <head>
        <title>4.16. Βρείτε τους αθλητές που έχουν κερδίσει ταυτόχρονα μετάλλιο και σε θερινούς και σε
χειμερινούς αγώνες</title>
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

<h3>Βρείτε τους αθλητές που έχουν κερδίσει ταυτόχρονα μετάλλιο και σε θερινούς και σε
χειμερινούς αγώνες</h3>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$result = pg_exec($link, "select lname, fname from athletes, participate, competition where (lnamep= lname and fnamep= fname and yearp  = year and cityp = city and season = 'winter') intersect select lname, fname from athletes, participate, competition where (lnamep= lname and fnamep= fname and yearp  = year and cityp = city and season = 'summer') order by lname, fname");
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
