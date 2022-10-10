<?php

$surname = $_POST['surname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['surname'])) {
        $errors[] = "Surname is required";
    }

    if (empty($_POST['firstname'])) {
        $errors[] = "Firstname is required";
    }

    if (empty($_POST['email'])) {
        $errors[] = "Email address is required";
    }

    if (empty($_POST['telephone'])) {
        $errors[] = "Telephone number is required";
    }

    if (empty($_POST['subject']) || $_POST['subject'] == 'Choose subject') {
        $errors[] = "Subject is required";
    }

    if (empty($_POST['message'])) {
        $errors[] = "message is required";
    }

    if (count($errors) > 0){
                foreach ($errors as $error){
                    echo "* ".$error."<br>";
                }
                echo "<strong>Please go back and try again</strong>";
                }

    if (empty($errors)) {
        echo "Thank you " . $firstname . " " . $surname . " for contacting us regarding " . $subject . "<br>";
        echo "One of our advisers will contact you either at " . $email . " or by telephone at " . $telephone . " as soon as possible to process your request: <br>";
        echo $message;
    }
}


