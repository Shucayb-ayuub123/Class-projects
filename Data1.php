<?php

session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    nav{
        width: 100%;
        display: flex;
        justify-content: end;

    }
    nav ul {
        padding: 20px;
        margin-right: 40px;
        gap: 30px;
    }
    nav ul li {
        list-style: none;
    }
    nav a{
        text-decoration: none;
        margin-left: 20px;
        font-family: sans-serif;
        font-size: 20px;
    }
</style>

<body>


    <nav  >
        <ul>
            <li> <i class="fa-solid fa-user"></i> <a href=""><?php echo $_SESSION['username']     ?></a></li>
        </ul>
    </nav>

</body>

</html>