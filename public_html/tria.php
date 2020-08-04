<html> <head>
        <title>Παρουσίαση εθνικοτήτων και παιχτών</title>
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

<h3>Παρουσίαση εθνικοτήτων και παιχτών</h3>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$result = pg_exec($link, "select distinct yeari, season, cityi, sporti, discipline, eventi, genrei from includes, competition, matches where cityi=city and yeari = year and sporti = sport and  eventi = event order by yeari asc, season, cityi, sporti, discipline, eventi, genrei");
$numrows = pg_numrows($result);
?>
<?php
        // Loop on rows in the result set.

        for($ri = 0; $ri < $numrows; $ri++) {
                
                $row = pg_fetch_array($result, $ri);

if($row["yeari"]!=$fromPerson )
{
echo "<pre></pre>";
$fromPerson = $row["yeari"];
echo "<td>", $row["yeari"], "</td>
				<td>",  $row["season"], "</td>
				<td>",	$row["cityi"], "</td><br/> ";
}
echo "<td>", $row["sporti"], "</td>
<td>",  $row["discipline"], "</td>
<td>",  $row["eventi"], "</td>
<td>",  $row["genrei"], "</td><br/>
";
        }
        pg_close($link);
        ?>
</body>

</html>
