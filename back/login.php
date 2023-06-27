<?php
session_start();


require_once 'db.php';


$login = $_POST['login'];
$password = $_POST['password'];



$res = mysqli_query($connect, "SELECT * FROM users WHERE name = '$login' and pass = '$password' ");



$result = mysqli_fetch_assoc($res);

$id = $result['id'];


$count = mysqli_num_rows($res);


if ($count == 1) {
    $_SESSION['id'] = $id;
    header('Location: ../admin.php');
}
else {
    echo "Wrong login or password!";
}



?>