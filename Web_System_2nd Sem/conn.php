<?php
session_start();
$dbhost = "localhost:3308";
$dbuser = "root";
$dbpass = "";
$dbname = "tiongco_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
echo "connection successful";
?>