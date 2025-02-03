<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    include 'Connect.php';

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

        $ID = $_GET['id'];

        $sql = "SELECT * FROM tbl_student where std_id = '" . $ID . "' ";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if (!$row) {
            header('Location:Data.php');
            exit;
        } else {
            $ID1  = $row['std_id'];
            $name = $row['std_name'];
            $Address = $row['std_address'];
            $email  = $row['email'];
        }
    }



    if (isset($_POST['submit'])) {
        $ID2 = $_POST['ID'];
        $name1 = $_POST['name'];
        $Address1 = $_POST['Address'];
        $email1 = $_POST['email'];
        $sql = "UPDATE tbl_student SET std_name =  
        '" . $name1 . "' , std_address = '" . $Address1 . "',  email = '" . $email1 . "'
        where std_id = '" . $ID2 . "' ";
        $result  = mysqli_query($conn, $sql);

 

        if ($result) {
            header('Location:Data.php');
        } else {
            echo  "there is a error" . mysqli_error($conn);
        }
    }
    ?>
    <form action="" method="post">
        <p><input type="hidden" name="ID" value="<?php echo  $ID1      ?>"></p>
        <p> name : <input type="text" name="name" value="<?php echo $name   ?>"></p>
        <p> Address : <input type="text" name="Address" value="<?php echo $Address   ?>"></p>
        <p> email : <input type="text" name="email" value="<?php echo $email   ?>"></p>
        <button name="submit">submit</button>
    </form>

</body>

</html>