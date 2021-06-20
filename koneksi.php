<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "catering";

$conn = new mysqli($hostname, $username, $password, $database);

if($conn -> connect_error){
    die("Tidak Koneksi".$conn -> connect_error);
}
?>