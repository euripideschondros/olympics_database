<html> <head>
        <title>Εισαγωγή σε ένα πίνακα</title>
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
$query = "INSERT INTO temp_mix (yearm, citym, sportm, disciplinem, surnamem, namem, countrym, genderm, eventm, medalm, seasonm) SELECT year, city, sport, discipline, surname, name, country, gender, event, medal, 'summer' FROM temp_summer";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
pg_close($link);
?>
<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "INSERT INTO temp_mix (yearm, citym, sportm, disciplinem, surnamem, namem, countrym, genderm, eventm, medalm, seasonm) SELECT yearw, cityw, sportw, disciplinew, surnamew, namew, countryw, genderw, eventw, medalw, 'winter' FROM temp_winter";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
pg_close($link);
?>
</body>
</html>
