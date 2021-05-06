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
<body class="table-back">
    <nav class="navbar h-nav">
        <ul class="nav-list v-class">
            <div class="logo"><img src="img/laptop.jpg" alt ="logo"></div>
            <li><a href = "index.php">Home</a></li>
            <li><a href = "#about">About</a></li>
            <li><a href = "#services">Services</a></li>
            <li><a href = "contact.php">Students</a></li>
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

    <?php require_once 'process.php'; ?>

    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'student-info') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM CONTACT") or die($mysqli->error);
        //pre_r($result);
    ?>
        
    <div class="table-back">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>College</th>
                    <th>Stream</th>
                    <th>Graduation</th>
                    <th>Company</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php
                //display all entries in table in order of id
                while($row = $result->fetch_assoc()):?>
                    <tr>
                        <td><?php echo $row['names'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['mobile'];?></td>
                        <td><?php echo $row['college'];?></td>
                        <td><?php echo $row['stream'];?></td>
                        <td><?php echo $row['graduation'];?></td>
                        <td><?php echo $row['company'];?></td>
                        <td>
                            <a href="contact.php?edit=<?php echo $row['id'];?>"
                                class="btn btn-edit text-centre">Edit</a>
                            <a href="contact.php?delete=<?php echo $row['id'];?>"
                                class="btn btn-delete text-centre">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
        </table>
    </div>

    <?php
        //function to read as an array
        function pre_r($array){
            echo '<pre>';
            print_r($array);
            echo '<pre>';
        }
    ?>

    <form action="process.php" method="POST">

        <input type="hidden" name = "id" value = "<?php echo $id;?>">

    <section class="table-back">
        <div class = "form">
        <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter full name">
        <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter email">
        <input type="text" name="mobile" value="<?php echo $mobile; ?>" placeholder="Mobile">
        <input type="text" name="college" value="<?php echo $college; ?>" placeholder="College name">
        <input type="text" name="stream" value="<?php echo $stream; ?>" placeholder="Stream or Branch">
        <input type="text" name="year" value="<?php echo $year; ?>" placeholder="Year of Graduation">
        <input type="text" name="company" value="<?php echo $company; ?>" placeholder="Current Company">   
        
        <?php if($update == true):?>
                <button class="btn btn-dark text-centre" type="submit" name="update">Update</button>
        <?php else:?>
                <button class="btn btn-dark text-centre" type="submit" name="save">Add</button>
        <?php endif;?> 

        </div>
    </section>
    </form>

</body>
</html>
