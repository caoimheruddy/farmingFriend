<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Contact Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
            .img-responsive{
                width:500px;
                height:400px;
                padding-left:50px;
               
                
            }
            body{
                background-color:#F8F9FA;
            }
            .content{
                height:540px;
                background-color:#00ac96 ;
                border: 2px solid #F8F9FA;
                outline: darkorange solid 10px;
            }
            .contact{
                float:left;
                width:50%;
                height:500px;
            }
            .image{
                float:right;
                height:500px;
                padding-right:50px;
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
            h8{
                color:#F8F9FA;
            }
            
            
        </style>
    </nav>

    <br>
    <br>
    <br>
    
    <div class="content  rounded">
        <div class="contact">
            <h1>Want To Get In Touch?</h1>
            
            <h8>Enter your query below and a member of our team will aim to respond to your query within the next working day.</h8>
            <br>
            <div class="row">

        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" method="POST">

                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="">Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="email" class="">Email</label>
                            <input type="text" id="email" name="email" class="form-control"> 
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <label for="message">Message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>
                    </div>
                </div>
               
            </form>
            <br>
            <div class="text-center text-md-left">
                <a class="btn btn-class">Send</a>
            </div>
            <div class="status"></div>
        </div>

    </div>
            
        </div>
        <div class="image">
            <img src="farmer.jpg" class="img-responsive">
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
     <h8> © 2022 Copyright: Farming Friend</h8>
    </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"> 
    </script>
    </body>
</html>