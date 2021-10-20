<?php

$server= "localhost";
$user= "root";
$pass= "";
$db= "db_perpustakaan";

$conn= mysqli_connect("$server", "$user", "$pass", "$db");

if( !$conn ){
    die("db tidak terhubung" . mysqli_connect_error());
}