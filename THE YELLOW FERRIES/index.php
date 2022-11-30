<?php 
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./assets//css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="container mt-5">

        <?php include('message.php')?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Passenger Details
                        <a href="passenger-create.php" class="btn btn-primary float-end">Add Passenger</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Passenger Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM passengers";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0){
                                        foreach($query_run as $student){
                                            ?>
                                            <tr>
                                                <td><?= $student['id'];?></td>
                                                <td><?= $student['name'];?></td>
                                                <td><?= $student['email'];?></td>
                                                <td><?= $student['number'];?></td>
                                                <td><?= $student['address'];?></td>
                                                <td>
                                                    <a href="passenger-view.php?id=<?= $student['id'];?>" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                                    <a href="passenger-edit.php?id=<?= $student['id'];?>" class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" value="<?=$student['id'];?>" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            
                                            <?php
                                        }
                                    }
                                    else{
                                        echo "<h5>No Record Found!</h5>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>