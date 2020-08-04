<html> <head>
        <title>Εισαγωγή δεδομένων στο σχεδιασμό μας</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> </head> <!-- 
http://zetcode.com/db/postgresqlphp/read/ --> 
<body bgcolor="white">
<?php $host = "localhost"; 
$user = "db1u37"; 
// Εδώ βάλετε την ομάδα σας --> 
$pass = "MD3V6s9r"; 
// Εδώ βάλετε τον κωδικό σας --> 
$db = $user; $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n"); 
pg_close($con); ?>
<FORM METHOD = "LINK" ACTION = "index.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Επιστροφή στην Αρχική Σελίδα">
</FORM>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "INSERT INTO competition (city, season, year) SELECT DISTINCT citym, seasonm, yearm  FROM temp_mix";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
pg_close($link);
?>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "INSERT INTO matches (sport, discipline, genre, event) SELECT DISTINCT sportm, disciplinem, genderm, eventm  FROM temp_mix";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
pg_close($link);
?>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "INSERT INTO athletes (lname, fname, sex, borncountry) SELECT DISTINCT surnamem, namem, genderm, min(countrym)  FROM temp_mix GROUP BY surnamem, namem, genderm";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
pg_close($link);
?>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "INSERT INTO includes (cityi, yeari, sporti, genrei, eventi) SELECT DISTINCT citym, yearm, sportm, genderm, eventm  FROM temp_mix";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
pg_close($link);
?>


<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "INSERT INTO participate (lnamep, fnamep, borncountryp, cityp, yearp ,sportp, disciplinep,genrep, eventp, medalp) SELECT DISTINCT surnamem, namem, countrym,  citym, yearm,sportm , disciplinem,genderm, eventm, medalm FROM temp_mix group by surnamem, namem,countrym,citym,yearm, sportm, disciplinem,genderm, eventm, medalm";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
pg_close($link);
?>

</body>
</html>
