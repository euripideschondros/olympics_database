<html> <head>
        <title>Εισαγωγή Διοργάνωσης</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
	</head> 
<!--http://zetcode.com/db/postgresqlphp/read/ --> 
<body bgcolor="white">
<?php $host = "localhost"; 
$user = "db1u37";
// Εδώ βάλετε την ομάδα σας --> 
$pass = "MD3V6s9r";
// Εδώ βάλετε τον κωδικό σας --> 
$db = $user; $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n"); 
pg_close($con); ?>

<form action="insert_competition.php" method="POST">
Πόλη : <input type="text" name="city" size="40" length="40"><BR> 
Εποχή : <input type="text" name="season" size="40" length="40"><BR> 
Χρονιά : <input type="text" name="year" size="40" length="40"><BR> 
<input TYPE = "submit" VALUE = "Εισαγωγή">
</form>
<FORM METHOD = "LINK" ACTION = "index.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Επιστροφή στην Αρχική Σελίδα">
</FORM>
<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$city = pg_escape_string($_POST['city']);
$season = pg_escape_string($_POST['season']);
$year = pg_escape_string($_POST['year']);
$query = "INSERT INTO competition(city, season, year) VALUES('" . $city . "', '" . $season . "','" . $year . "')";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
pg_close($link);
?>
</body>
</html>
