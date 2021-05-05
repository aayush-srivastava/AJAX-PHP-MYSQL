<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" class="rel">
    <script defer src="js/resp.js"></script>
    <script defer src="js/script.js"></script>
    <title>EducateUS - Transforming Online Education</title>
</head>
<body>
    <nav class="navbar h-nav">
        <ul class="nav-list v-class">
            <div class="logo"><img src="img/laptop.jpg" alt ="logo"></div>
            <li><a href = "index.php">Home</a></li>
            <li><a href = "#about">About</a></li>
            <li><a href = "#services">Services</a></li>
            <li><a href = "contact.php">Contact Us</a></li>
        </ul>
        <div class="rightNav v-class">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>

    <form action="" method="POST">
    <section class="contact">
        <div class = "form">
        <input type="text" name="name" placeholder="Enter full name">
        <input type="text" name="name" placeholder="Enter email">
        <input type="text" name="name" placeholder="Mobile">
        <input type="text" name="name" placeholder="College name">
        <input type="text" name="name" placeholder="Stream or Branch">
        <input type="text" name="name" placeholder="Year of Graduation">
        <input type="text" name="name" placeholder="Current Company">        
        <button class="btn btn-dark text-centre" type="submit" name="save" id="button">Submit</button>
        </div>
    </section>
    </form>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'student-info') or die(mysqli_error($mysqli))

    ?>

</body>
</html>

