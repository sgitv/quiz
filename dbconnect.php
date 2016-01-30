<?php 
$db = new PDO("mysql:dbname=animals;host:localhost","root","");
if($db)
{
	echo "connected";
}
else
{
	echo "oops";
}