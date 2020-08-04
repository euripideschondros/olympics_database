<html> <head>
        <title>Εισαγωγή Αθλητών</title>
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

<form action="insert_athletes.php" method="POST">
Επώνυμο : <input type="text" name="lname" size="40" length="40"><BR> 
Όνομα : <input type="text" name="fname" size="40" length="40"><BR> 
Φύλο : <input type="text" name="sex" size="40" length="40"><BR> 
Χώρα καταγωγής : <input type="text" name="borncountry" size="40" length="40"><BR> 
<input TYPE = "submit" VALUE = "Εισαγωγή">
</form>
<FORM METHOD = "LINK" ACTION = "index.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Επιστροφή στην Αρχική Σελίδα">
</FORM>
<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$lname = pg_escape_string($_POST['lname']);
$fname = pg_escape_string($_POST['fname']);
$sex = pg_escape_string($_POST['sex']);
$borncountry = pg_escape_string($_POST['borncountry']);
$query = "INSERT INTO athletes(lname, fname, sex, borncountry) VALUES('" . $lname . "', '" . $fname . "','" . $sex . "','" . $borncountry . "')";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
pg_close($link);
?>
</body>
</html>
