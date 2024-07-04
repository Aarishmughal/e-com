<?php
$serverName = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "ecomphp";
$_SESSION["dbName"] = $dbName;
$conn = mysqli_connect($serverName, $dbUser, $dbPass, empty($_SESSION["dbName"]) ? "" : $_SESSION["dbName"] );
