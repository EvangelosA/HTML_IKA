<div class="sign">	
<a href="index.php"><img src="images/logo.png" width="200" height="100" alt="IKA logo"></a>

<?php if (isset($_SESSION['user'])) { ?>
	<ul>
		<li><a href="logout.php">Αποσύνδεση</a></li>
		<li><a href="change.php">Το προφίλ μου</a></li>
		<li><b><?php echo $_SESSION['user']->name; ?> <?php echo $_SESSION['user']->surname; ?></b></li>
	</ul>
<?php }	else{ ?>
	<ul>
		<li><a href="enter.php">Είσοδος</a></li>
		<li><a href="signup.php">Εγγραφή</a></li>
	</ul>
<?php } ?>
</div>
<div class="bar">
	<center>
	<ul>
		<li><a href="index.php">Αρχική</a></li>
		<li><a href="asfalismenoi1.php">Aσφαλισμένοι</a></li>
		<li><a href="synta3iouxoi1.php">Συντάξεις</a></li>
		<li><a class="inactive" href="default.php">Οφειλέτες</a></li>
		<li><a class="inactive" href="default.php">Εργοδότες</a></li>
		<li><a class="inactive" href="default.php">Πιστοποιημένοι Φορείς</a></li>
		<li><a class="inactive" href="default.php">Υπηρεσίες Κ.Ε.ΠΑ.</a></li>
		<li><a class="inactive" href="default.php">Επικοινωνία</a></li>
		<li><a class="inactive" href="default.php">Ανακοινώσεις</a></li>
	</ul>
	</center>
</div>
