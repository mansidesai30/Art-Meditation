<?php

session_start();

include_once 'includes/db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];


$sql = "INSERT INTO responses (name, email, comment) 
VALUES ('$name', '$email', '$comment')";
$result = mysqli_query($mysqli, $sql);
echo "Thanks for successfully submitting your response";
//header("Location: contact.php");

?>