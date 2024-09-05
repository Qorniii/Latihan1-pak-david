<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "table_pegawai");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>