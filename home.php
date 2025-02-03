<?php


session_start();

if (isset($_COOKIE['username'])) {

    $_SESSION['username'] = $_COOKIE['username'];
}

if (isset($_SESSION['username'])) {
    echo "Welcome back " . $_SESSION['username'] . '<br />';
    echo "You can <a href='Logout.php'>Logout</a>";
} else {
    echo "You are not logged in  please  <a href='login2.php'>Login</a>";
   
}
