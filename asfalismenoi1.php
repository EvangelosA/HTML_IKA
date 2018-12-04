<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head>
	<title>ΙΚΑ - Ασφαλισμένοι</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=greek" rel="stylesheet">
<style>
body
{
	font-family: 'Open Sans', sans-serif;
	font-size: 18px;
}
.sign ul
{
    display:inline;
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

.container
{
	width: 100%;
}
.container ul 
{
	border-radius: 5px;
	border:1px solid #ccc;
	list-style-type: none;
    margin: 0;
    padding: 4px;
	padding-top: 8px;
    width: 20%;
    background-color: #f1f1f1;
    height: 100%;
	position: fixed;
    overflow: auto;
}
.container li a 
{
	display: block;
	color: #000;
	padding: 8px 16px;
	text-decoration: none;
	border-bottom-style: solid;
	border-color: #ccc;
	border-width: 1px;
}
.container li a.active 
{
	background-color: #4CAF50;
	color: white;
}
.container li a:hover:not(.active) 
{
	background-color: orange;
	color: white;
	font-size: 19px;
}
.container .body
{
	margin-left: 22%;
	padding: 1px 16px;
	display: inline-block;
	width: 50%;
}
</style>
</head>
<body>

<!-- Header -->
<?php require 'templates/header.php'; ?>


<div class="container">
	<ul>
		<li><a class="active" href="">Οδηγός Ασφαλισμένου</a></li>
		<li><a href="asfalismenoi2.php">Ατομικός Λογαριασμός Ασφάλισης</a></li>
		<li><a href="default.php">Κατηγορία1</a></li>
		<li><a href="default.php">Κατηγορία2</a></li>
	</ul>
	<div class="body">
	<h2>Οδηγός Ασφαλισμένου</h2>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	</div>
</div>
</body>
</html>