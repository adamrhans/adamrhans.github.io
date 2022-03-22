<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if($_POST['message']) {
mail("adamrhans@gmail.com", "New Portfolio Form Submission",
"You have received a new message from $name.\n".
    "Here is the message:\n $message".);
}
?>