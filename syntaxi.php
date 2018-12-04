<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
<head>
<script>
function extra()
{
	var c = Number(document.getElementById('type').value);
	if(c==0)
	{
		document.getElementById("demo2").innerHTML = '<label>Σύνολο Ημερών Εργασίας:</label>'+
		'<input type="text" id="days">	<label>Σύνολο εισφορών σε €:</label>	<input type="text" id="eyro">'
		+'<button  onclick="add()">Επόμενο</button> <br><br><br><div id="demo">Παρακαλώ συμπληρώστε τα πεδία</div>';
	}
	if(c==1)
	{
		document.getElementById("demo2").innerHTML = "H σύνταξη σας ανέρχεται στα 610€";
	}
	if(c==2)
	{
		document.getElementById("demo2").innerHTML = '<label>Σύνολο Ημερών Εργασίας Ασφαλισμένου:</label>'+
		'<input type="text" id="days">	<label>Σύνολο εισφορών ασφαλισμένου σε €:</label>	<input type="text" id="eyro">'
		+'<button  onclick="add()">Επόμενο</button> <br><br><br><div id="demo">Παρακαλώ συμπληρώστε τα πεδία</div>';
	}
}
function add() 
{
	var a = Number(document.getElementById('days').value);
    var b = document.getElementById('eyro').value;
	var c = document.getElementById('type').value;
	var d = document.getElementById('foreas').value;
    var div = Number(b)*Number(d)/(a*(Number(c)+1))+20;
	if(a>=6000)
	{
		document.getElementById("demo").innerHTML = "H σύνταξη σας ανέρχεται στα "
		document.getElementById("demo").innerHTML = document.getElementById("demo").innerHTML+div+" €.";
	}
	else
	{
		document.getElementById("demo").innerHTML = "Τα ένσημά σας πρέπει να υπερβαίνουν τις 6000.";
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
<h1>Εργαλείο Υπολογισμού Συντάξης</h1>
<div class="container">
	<label>Ασφαλιστικός Φορέας:</label>
	<select id="foreas">
		<option value="2">ΙΚΑ-ΕΤΑΜ</option>
		<option value="1">ΕΤΕΑΜ</option>
	</select><br>
	<label>Τύπος Σύνταξης:</label>
	<select id="type" onchange="extra();">
		<option value="0">Γήρατος</option>
		<option value="0">Αναπηρίας</option>
		<option value="2">Θανάτου Ασφαλισμένου</option>
		<option value="1">Θανάτου Συνταξιούχου</option>
	</select><br>
	<div id="demo2">
		<label>Σύνολο Ημερών Εργασίας:</label>
		<input type="text" id="days">	
		<label>Σύνολο εισφορών σε €:</label>	
		<input type="text" id="eyro">
		<button  onclick="add();">Επόμενο</button> 
		<br><br><br><div id="demo">Παρακαλώ συμπληρώστε τα πεδία</div>
	</div>
</div>
</body>
</html>