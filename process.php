<?php

session_start();

    $mysqli = new mysqli('localhost', 'root', '', 'student-info') or die(mysqli_error($mysqli));
    $name = '';
    $email = '';
    $mobile = '';
    $college = '';
    $stream = '';
    $year = '';
    $company = '';

    $update = false;
    $id = 0;
    
    //saving new entry when save button clicked
    if (isset($_POST['save'])){
        $name = $_POST['names'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $college = $_POST['college'];
        $stream = $_POST['stream'];
        $year = $_POST['year'];
        $company = $_POST['company'];

        $mysqli->query("INSERT INTO contact (names,email,mobile,college,stream,graduation,company) VALUES ('$name','$email','$mobile','$college','$stream','$year','$company')") or
            die($mysqli->error);

        header("location: contact.php");
    
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM contact WHERE id=$id") or die($mysqli_error());

        header("location: contact.php");
    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM contact WHERE id=$id") or die($mysqli_error());
        
        $row = $result->fetch_array();
        $name = $row['names'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $college = $row['college'];
        $stream = $row['stream'];
        $year = $row['graduation'];
        $company = $row['company'];
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['names'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $college = $_POST['college'];
        $stream = $_POST['stream'];
        $year = $_POST['year'];
        $company = $_POST['company'];

        $mysqli->query("UPDATE contact SET names='$name', email='$email', mobile='$mobile',college='$college',stream='$stream',graduation='$year',company='$company' WHERE id =$id") or die($mysqli->error);

            header("location: contact.php");
    }
?>