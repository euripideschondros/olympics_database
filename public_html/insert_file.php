<html>
<head>
        <title>Εισαγωγή από αρχείο</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="assets/style.css" rel="stylesheet">
</head>

<!-- http://zetcode.com/db/postgresqlphp/read/ -->

<body bgcolor="white"><?php
$host = "localhost";
$user = "db1u37";
// Εδώ βάλετε την ομάδα σας --> 
$pass = "MD3V6s9r";
// Εδώ βάλετε τον κωδικό σας -->
$db = $user;

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n");
pg_close($con);
?>
<?php include './assets/topbar.php';?>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">

<FORM METHOD = "LINK" ACTION = "insert_file_countries.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "Χώρες">
</FORM>
<FORM METHOD = "LINK" ACTION = "insert_file_summer.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "Θερινοί">
</FORM>
<FORM METHOD = "LINK" ACTION = "insert_file_winter.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "Χειμερινοί">
</FORM>
<FORM METHOD = "LINK" ACTION = "insert_mix.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "Θερινοί και Χειμερινοί σε ένα">
</FORM>
<FORM METHOD = "LINK" ACTION = "insert_data.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "Εισαγωγή των δεδομένων στη βάση δεδομένων">
</FORM>
</div>
</div>
</div>
</body>
</html>

