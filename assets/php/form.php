<?php
if($_POST['message']) {
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$email_subject = "New Portfolio Form Submission";
$email_body = "You have received a new message from $name.\n".
    "Here is the message:\n $message".
mail($to,$email_subject,$email_body);
}
?>