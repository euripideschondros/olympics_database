<html>
<head>
        <title>Βάσεις δεδομένων - Εργασία</title>
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

<div style="margin-bottom: 30px;"><h2>Βάση δεδομένων στοιχείων ολυμπιακών αγώνων!!</h2></div>

<FORM METHOD = "LINK" ACTION = "create_table.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Δημιουργία πινάκων">
</FORM>

<FORM METHOD = "LINK" ACTION = "insert.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Εισαγωγή από πληκτρολόγιο">
</FORM>

<FORM METHOD = "LINK" ACTION = "delete.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Διαγραφή Εγγραφών">
</FORM>

<FORM METHOD = "LINK" ACTION = "insert_file.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Εισαγωγή από αρχείο κειμένου">
</FORM>

<FORM METHOD = "LINK" ACTION = "show.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Δείτε τα δεδομένα της βάσης">
</FORM>

<FORM METHOD = "LINK" ACTION = "erotima.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Ερωτημα 4">
</FORM>

<FORM METHOD = "LINK" ACTION = "drop_table.php">
<INPUT class="btn btn-primary btn-block" TYPE = "submit" VALUE = "Διαγραφή της βάσης">
</FORM>

<button class="btn btn-primary btn-block" onclick="$('#team').toggle();">Πληροφορίες ομάδας 37</button>
<div id="team" class="row text-center" style="display: none; margin-top: 10px;">
<div class="col-md-6">
<ul class="list-unstyled">
  <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span></li>
  <li>Όνομα: Χονδρός Ευριπίδης</li>
  <li>ΑΜ: 2025200700026</li>
</ul>
</div>
<div class="col-md-6">
<ul class="list-unstyled">
  <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span></li>
  <li>Όνομα: Τσάτσαρης Ευάγγελος</li>
  <li>ΑΜ: 2025200600025</li>
</ul>
</div>
</div>

</div>
</div>
</div>
</body>

</html>
