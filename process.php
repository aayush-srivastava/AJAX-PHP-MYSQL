<?php

    $mysqli = new mysqli('localhost', 'root', '', 'student-info') or die(mysqli_error($mysqli));

    if (isset($_POST['save'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $college = $_POST['college'];
        $stream = $_POST['stream'];
        $year = $_POST['year'];
        $company = $_POST['company'];

        $mysqli->query("INSERT INTO contact (names,email,mobile,college,stream,graduation,company) VALUES ('$name','$email','$mobile','$college','$stream','$year','$company')") or
            die($mysqli->error);
    }
?>