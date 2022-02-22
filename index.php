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

    <div class="container">
        <h1>Farming Friend</h1>
        <div class="row content">
        <div class="col-md-6 mb-3">
            <img src="backgroundSheep.jpg" class="img-fluid" alt="image">
            </div>
            <div class="col-md-6">
                <h3 class="signin-text mb-3">Log In</h3>
                <form>
                    <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password"> Password </label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label" for="checkbox"> Remember Me!</label>
                        <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
                    </div>
                    <button class="btn btn-class" type="submit">Login</button>
                    <a href="signUp.php" class="btn btn-class">Sign Up</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        
    </script>
    </body>
</html>