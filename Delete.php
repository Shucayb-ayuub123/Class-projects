<?php

include 'Connect.php';


if (isset($_GET['id'])) {


    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_student where std_id  = '" . $id . "'";

    mysqli_query($conn, $sql);
}

header('Location:Data.php');


?>