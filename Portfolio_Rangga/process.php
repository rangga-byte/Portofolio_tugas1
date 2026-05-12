<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$conn->query("INSERT INTO messages (name, email, message) VALUES ('$name','$email','$message')");

header("Location: index.php");