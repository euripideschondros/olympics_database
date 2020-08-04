<html> <head>
        <title>Εισαγωγή Θερινών</title>
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
$file = fopen("/home/db1u37/uploads/summer.csv", "r");
$data = fgetcsv($file, 1000, ";");

while (($data = fgetcsv($file, 1000, ";")) !== FALSE) {

        $import="INSERT INTO temp_summer(year, city, sport, discipline, surname, name, country, gender, event, medal) VALUES ( '".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."') ";
        pg_query($link,$import) or die(pg_last_error());
}

fclose($file);
pg_close($link);
?>

</body>
</html>
