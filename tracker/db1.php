<?php
$user = 'root';
$pass = '';
$db = 'hack';

$db = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");

echo "Good work";

?>