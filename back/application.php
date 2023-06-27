<?php
require_once 'db.php';

$phone = $_POST['phone'];
$message = $_POST['message'];


mysqli_query($connect, "INSERT INTO `application` (`id`, `phone`, `message`) VALUES (NULL, '$phone', '$message');");


header('Location: ../thanks.php')
?>