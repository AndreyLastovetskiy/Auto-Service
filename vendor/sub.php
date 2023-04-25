<?php

require_once("../db/db.php");

$email  = $_POST['email'];

mysqli_query($link, "INSERT INTO `subscribers` (`email`) VALUES ('$email')");

header("Location: " . $_SERVER['HTTP_REFERER']);
?>