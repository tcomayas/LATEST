<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets//css/bootstrap.min.css">



    <title>Document</title>

</head>

<body>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Passenger Info
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label for="">NAME</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">EMAIL</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">NUMBER</label>
                                <input type="text" name="number" class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <label for="">ADDRESS</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save" class="btn btn-primary">SAVE</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>