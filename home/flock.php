<?php
include_once('../server.php');
//connect to db 
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "farmingFriend";
$conn = mysqli_connect($servername, $username, $password, $dbName );

$animalquery = "SELECT * FROM flock";
$animalResult = mysqli_query($conn, $animalquery);
//$query = mysqli_fetch_assoc($animalResults);
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>My Flock</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../style.css"/>
        <script
          src="https://cdnjs.cloudflare.com/ajax/libs/brython/3.9.0/brython.js">
        </script>
    </head>

    <body onload="brython()">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">    
            <div class="col">
                <a class="navbar-brand" href="index.php"> 
                 <img src="../logo.png" width="120" height="60"> Farming Friend
                </a>
            </div>
            
            <div class="col-1.5">
                <a class="nav-link" href="flock.php">My Flock</a>
            </div> 
            <div class="col-1.5">
                <a class="nav-link" href="../index.php">Sign Out</a>
            </div>
            
        </div>  
        <style>
            .navbar a{
                color:black;
            }
            .navbar a:hover{
                color:#00ac96;
            }
            .img-responsive{
                width:500px;
                height:400px;
                padding-left:50px;
               
                
            }
            body{
                background-color:#00ac96;
            }
            .col-6{
                height:540px;
                background-color:#00ac96 ;
                border: 2px solid #F8F9FA;
                outline: darkorange solid 5px;
                text-align:center;
                float:left;
                margin-left:100px;
                margin-right:25px;
            }
            .col-4{
                height: 400px;
                border: 2px solid #F8F9FA;
                outline: black solid 5px;
                text-align: center;
                margin-left: 25px;
                margin-right: 25px;
                float: left;
            }

            .form-control2{
                width:150px;
                text-align:center;
                margin:auto;
            }
            
            .btn-class{
                background-color:darkorange;
                color:black;
                border-color:black;
            }
            .btn-class:hover{
                background-color: black;
                color:#fff;
            }
            .jumbotron{
                background-color:darkorange;
                height:200px;
                
            }
            .jumbotron p{
                color:white;
            }
            .col-sm-4 img{
                width:400px;
                height:300px;
            }
            a{
                color:white;
            }
            a:hover{
                color:darkorange;
            }
            .table{
                width:40%;
                float:left; 
                line-height:40px;
                padding:10%;

            }
            h2{
                color:darkorange;
                text-align:center;
            }
            h5{
                color:#F8F9FA;
            }
            h6{
                color:#F8F9FA;
            }

        </style>
    </nav>

    <br>
    <br>
    <br>
    
    <br>
<br>
<br>
<br>


<table class="col-6" border="3px">
            <tr>
                <th colspan="3"><h2>My Flock</h2></th>
            </tr>
            <t>
                <th><h5>Animal Eartag</h5></th>
                <th><h5>D.O.B</h5></th>
                <th><h5>Sex</h5></th>
            </t>
        <?php
        while($rows=mysqli_fetch_assoc($animalResult))
        {

        
        ?>
            <tr>
                <td><?php echo $rows['animalEartag']; ?></td>
                <td><?php echo $rows['dob']; ?></td>
                <td><?php echo $rows['sex']; ?></td>
            </tr>
         <?php
        }
        ?>
</table>


    
 
        
            <div class="col-4">
                <h1 class="signin-text mb-3">New Animal</h1>
                
                <h6>Here you can log any new animals.</h6>
                
                <form action="flock.php" method="POST">
                
                    <div class="form-group2">
                        <label for="dob">  Date of Birth </label>
                        <input type="date" name="dob" required class="form-control2">

                        <label for="sex"> Sex </label>
                        <input type="text" name="sex" required class="form-control2">

                        <label for="animalEartag"> Eartag Number </label>
                        <input type="text" name="animalEartag" required class="form-control2">

                       
                <br>   
                <button class="btn btn-class"  type="submit"  name="animalSubmit" action="/home/index.php" method="POST">Add Animal</button>
                <button class="btn btn-class"  type="submit" name="scanSubmit" action="textDetection.py" method="POST">Click here to scan! </button>
                </div>
                </form>
                
            </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

    </body>
</html>
