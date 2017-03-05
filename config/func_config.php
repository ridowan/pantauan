<?php
//database connection details
$host = "192.168.89.15";
$user = "postgres";
$pass = "pastigana2016";
$db   = "hotspot";
$port = "5432";

$connect = pg_connect("host=$host user=$user password=$pass dbname=$db port=$port") or die ("Database or host Error".pg_last_error());

?>
