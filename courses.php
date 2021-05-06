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
            <div class="logo"><a href="index.php"><img src="img/laptop.jpg" alt ="logo"></a></div>
            <li><a href = "index.php">Home</a></li>
            <li><a href = "#about">About</a></li>
            <li><a href = "courses.php">Courses</a></li>
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

    <div>
        <table id="jsonTable" CLASS="styled-table">
            <tr>
                <th>COURSE</th>
                <th>FLOOR</th>
                <th>BATCH SIZE</th>
                <th>SET SCORE</th>
            </tr>
        </table>
    </div>
    <script>
        document.addEventListener( "DOMContentLoaded", get_json_data, false ); 

        function get_json_data(){
            var json_url = 'example.json';

            //AJAX request
            xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() { 
                if (this.readyState == 4 && this.status == 200) {
                    var data = JSON.parse(this.responseText); // JSON parser 
                    append_json(data);
                }
            }
            
            xmlhttp.open("POST", json_url, true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send(); 
        }

        //append the json data to the table 
        function append_json(data){
            var table = document.getElementById('jsonTable');
            data.forEach(function(object) {
                var tr = document.createElement('tr');
                tr.innerHTML = '<td>' + object.COURSE + '</td>' +
                '<td>' + object.LoC + '</td>' +
                '<td>' + object.BATCHSIZE + '</td>' +
                '<td>' + object.SET + '</td>';
                table.appendChild(tr);
            });
        }
    </script>

    <div class="address">
        <button id="hide" class="btn btn-dark text-centre">Hide Address</button> 
        <p class="sectionSubTag text-small text-centre t"><br>Symbiosis Institute of Technology<br>Symbiosis International University<br>Lavale, Mulshi<br>Pune, Maharashtra 412 115</p>
        <button id="show" class="btn btn-dark text-centre">Show Address</button>
    </div>        

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("#hide").click(function(){
            $("p").hide();
        });
        $("#show").click(function(){
            $("p").show();
        });
        });
    </script>    


</body>
</html>
