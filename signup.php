<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head>
	<title>ΙΚΑ - Εγγραφή</title>
	<link rel="stylesheet" type="text/css" href="assets/auth.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=greek" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php if(!isset($_GET['msg'])): ?>
	<h2>Δημιουργια λογαριασμου ΙΚΑ</h2>
	<h3>Παρακαλώ εισάγετε τα στοιχεία σας</h3>
    <form action="functions/user_signup.php" method="POST">
        <label>Όνομα χρήστη:</label>
        <input type="text" alt="name" name="name" required>
        <label>Επώνυμο χρήστη:</label>
        <input type="text" alt="surname" name="surname" required>
        <label>Πατρώνυμο χρήστη:</label>
        <input type="text" alt="midname" name="midname" required>
        <label>Email:</label>
        <input type="email" alt="email" name="email" required>
        <label>AMKA:</label>
        <input type="text" alt="AMKA" name="amka" size="13" maxlength="13" required>
        <label>AΦΜ:</label>
        <input type="text" alt="AFM" name="afm" size="8" maxlength="8" required>
        <label>Κωδικός:</label>
        <input type="password" alt="password" name="password" required>
        <p>Δημιουργώντας έναν λογαριασμό IKA συμφωνείτε με την <a href="default.php" target="_blank" rel="nofollow" >Πολιτική Απορρήτου</a>
        του ΙΚΑ και αποκτάτε δικαιώματα ασφαλισμένου ΙΚΑ στον ιστοχώρο.</p>
        <div class="clearfix">
        <a href="index.php"><button type="button" class="cancelbtn">Επιστροφή στην αρχική σελίδα</button><a>
        <button type="submit">Υποβολή και Ολοκλήρωση Εγγραφής</button>
    </form>
    <?php else: ?>
        <p><?php echo $_GET['msg']; ?></p>
        <p>Συνδεθείτε <a href="./enter.php">εδώ</a>!<p>
    <?php endif; ?>
	</div>
</div>

</body>
</html>