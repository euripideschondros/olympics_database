<html>
<head>
        <title>Δεδομένα της Βάσης</title>
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
<div class="col-md-8 col-md-offset-2">

<div style="margin-bottom: 30px;"><h2>Επιλέξτε ποια δεδομένα θέλετε να δείτε</h2></div>

<FORM METHOD = "LINK" ACTION = "show_countries.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Δεδομένα Χωρών">
</FORM>

<FORM METHOD = "LINK" ACTION = "show_summer.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Δεδομένα Θερινών">
</FORM>

<FORM METHOD = "LINK" ACTION = "show_winter.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Δεδομένα Χειμερινών">
</FORM>

<FORM METHOD = "LINK" ACTION = "show_mix.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Δεδομένα Ολυμπιακών Αγώνων">
</FORM>

<FORM METHOD = "LINK" ACTION = "show_competition.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Δεδομένα Διοργανώσεων">
</FORM>

<FORM METHOD = "LINK" ACTION = "show_match.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Δεδομένα Αγωνισμάτων">
</FORM>

<FORM METHOD = "LINK" ACTION = "show_athletes.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Δεδομένα Αθλητών">
</FORM>

</div>
</div>
</div>
</body>

</html>
