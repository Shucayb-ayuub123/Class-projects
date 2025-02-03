



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Login2.php" method="POST">
        <label for="">username</label>
        <input type="text" name="name">

        <br> <br>

        <label for="">password</label>
        <input type="password" name="password">
        <br> <br>
        <label for="">Remember</label>
        <input type="checkbox" name="remember" />

        <br> <br>

        <button name="submit">Login</button>

    </form>
</body>

</html>



<?php

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];

    $validUser = "admin";
    $validPassword = "admin123";

    if ($validUser === $username &&  $validPassword === $password) {
        session_start();

        $_SESSION['username'] = $username;

        if (isset($_POST['remember'])) {
            setcookie("username", $username, time() + 3600 * 2, '/');
        }

        echo "Login seccusfully , Welcome $username" . '<br />';
        echo "<a href='home.php'>Go home</a>";
    } else {
        echo "Invalid user";
    }
}




?>