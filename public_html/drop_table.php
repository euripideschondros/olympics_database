<html> <head>
        <title>Διαγραφή Βάσης</title>
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

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "drop table competition, countries, athletes, matches, participate,includes,temp_summer, temp_winter, temp_mix";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
printf ("Deleted database successfully\n"); 
pg_close($link);
?>
<FORM METHOD = "LINK" ACTION = "index.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Επιστροφή στην Αρχική Σελίδα">
</FORM>
</body>
</html>



