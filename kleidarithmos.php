<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
<head>
<script>
function extra()
{
	var c = Number(document.getElementById('k').value);
	if(c==1)
	{
		window.location.href="index.php";
	}
	else
	{
		document.getElementById("demo").innerHTML = 'Ο κλειδάριθμος δεν είναι σωστός (είναι το 1).';
	}
}
</script>
<style>
body
{
	font-size: 18px;
}
.container
{
    padding: 16px;
	width: 34%;
}
input[type=text], input[type=password],option,select
{
    width: 100%;
    padding: 10px 8px;
    margin: 8px 0;
    display: inline-block;
	box-sizing: border-box;
    border: 1px solid #ccc;
    font-size: 18px;
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
	width: 100%;
	float: left;
}
button:hover
{
    opacity: 0.8;
}
</style>
</head>
<body>
<h1>Εισαγωγή κλειδαρίθμου</h1>
<div class="container">
	Η διαδικασία φτάνει στο τέλος της.<br>
	Παρακαλώ εισάγετε τον κλειδάριθμο που έχει έρθει στο λογαριασμό e-mail σας (Ο οποίος είναι το 1).
	<br><br><label>Kλειδάριθμος:</label>	
	<div id="demo" style="font-size:14px; color:red;"></div>
	<input type="text" id="k" alt="κλειδάριθμος">
	<button  onclick="extra()">Επόμενο</button> 
</div>
</body>
</html>
