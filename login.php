<?php
include './temp/header.php' ;

if (isset($_SESSION['id'])) {
    header('Location: ./admin.php');
}
?>

<div class="login">
    <form action="./back/login.php" method="POST" class="form log-form">
        <h2>Log in</h2>
        <input type="text" placeholder="Email" name="login" required>
        <input type="password" placeholder="Password" name="password" required>
        <button>Log in</button>
    </form>
</div>
</div>
<?php
       include './temp/footer.php';
       ?>