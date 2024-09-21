<?php
$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "KASITopia";
$conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DBNAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
