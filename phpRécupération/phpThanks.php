<?php

$surname = $_POST['surname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo "Thank you ".$firstname." ".$surname." for contacting us regarding ".$subject."<br>";
echo "One of our advisers will contact you either at ".$email." or by telephone at ".$telephone." as soon as possible to process your request: <br>";
echo $message;

?>