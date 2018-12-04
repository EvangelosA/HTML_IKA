<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head>
	<title>ΙΚΑ - Το προφίλ μου</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=greek" rel="stylesheet">
<style>
body
{
	font-family: 'Open Sans', sans-serif;
	font-size: 18px;
}
.container
{
    padding: 16px;
	width: 34%;
}
input[type=text], input[type=password],input[type=email]
{
    width: 100%;
    padding: 10px 8px;
    margin: 8px 0;
    display: inline-block;
	box-sizing: border-box;
    border: 1px solid #ccc;
    font-size: 16px;
}
button 
{
    font-size: 16px;
	background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
	width: 50%;
	float: left;
}
button:hover
{
    opacity: 0.8;
}
.cancelbtn
{
    padding: 14px 20px;
    background-color: red;
}
.cancelbtn:hover
{
    opacity: 0.6;
}
.container{
    max-width: 600px;
    margin: 0 auto;
}
</style>
<body>
<div class="container">
	<h2>Επεξεργασία λογαριασμού ΙΚΑ</h2>
    <form action="functions/user_update.php" method="POST">
        <label>Όνομα χρήστη:</label>
        <input type="text" name="name" alt="name" value="<?php echo $_SESSION['user']->name; ?>" required>
        <label>Επώνυμο χρήστη:</label>
        <input type="text" name="surname" alt="surname" value="<?php echo $_SESSION['user']->surname; ?>" required>
        <label>Πατρώνυμο χρήστη:</label>
        <input type="text" name="midname" alt="midname" value="<?php echo $_SESSION['user']->midname; ?>" required>
        <label>AMKA:</label>
        <input type="text" name="amka" alt="amka" size="13" maxlength="13" value="<?php echo $_SESSION['user']->amka; ?>"required>
        <label>AΦΜ:</label>
        <input type="text" name="afm" alt="afm" size="13" maxlength="13" value="<?php echo $_SESSION['user']->afm; ?>" required>
        <label>Password:</label>
        <input type="password" name="password" alt="password" size="13" maxlength="13" value="" required>
        <font size="2">Σημείωση: Αναλογα με τον τυπο λογαριασμού του, ο χρήστης έχει συγκεκριμένα δικαιώματα χρήσης του ιστοχώρου.
        Η αλλαγή δικαιώματων του χρήστη γίνεται μόνο στα υποκαταστήματα ΙΚΑ-ΕΤΑΜ.</font><br><br>
        <a href="index.php"><button type="button" class="cancelbtn">Επιστροφή στην αρχική σελίδα</button><a>
        <input type="hidden" name="email" alt="email" value="<?php echo $_SESSION['user']->email; ?>" required>
        <button type="submit">Υποβολή και Αποθήκευση αλλαγών</button>
    </form>
</div>


</body>
</html>