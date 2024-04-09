<?php

$dbhost = 'localhost';
$dbuser = 'net24bhalfman_boydhalfman';
$dbpass = 'sZl_}rIEp4n7';
$dbname = 'net24bhalfman_toets_netwerken_periode7';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>