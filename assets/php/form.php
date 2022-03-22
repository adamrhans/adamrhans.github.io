<?php
if($_POST["message"]) {
mail("adamrhans@gmail.com", "Mail from Portfolio",
$_POST["message"]. "From:" [email]);
}
?>