<?php

if(isset($_POST['submit']))
{
$to = "mansidesai3006@gmail.com";
$subject = "My subject";
$email = $_POST['email'];
$txt = $_POST['message'];
$headers = "From:" .$email. "\r\n" .
"CC: mansidesai3006@gmail.com";



echo "<script>alert('.$email.');</script>";

mail($to,$subject,$txt,$headers);
echo "<script>window.location = 'contact.php';</script>";
}
?>