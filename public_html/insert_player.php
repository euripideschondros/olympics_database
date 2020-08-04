<html> <head>
        <title>Εισαγωγή Παικτών</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
	</head> 
<!--http://zetcode.com/db/postgresqlphp/read/ --> 
<body bgcolor="white">
<?php $host = "localhost"; 
$user = "db1u47"; 
// Εδώ βάλετε την ομάδα σας --> 
$pass = "W9twnLJ6"; 
// Εδώ βάλετε τον κωδικό σας --> 
$db = $user; $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n"); 
pg_close($con); ?>

<form action="insert_player.php" method="POST">
Όνομα : <input type="text" name="firstname" size="40" length="40"><BR> 
Επίθετο : <input type="text" name="lastname" size="40" length="40"><BR> 
Θέση : <input type="text" name="position" size="40" length="40"><BR> 
Ομάδα : <input type="text" name="nameofteam" size="40" length="40"><BR>
Εθνικότητα : <input type="text" name="nation" size="40" length="40"><BR>
Ηλικία : <input type="text" name="age" size="40" length="40"><BR>
Ταχύτητα : <input type="text" name="speed" size="40" length="40"><BR>
Ντρίμπλα : <input type="text" name="dribbling" size="40" length="40"><BR>
Σουτ : <input type="text" name="shot" size="40" length="40"><BR>
Άμυνα : <input type="text" name="defense" size="40" length="40"><BR>
Πάσα : <input type="text" name="pase" size="40" length="40"><BR>
<input TYPE = "submit" VALUE = "Εισαγωγή">
</form>
<FORM METHOD = "LINK" ACTION = "index.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Επιστροφή στην Αρχική Σελίδα">
</FORM>
<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$firstname = pg_escape_string($_POST['firstname']);
$lastname = pg_escape_string($_POST['lastname']);
$position = pg_escape_string($_POST['position']);
$nameofteam = pg_escape_string($_POST['nameofteam']);
$nation = pg_escape_string($_POST['nation']);
$age = pg_escape_string($_POST['age']);
$speed = pg_escape_string($_POST['speed']);
$dribbling = pg_escape_string($_POST['dribbling']);
$shot = pg_escape_string($_POST['shot']);
$defense = pg_escape_string($_POST['defense']);
$pase = pg_escape_string($_POST['pase']);
$query = "INSERT INTO PLAYERS(firstname, lastname, position, nameofteam, nation, age, speed, dribbling, shot, defense, pase) VALUES('" . $firstname . "', '" . $lastname . "','" . $position . "','" . $nameofteam . "','" . $nation . "','" . $age . "','" . $speed . "','" . $dribbling . "','" . $shot . "','" . $defense . "','" . $pase . "')";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
pg_close($link);
?>
</body>
</html>
