<html> <head>
        <title>18. Βρείτε ποιοι αθλητές έχουν κερδίσει στο ίδιο αγώνισμα χρυσό μετάλλιο σε δύο διαδοχικές θερινές διοργανώσεις. Οι αθλητές να εμφανίζονται με αλφαβητική σειρά.</title>
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

<h3>18. Βρείτε ποιοι αθλητές έχουν κερδίσει στο ίδιο αγώνισμα χρυσό μετάλλιο σε δύο διαδοχικές θερινές διοργανώσεις. Οι αθλητές να εμφανίζονται με αλφαβητική σειρά.</h3>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$result = pg_exec($link, "select distinct lname, fname, yearp from athletes,participate,competition where (cityp = city and yearp = year and season = 'summer' and lnamep = lname and fnamep= fname and eventp = eventp and medalp = 'Gold') intersect select distinct lname, fname , (yearp+4) from athletes,participate, competition where cityp = city and yearp = year and season = 'summer' and lnamep = lname and fnamep= fname and eventp= eventp and medalp = 'Gold' order by lname, fname");
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
