<?php
$conn = mysqli_connect("localhost", "root", "", "dreamtoursl");

if (!$conn) {
  die("Database connection failed");

}

session_start();
?>