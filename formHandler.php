<?php 

echo "Name: ".$_GET["name"]."<br>";
echo "Email: ".$_GET["email"]."<br>";

if ($_GET["phone"]!=""){
	echo "Phone: ".$_GET["phone"]."<br>";
}

if ($_GET["state"]!=""){
	echo "State: ".$_GET["state"]."<br>";
}
?>