<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>ΙΚΑ - Αιτήσεις</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=greek" rel="stylesheet">
<style>
body
{
	font-family: 'Open Sans', sans-serif;
	font-size: 18px;
}
.sign ul
{
    display: inline;
	list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}
.sign li
{
    float: right;
}
.sign li a
{
	display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.sign li b
{
	display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.sign li a:hover
{
	color: blue;
	font-size: 19px;
}
.bar
{
	padding: 8px;
}
.bar ul
{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
.bar li
{
	float: left;
}

.bar li a
{
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.bar li a:hover
{
    background-color: orange;
}
.bar li a.inactive
{
	background-color: grey;
}
.bar li a.active
{
	background-color: orange;
}
.container .body
{
	margin-left: 22%;
	padding: 1px 16px;
	display: inline-block;
	width: 50%;
}
input[type=text], input[type=password], input[type=email] 
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
	width: 100%;
    background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
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
</style>
</head>
<body>

<!-- Header -->
<?php require 'templates/header.php'; ?>

<div class="container">
	<div class="body">
	<h2>Ηλεκτρονικές αιτήσεις του ΙΚΑ-ΕΤΑΜ</h2>
	<?php if (isset($_SESSION['user'])) { ?>
        <?php if (isset($_GET['msg'])){ ?>
            <p><?php echo $_GET['msg']; ?></p>
        <?php }else{ ?>
        <form method="GET">
        <div>
            <label>Κλειδάριθμος</label><br>
            <input type="text">
            <input type="hidden" name="msg" value="Η αίτησή σας έγινε δεκτή!">
        </div>
        <button type="submit">Υποβολή</button>
        </form>
        <?php } ?>
	<?php }else{ ?>
		<p>Πρέπει να συνδεθείτε για να δείτε αυτή τη σελίδα!</p>
	<?php } ?>
	</div>
</div>
</body>
</html>