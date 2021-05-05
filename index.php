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
    <section class="background firstSection">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">The future of education is here</p>
                <p class="text-small">In this world, we need education for all. The future world will be a well educated one.</p>
                <div class="buttons">
                    <button class="btn">Know More</button>
                    <button class="btn">Subscribe</button>
                </div>
            </div>
            <div class="secondHalf">
                <img src= "img/laptop.jpg" alt="Laptop Image">
            </div>
        </div>

    </section>

    <section class="secRight">
        <div class="paras">
            <p class="sectionTag text-big">Quality education at your fingertips</p>
            <p class="sectionSubTag text-small">This is demo text for display on this website please 
            please ignore. This text is just for aesthetic purposes and has no meaning
            in relation to the website. This is demo text for display on this website please 
            please ignore. This text is just for aesthetic purposes and has no meaning
            in relation to the website. This is demo text for display on this website please 
            please ignore. This text is just for aesthetic purposes and has no meaning
            in relation to the website</p> 
        </div>
        <dic class="thumbnail">
            <img src="https://source.unsplash.com/250x250/?html" alt"" class="imgFluid">
        </div>
    </section>

    <section class="secLeft">
        <div class="paras">
            <p class="sectionTag text-big">Quality education at your fingertips</p>
            <p class="sectionSubTag text-small">This is demo text for display on this website please 
            please ignore. This text is just for aesthetic purposes and has no meaning
            in relation to the website. This is demo text for display on this website please 
            please ignore. This text is just for aesthetic purposes and has no meaning
            in relation to the website. This is demo text for display on this website please 
            please ignore. This text is just for aesthetic purposes and has no meaning
            in relation to the website</p> 
        </div>
        <dic class="thumbnail">
            <img src="https://source.unsplash.com/250x250/?css" alt="" class="imgFluid">
        </div>
    </section>

    <section class="secRight">
        <div class="paras">
            <p class="sectionTag text-big">Quality education at your fingertips</p>
            <p class="sectionSubTag text-small">This is demo text for display on this website please 
            please ignore. This text is just for aesthetic purposes and has no meaning
            in relation to the website. This is demo text for display on this website please 
            please ignore. This text is just for aesthetic purposes and has no meaning
            in relation to the website. This is demo text for display on this website please 
            please ignore. This text is just for aesthetic purposes and has no meaning
            in relation to the website</p> 
        </div>
        <dic class="thumbnail">
            <img src="https://source.unsplash.com/250x250/?javascript, php" alt="" class="imgFluid">
        </div>
    </section>

    <section class="secLeft">
        <div id="data">
        <button type="btn btn-dark text-centre" onclick="loadDoc()">Show more info</button>
    </div></section>

    <script>
        function loadDoc() {
        var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("data").innerHTML =
            this.responseText;
        }
    };
    xhttp.open("GET", "data.txt", true);
    xhttp.send();
    }
    </script>

    <section class="contact">
        <h2 class="text-centre">Contact Us</h2>
        <div id="error"></div>
        <form id="form" action="" method="post">
            <div class="form">
                <input type="text" name="name" id="name" placeholder="Enter your name" required>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone" required>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                <button class="btn btn-dark text-centre" type="submit" onClick="save()" id="button">Submit</button>
            </div>
    </section>

<?php        
    
?>

</body>
</html>

