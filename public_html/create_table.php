<html> <head>
        <title>Δημιουργία πινάκων</title>
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
$query = "CREATE TABLE competition (city varchar(50), season varchar(10), year integer, PRIMARY KEY(city, year))";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
printf ("\nCompetition table created!!!\n"); 
pg_close($link);
?>
<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "CREATE TABLE countries(country varchar(60), code varchar(15), population integer, gdp money, PRIMARY KEY(country, code))";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
printf ("\Countries table created!!!\n"); 
pg_close($link);
?>
<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "CREATE TABLE athletes(lname varchar(50), fname varchar(50), sex varchar(10), borncountry varchar(50), PRIMARY KEY(lname, fname, sex ,borncountry))";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
printf ("\nAthletes table created!!!\n"); 
pg_close($link);
?>
<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "CREATE TABLE matches(sport varchar(70), discipline varchar(70), genre varchar(10), event varchar(70), PRIMARY KEY(sport,discipline, genre, event))";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
printf ("\nMatches table created!!!\n"); 
pg_close($link);
?>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "CREATE TABLE includes(cityi varchar(50), yeari integer, sporti varchar(70), genrei varchar(10), eventi varchar(70))";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
printf ("\nincludes table created!!!\n"); 
pg_close($link);
?>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "CREATE TABLE participate(lnamep varchar(50), fnamep varchar(50), borncountryp varchar(60), cityp varchar(50) , yearp integer, sportp varchar(70), disciplinep varchar(70),genrep varchar(10), eventp varchar(70), medalp varchar(10))";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
printf ("\nparticipate table created!!!\n"); 
pg_close($link);
?>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "CREATE TABLE temp_summer(year integer, city varchar(50), sport varchar(70), discipline varchar(70), surname varchar(50), name varchar(50), country varchar(50), gender varchar(50), event varchar(70), medal varchar(50))";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
printf ("\nTemp_summer table created!!!\n"); 
pg_close($link);
?>
<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "CREATE TABLE temp_winter(yearw integer, cityw varchar(50), sportw varchar(70), disciplinew varchar(70), surnamew varchar(50), namew varchar(50), countryw varchar(10), genderw varchar(10), eventw varchar(70), medalw varchar(10))";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
printf ("\nTemp_winter table created!!!\n"); 
pg_close($link);
?>
<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass");
$query = "CREATE TABLE temp_mix(yearm integer, citym varchar(50), sportm varchar(70), disciplinem varchar(70), surnamem varchar(50), namem varchar(50), countrym varchar(50), genderm varchar(10), eventm varchar(70), medalm varchar(10), seasonm varchar(10))";
$rs = pg_query($link, $query) or die("Cannot execute query: $query\n");
printf ("\nTemp_mix table created!!!\n"); 
pg_close($link);
?>

<FORM METHOD = "LINK" ACTION = "index.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Επιστροφή στην Αρχική Σελίδα">
</FORM>

</body>
</html>
