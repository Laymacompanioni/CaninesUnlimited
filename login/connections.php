<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mdcu0188_caninesunlimited";

if (!$con = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname))
{
    die("failed");
}
