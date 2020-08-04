<html>
<head>
        <title>Ερωτήματα</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="assets/style.css" rel="stylesheet">
</head>

<!-- http://zetcode.com/db/postgresqlphp/read/ -->

<body bgcolor="white">
<?php
$host = "localhost";
$user = "db1u37";
$pass = "MD3V6s9r";
$db = $user;

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n");
pg_close($con);
?>
<?php include './assets/topbar.php';?>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">

<FORM METHOD = "LINK" ACTION = "ena.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "Παρουσίαση αθλητών και χωρών καταγωγής τους">
</FORM>
<FORM METHOD = "LINK" ACTION = "duo.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "Παρουσίαση πόλεων και σταδίων">
</FORM>
<FORM METHOD = "LINK" ACTION = "tria.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "Παρουσίαση εθνικοτήτων και παιχτών">
</FORM>
<FORM METHOD = "LINK" ACTION = "pena.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.1. Βρείτε όλες τις χώρες με πληθυσμό πάνω από Χ">
</FORM>
<FORM METHOD = "LINK" ACTION = "pduo.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.2. Βρείτε σε ποιες πόλεις έχουν γίνει αγώνες(θερινοί ή χειμερινοί) πάνω από μια φορά. Οι πόλεις να εμφανίζονται με φθίνον πλήθος αγώνων.">
</FORM>
<FORM METHOD = "LINK" ACTION = "ptria.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.3. Για κάθε αθλητή, βρείτε τον αριθμό των μεταλλίων που έχει κερδίσει. Ταξινομήστε κατά φθίνοντα αριθμό μεταλλίων.">
</FORM>
<FORM METHOD = "LINK" ACTION = "ptes.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.4. Βρείτε για κάθε χώρα πόσα μετάλλια έχει κερδίσει. Ταξινομήστε κατά φθίνοντα αριθμό μεταλλίων.">
</FORM>
<FORM METHOD = "LINK" ACTION = "ppen.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.5. Βρείτε το όνομα και το επίθετο των αθλητών που κατάγονται από τη χώρα Χ.">
</FORM>
<FORM METHOD = "LINK" ACTION = "peksi.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.6. Βρείτε ποιες χώρες πήραν μετάλλιο στους Ολυμπιακούς αγώνες της χρονιάς Χ.">
</FORM>
<FORM METHOD = "LINK" ACTION = "peft.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.7. Βρείτε πόσοι διαφορετικοί αθλητές έχουν κερδίσει χρυσό μετάλλιο σε οποιοδήποτε αγώνισμα από τη χρονιά Χ και μετά.">
</FORM>
<FORM METHOD = "LINK" ACTION = "poxt.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.8. Για τους θερινούς ολυμπιακούς αγώνες, για κάθε αθλητή, βρείτε τον αριθμό των διοργανώσεων που έχει κερδίσει μετάλλιο ταξινομημένες κατά φθίνοντα αριθμό μεταλλίων.">
</FORM>
<FORM METHOD = "LINK" ACTION = "pennia.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.9. Βρείτε τους αθλητές που έχουν κερδίσει μετάλλιο στο στίβο στα Χ μέτρα και στα Ψ μέτρα όχι απαραίτητα στην ίδια διοργάνωση.">
</FORM>
<FORM METHOD = "LINK" ACTION = "pdeka.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.10. Βρείτε την πόλη, την χρονολογία, την εποχή και το αγώνισμα που κέρδισε μετάλλιο ο αθλητής με όνομα Χ και επίθετο Ψ.">
</FORM>
<FORM METHOD = "LINK" ACTION = "pent.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.11. Βρείτε τα ονοματεπώνυμα των Ελλήνων αθλητών που έχουν κερδίσει χρυσό μετάλλιο σε αγώνες από τη χρονιά Χ και μετά.">
</FORM>
<FORM METHOD = "LINK" ACTION = "pdodeka.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.12. Βρείτε πόσα μετάλλια έχει κερδίσει κάθε χώρα στο στίβο(Athletics) από τη χρονιά Χ εώς και τη χρονιά Ψ. Ταξινομήστε κατά φθίνοντα αριθμό μεταλλίων.">
</FORM>
<FORM METHOD = "LINK" ACTION = "pdektria.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.13. Βρείτε πόσες γυναίκες έχουν πάρει μετάλλιο Μ με κάθε χώρα στους αγώνες του έτους Χ. Ταξινομήστε κατά φθίνοντα αριθμό μεταλλίων.">
</FORM>
<FORM METHOD = "LINK" ACTION = "pdektes.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.14 Βρείτε τους αθλητές που έχουν κερδίσει περισσότερα από Ν μετάλλια για τη χώρα Χ. Οι αθλητές να εμφανίζονται με φθίνοντα αριθμό μεταλλίων.">
</FORM>
<FORM METHOD = "LINK" ACTION = "pdekpen.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.15 Βρείτε τους αθλητές που έχουν κερδίσει μετάλλιο στο στίβο στα 100μ αλλά δεν έχουν κερδίσει μετάλλιο στην σκυταλοδρομία 4 επί 100μ στην ίδια διοργάνωση. Παρουσιάστε τα ονοματεπώνυμα των αθλητών και την διοργάνωση.">
</FORM>
<FORM METHOD = "LINK" ACTION = "pdekeksi.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.16 Βρείτε τους αθλητές που έχουν κερδίσει ταυτόχρονα μετάλλιο και σε θερινούς και σε χειμερινούς αγώνες.">
</FORM>
<FORM METHOD = "LINK" ACTION = "pdekefta.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.17 Βρείτε τους αθλητές που έχουν κερδίσει μετάλλιο με χώρα διαφορετική από την καταγωγή τους. Να παρουσιάσετε τα ονοματεπώνυμα των αθλητών, την εθνικότητα τους, το άθλημα και τη διοργάνωση.">
</FORM>
<FORM METHOD = "LINK" ACTION = "pdekoxtw.php">
<INPUT class="btn btn-default btn-block" TYPE = "submit" VALUE = "4.18 Βρείτε ποιοι αθλητές έχουν κερδίσει στο ίδιο αγώνισμα χρυσό μετάλλιο σε δύο διαδοχικές θερινές διοργανώσεις. Οι αθλητές να εμφανίζονται με αλφαβητική σειρά.">
</FORM>
</div>
</div>
</div>
</body>
</html>
