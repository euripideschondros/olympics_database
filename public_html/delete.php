<html>
<head>
        <title>Διαγραφή</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
<div class="col-md-9 col-md-offset-1">

<div style="margin-bottom: 30px;"><h3>Διαγραφή Δεδομένων</h3></div>
<FORM METHOD = "LINK" ACTION = "delete_competition.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "Διαγραφή Δοργανώσεων">
</FORM>
<FORM METHOD = "LINK" ACTION = "delete_matches.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "Διαγραφή Αγωνισμάτων">
</FORM>
<FORM METHOD = "LINK" ACTION = "delete_athletes.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "Διαγραφή Αθλητών">
</FORM>
</div>
</div>
</div>

</body>

</html>
