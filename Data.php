<!DOCTYPE html>
<html lang="en">

<?php


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table">
            
            <thead>
                <th>std_id</th>
                <th>student_name</th>
                <th>student_address</th>
                <th>gender</th>

                <th>email</th>
                <th>Action</th>

            </thead>

            <tbody>
                <?php

                include  'Connect.php';

                $sql = "SELECT * FROM tbl_student";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result)  > 0) {
                    while ($row = mysqli_fetch_array($result)) {

                ?>

                        <tr>
                            <td><?php echo $row['std_id']; ?></td>
                            <td><?php echo $row['std_name']; ?></td>
                            <td><?php echo $row['std_address'] ?></td>

                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><a href="Edit2.php?id=<?php echo $row['std_id']?>" class="btn btn-primary">Edit</a></td>
                            <td><a href="Delete.php?id=<?php echo $row['std_id'] ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                <?php

                    }
                }


                ?>
            </tbody>
        </table>
    </div>

</body>

</html>