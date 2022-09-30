<?php

require 'database.php';

$name = $_POST["name"];
$email = $_POST['email'];
$pass = $_POST['pass'];
$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$pass')";
mysqli_query($con, $sql);


echo "Registration Succesfull. Goto <a href='../index.html'>home</a>";
