<?php include('server.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign-Up Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css"/>
        
    </head>
    <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">    
            <div class="col">
                <a class="navbar-brand" href="index.php"> 
                 <img src="logo.png" width="120" height="60"> Farming Friend
                </a>
            </div>
            
            <div class="col-1.5">
                <a class="nav-link" href="index.php">Home</a>
            </div> 
            <div class="col-1.5">
                <a class="nav-link" href="about.php">About</a>
            </div> 
            <div class="col-1.5">
                <a class="nav-link" href="contact.php">Contact</a>
            </div> 
            <div class="col-1.5">
                <a class="nav-link" href="login.php">Login</a>
            </div>
            <div class="col-1.5">
                <a class="nav-link" href="signUp.php">Sign Up</a>
            </div>
        </div>  
        <style>
            .navbar a{
                color:black;
            }
            .navbar a:hover{
                color:#00ac96;
            }
        </style>
    </nav>
    <div class="content  rounded">
    <div class="container">
        <div class="row">
        <div class="col-6 ">
            <img src="threeSheep.jpg" class="img-fluid" alt="image">
            </div>
            <div class="col-6">
                <h1 class="signin-text mb-3">Sign Up</h1>
                
                <form action="signUp.php" method="POST">
                
                    <div class="form-group2">
                        <label for="firstName">  First Name  </label>
                        <input type="text" name="firstName" required class="form-control2">

                        <label for="lastName"> Last Name  </label>
                        <input type="text" name="lastName" required class="form-control2">

                        <label for="email"> Email </label>
                        <input type="email" name="email"  required class="form-control2">

                        <label for="phoneNumber"> Phone Number  </label>
                        <input type="text" name="phoneNumber" Required required class="form-control2">

                        <label for="herdNumber"> Herd Number  </label>
                        <input type="text" name="herdNumber" required class="form-control2">

                        <label for="password1"> Password </label>
                        <input type="text" name="password1" required class="form-control2">

                        <label for="password2"> Confirm Password  </label>
                        <input type="text" name="password2" required class="form-control2">
                <br>   
                <button class="btn btn-class"  type="submit"  name="submit" action="/home/index.php" method="POST">Sign Up!</button>   
                
            </div>
                </form>
                
                
                <h6>Already a user?</h6>                            
                        <a href="index.php" class="btn btn-class">Login</a>
            </div>
        </div>
</div>
    </div>

    <footer class="text-center text-lg-start text-white" style="background-color: black">
    <div class="container p-4 pb-0">
      <section class="">
        <div class="row">
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Farming Friend
            </h6>
            <img src="logo.png">
          </div>

          <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Location</h6>
            <p>Dunross,</p>
            <p>Culdaff,</p>
            <p>Co. Donegal,</p>
            <p>Ireland.</p>
          </div>

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> farmingfriend@gmail.com</p>
            <p><i class="fas fa-envelope mr-3"></i> help@farmingfriend.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
      </section>
    </div>

    <div class="text-center p-3" style="background-color: #00ac96">
     <h8> ?? 2022 Copyright: Farming Friend</h8>
    </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        
    </script>
    </body>
</html>
