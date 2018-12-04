<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head>
	<title>ΙΚΑ - Σύνδεση</title>
	<link rel="stylesheet" type="text/css" href="assets/auth.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=greek" rel="stylesheet">
</head>
<body>
<div class="container--login">
    <form action="functions/user_login.php" method="POST">
    <h2>Συνδεθείτε στον λογαριασμό σας</h2>
    <label>Email:</label>
    <input type="email" name="email" required>
    <label>Κωδικός:</label>
    <input type="password" name="password" required>
    <button role="submit">Σύνδεση</button>
    </form>
</div>
<?php if(isset($_GET['msg'])): ?>
    <p><?php echo $_GET['msg']; ?></p>
<?php endif; ?>
    <center>
        <a href="default.php">Ξεχάσατε τον κωδικό σας;</a>
    </center>
</body>
</html>