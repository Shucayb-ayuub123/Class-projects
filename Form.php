<?php



include 'Connect.php';


if (isset($_POST['btnRegister'])) {

    $name = $_POST['user'];
    $Address = $_POST['address'];
    $gender = $_POST['gender'];

    $email  = $_POST['email'];


    $sql  =  "INSERT INTO tbl_student(std_name, std_address , gender , email) values ('$name'  , '$Address' , '$gender' , '$email')";


    $result = mysqli_query($conn, $sql);


    if (!$result) {
        echo "Error";
    } else {
        echo "One row has inserted";
    }
}










?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <p>
            student_name : <input type="text" name="user">
        </p>


        <p>
            student_address : <input type="text" name="address">
        </p>

        <p>
            gender : male <input type="radio" name="gender" value="male">
            female <input type="radio" name="gender" value="female">
        </p>


        <p>
            email : <input type="email" name="email">
        </p>
        <p>


            <button type="submit" name="btnRegister">Register</button>
        </p>
    </form>
</body>

</html>