<html> <head>
        <title>Εισαγωγή Αγωνισμάτων</title>
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

<form action="insert_matches.php" method="POST">
Άθλημα : <input type="text" name="sport" size="40" length="40"><BR> 
Κατηγορία : <input type="text" name="discipline" size="40" length="40"><BR> 
Φύλο : <input type="text" name="genre" size="40" length="40"><BR> 
Όνομα : <input type="text" name="event" size="40" length="40"><BR> 
<input TYPE = "submit" VALUE = "Εισαγωγή">
</form>
<FORM METHOD = "LINK" ACTION = "index.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Επιστροφή στην Αρχική Σελίδα">
</FORM>
<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$sport = pg_escape_string($_POST['sport']);
$discipline = pg_escape_string($_POST['discipline']);
$genre = pg_escape_string($_POST['genre']);
$event = pg_escape_string($_POST['event']);
$query = "INSERT INTO matches(sport, discipline, genre, event) VALUES('" . $sport . "', '" . $discipline . "','" . $genre . "','" . $event . "')";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
pg_close($link);
?>
</body>
</html>
