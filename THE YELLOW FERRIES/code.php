<?php
    session_start();
    require 'dbcon.php';

    if(isset($_POST['delete'])){

        $id = mysqli_real_escape_string($con, $_POST['delete']);

        $query = "DELETE FROM passengers WHERE id='$id' ";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message'] = "Passenger Deleted Succesfully";
            header("Location: index.php");
            exit(0);
        }
        else{
            $_SESSION['message'] = "Passenger Not Deleted";
            header("Location: index.php");
            exit(0);
        }
    }

    if(isset($_POST['update_passenger'])){
        
        $id = mysqli_real_escape_string($con, $_POST['id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $number = mysqli_real_escape_string($con, $_POST['number']);
        $address = mysqli_real_escape_string($con, $_POST['address']);

        $query = "UPDATE passengers SET name='$name', email='$email', number='$number', address='$address' 
                    WHERE id='$id' ";

        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message'] = "Passenger Updated Succesfully";
            header("Location: index.php");
            exit(0);
        }
        else{
            $_SESSION['message'] = "Passenger Not Updated";
            header("Location: index.php");
            exit(0);

        }
    }

    if(isset($_POST['save'])){
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $number = mysqli_real_escape_string($con, $_POST['number']);
        $address = mysqli_real_escape_string($con, $_POST['address']);

        $query = "INSERT INTO passengers (name, email, number, address) VALUES 
            ('$name','$email','$number','$address')";

        $query_run = mysqli_query($con, $query);


        if($query_run){
            $_SESSION['message'] = "Passenger Added Succesfully";
            header("Location: index.php");
            exit(0);
        }
        else{
            $_SESSION['message'] = "Passenger Not Added";
            header("Location: index.php");
            exit(0);
        }
        
    }
?>